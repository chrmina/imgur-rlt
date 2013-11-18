<?php
    class MyDB extends SQLite3
    {
        function __construct()
        {
            $this->open('images.db');
        }
    }

    function mklink()
    {
        $db = new MyDB();
        $count = $db->querySingle("SELECT COUNT(*) as count FROM LINKS");
        //echo $count;
        $db->close();

        $rnd = mt_rand(0, $count);

        $db = new MyDB();
        if(!$db)
        {
            echo $db->lastErrorMsg();
        }
        else
        {
            //echo "Opened database successfully\n";
            $sql = "SELECT * from LINKS WHERE ID = ".$rnd.";";
            $ret = $db->query($sql);
            while($row = $ret->fetchArray(SQLITE3_ASSOC) )
            {
                return $row['URL'];
                //echo "ID = ". $row['ID'] . "\n";
                //echo "URL = ". $row['URL'] ."\n\n";
            }
            //echo "Operation done successfully\n";
            $db->close();
        }
    }
   
    function imgout()
    {
        echo '<td>';
        $url = mklink();
        echo '<a href="'.$url.'" rel="lightbox" title="'.$url.'"><img src="'.$url.'" width="150" height="150"></a>';
        echo '</br><center><a href="https://www.google.com/searchbyimage?&image_url='.$url.'" target="_blank">Reverse Image Search</a></center>';
        echo '</td>';
    }

    echo '<br /><br />';
    echo '<table>';
    for($j=0; $j < 3; $j++)
    {
        echo '<tr>';
        for($i=0; $i < 3; $i++)
        {
            imgout();
        }
         echo '</tr>';
    }
    echo '</table>';
?>
