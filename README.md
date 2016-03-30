# statTrack

statTrack

Provides a simple soloution for tracking gym progress. The aim is to develop web scripting/developing skills.
Each user has their own custom list of exercises which are selected from a catalouge and added to their list; once exercises have been added to the list, the user is then required to select an exercise from their list and enter into a form, both the weight in numerical form and the date they lifted the weight. This data is entered over time to produce a set of data which is used to provide a graphical representation in the form of a line graph. 

Outside of this functionaility there is a forum for dissucsion related to performace and general  disscussion on the topic(functionaility includes post, delete and edit)  

inorder to  speed  up  the  process of searching for excercises from the catalogue a live  search bar will hopfully be created. This should apply filters to the cataloge and dynamicly change the displayed items (AJAX?) 

wireframe  
http://imgur.com/GlD6xCb

notes-
Json string to hold user exercise list: to make the changes parse it so you can apply the changes to a native JavaScript Object, then stringify back to JSON.

login-https://developers.google.com/identity/protocols/OAuth2#basicsteps try to obtain user id to tie to mySQL ID

d3 + json http://stackoverflow.com/questions/22316866/d3js-getting-a-line-chart-drawn-from-json-data-input-using-d3-json
mySQL   to  Json http://www.kodingmadesimple.com/2015/01/convert-mysql-to-json-using-php.html
mysql to .csv works with dates and int
