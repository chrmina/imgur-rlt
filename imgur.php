<?php
//Generate Random String
function imgurCode()
{
  $str = "ABCDEFGHJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz012345678923456789";
  $randomized = "";

  for($i=0; $i < 5; $i++)
    {
      $randomized .= $str{rand() % strlen($str)};
    }

  return $randomized;
}
echo '<br /><br />';
echo '<table>';

echo '<tr>';
echo '<td>';
$code = imgurCode();
echo '<a href="http://i.imgur.com/'.$code.'.jpg"><img src="http://i.imgur.com/'.$code.'.jpg" width="150" height="150"></a>';
echo '<br />';
echo '<a href="http://i.imgur.com/'.$code.'.jpg">'.$code.'</a>';
echo '</td>';
echo '<td>';
$code = imgurCode();
echo '<a href="http://i.imgur.com/'.$code.'.jpg"><img src="http://i.imgur.com/'.$code.'.jpg" width="150" height="150"></a>';
echo '<br />';
echo '<a href="http://i.imgur.com/'.$code.'.jpg">'.$code.'</a>';
echo '</td>';
echo '<td>';
$code = imgurCode();
echo '<a href="http://i.imgur.com/'.$code.'.jpg"><img src="http://i.imgur.com/'.$code.'.jpg" width="150" height="150"></a>';
echo '<br />';
echo '<a href="http://i.imgur.com/'.$code.'.jpg">'.$code.'</a>';
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>';
$code = imgurCode();
echo '<a href="http://i.imgur.com/'.$code.'.jpg"><img src="http://i.imgur.com/'.$code.'.jpg" width="150" height="150"></a>';
echo '<br />';
echo '<a href="http://i.imgur.com/'.$code.'.jpg">'.$code.'</a>';
echo '</td>';
echo '<td>';
$code = imgurCode();
echo '<a href="http://i.imgur.com/'.$code.'.jpg"><img src="http://i.imgur.com/'.$code.'.jpg" width="150" height="150"></a>';
echo '<br />';
echo '<a href="http://i.imgur.com/'.$code.'.jpg">'.$code.'</a>';
echo '</td>';
echo '<td>';
$code = imgurCode();
echo '<a href="http://i.imgur.com/'.$code.'.jpg"><img src="http://i.imgur.com/'.$code.'.jpg" width="150" height="150"></a>';
echo '<br />';
echo '<a href="http://i.imgur.com/'.$code.'.jpg">'.$code.'</a>';
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>';
$code = imgurCode();
echo '<a href="http://i.imgur.com/'.$code.'.jpg"><img src="http://i.imgur.com/'.$code.'.jpg" width="150" height="150"></a>';
echo '<br />';
echo '<a href="http://i.imgur.com/'.$code.'.jpg">'.$code.'</a>';
echo '</td>';
echo '<td>';
$code = imgurCode();
echo '<a href="http://i.imgur.com/'.$code.'.jpg"><img src="http://i.imgur.com/'.$code.'.jpg" width="150" height="150"></a>';
echo '<br />';
echo '<a href="http://i.imgur.com/'.$code.'.jpg">'.$code.'</a>';
echo '</td>';
echo '<td>';
$code = imgurCode();
echo '<a href="http://i.imgur.com/'.$code.'.jpg"><img src="http://i.imgur.com/'.$code.'.jpg" width="150" height="150"></a>';
echo '<br />';
echo '<a href="http://i.imgur.com/'.$code.'.jpg">'.$code.'</a>';
echo '</td>';
echo '</tr>';

echo '</table>';

?>
