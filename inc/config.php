<?php
/**
*
*inspiration taken from the linbeta source code
*/


/*database information*/
const DBHOST = '127.0.0.1';
const DBNAME = 'stattrack';
const DBUSER = 'root'; //user has read and write permission
const DBPW = ''; //default pwd

//associated data structure used to describe a connection to a data source.

/*database tables
*const used to ensure that tables are both public and static
so they can be used by other classes for queries.
it also ensure that values cannot be changed
*/

const CATTABLE = "CREATE TABLE catagory(
      id    INT PRIMARY KEY AUTO_INCREMENT,
      type   VARCHAR(20)
      )";
//adds a constraint on excersise to link to a catagory table making joins easier
const EXERCISETABLE = "CREATE TABLE exercise(
       id            INT PRIMARY KEY AUTO_INCREMENT,
       name          VARCHAR(20),
       description   TEXT,
       c_id          INT
      CONSTRAINT c_idfk FOREIGN KEY (c_id) REFERENCES catagory(id))";
