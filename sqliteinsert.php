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
      echo "Opened database successfully.\n";
   }

   function createurl()
   {
      //Generate Random String
      $str = "ABCDEFGHJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz012345678923456789";
      $randomized = "";
      for($i=0; $i < 5; $i++)
      {
         $randomized .= $str{mt_rand(0, strlen($str)-1)};
      }
      $url = 'http://i.imgur.com/'.$randomized.'.jpg';
      return $url;
   }

   function testurl($tsturl)
   {
      $ch = curl_init($tsturl);
      curl_setopt($ch, CURLOPT_NOBODY, true);
      curl_exec($ch);
      $retcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
      // $retcode > 400 -> not found, $retcode = 200, found.
      //echo $retcode."\n";
      //echo $link."\n";
      curl_close($ch);
      if ($retcode == "302")
      {
         return FALSE;
      }
      else
      {
         return TRUE;
      }
   }

   for ($i = 1; $i <= 1000; $i++)
   {
      echo $i.": ";
      $link = createurl();
      while (testurl($link) === FALSE)
      {
         $link = createurl();
      }
      $sql = "INSERT INTO LINKS (ID, URL) VALUES (NULL,'".$link."');";
      $ret = $db->exec($sql);
      if(!$ret)
      {
         echo $db->lastErrorMsg();
      }
      else
      {
         echo "Record created successfully: ".$link."\n";
      }
   }
   $db->close();
   echo "Database closed successfully.\n";
?>
