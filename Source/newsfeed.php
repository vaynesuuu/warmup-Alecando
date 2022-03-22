<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'newsfeeddb';


try{
  $dsn = 'mysql:host='.$host .'; dbname='.$dbname;
  $newsfeedcon = new PDO($dsn,$user,$password);


  $newsfeedcon->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}
catch(PDOException $error)
{
  $error->getMessage();
  echo "Failed to Connect";
}

  ?> 

