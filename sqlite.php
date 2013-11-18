<?php
  class MyDB extends SQLite3
  {
    function __construct()
    {
      $this->open('images.db');
    }
  }
  
  $db = new MyDB();
  if(!$db)
  {
    echo $db->lastErrorMsg();
  }
  else
  {
    echo "Opened database successfully\n";
  }

  $sql =
<<<EOF
CREATE TABLE LINKS
(ID INTEGER PRIMARY KEY,
URL TEXT NOT NULL);
EOF;

  $ret = $db->exec($sql);
  if(!$ret)
  {
    echo $db->lastErrorMsg();
  }
  else
  {
    echo "Table created successfully\n";
  }
  $db->close();   
?>