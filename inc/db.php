<?php

/**
 * Class DBException
 */
class DBException extends Exception
{
    // stub
}

/*
Re-usable database utilities in PDO
(c) C Lester 2013 (mysqli), 2014 (PDO)
*/

class DB
{
    private $pdo;
    private $dsn;

    /**
     * @param msg $
     * @throws DBException
     */
    private function throwException($msg = "Unknown DB Error")
    {
        if ($this->pdo) {
            $msg .= $this->pdo->errorInfo()[1];
            $msg .= " ";
            $msg .= $this->pdo->errorInfo()[2];
        }

        if ($this->dsn) {
            $msg .= "DSN: ".$this->dsn;
        }

        throw new DBException(
            $msg
        );
    }

    /**
     * Constructor that connects connects to a MySQL engine
     * using application constants DBHOST, DBUSER, and DBPW
     * (which are defined in inc/config.php).
     *
     * If the database doesn't exist, it is created and
     * initialised it using an
     * application function with spec
     * Initialize_myDatabase($DB,$EZ)
     * where $DB refers to the current connection object, and $EZ refers to
     * this instance of DR_easy.
     */
    public function __construct()
    {
        // CONNECT TO THE DATABASE SERVER
        $this->dsn = "mysql:host=" . DBHOST.";";

        // mysql:host=localhost;dbname=testdb
        // mysql:host=localhost;port=3307;dbname=testdb
        // mysql:unix_socket=/tmp/mysql.sock;dbname=testdb


        $option = array(
        	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        	PDO::ATTR_PERSISTENT => true
        );

        try {
            $this->pdo = new PDO($this->dsn, DBUSER, DBPW, $option);
        } catch (PDOException $failure) {
             DB::throwException("Connect failed during construct");
        }

        try {
            $this->pdo->query("use ".DBNAME);
        } catch (PDOException $failure) {
             // DB::throwException("Connect failed during use");
        }

    }

    // Close() closes the connection established by the above constructor.
    public function close()
    {
        $this->pdo = null;
    }

}
