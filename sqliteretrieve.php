<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('images.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }

   $count = $db->querySingle("SELECT COUNT(*) as count FROM LINKS");
   echo "There are ".$count." rows in the LINKS table.\n";  
   /*
   $sql = "SELECT * from LINKS;";
   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      echo "ID = ". $row['ID'] . "\n";
      echo "URL = ". $row['URL'] ."\n\n";
   }
   echo "Operation done successfully\n";
   */
   $db->close();
?>