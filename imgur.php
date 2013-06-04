<?php

function imgurCode() {
  //Generate Random String
  $str = "ABCDEFGHJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz012345678923456789";
  $randomized = "";

  for($i=0; $i < 5; $i++) {
    $randomized .= $str{mt_rand(0, strlen($str)-1)};
  }

  return $randomized;
}

echo '<br /><br />';
echo '<table>';

echo '<tr>';
echo '<td>';
$code = imgurCode();
echo '<a href="http://i.imgur.com/'.$code.'.jpg" rel="lightbox" title="'.$code.'"><img src="http://i.imgur.com/'.$code.'.jpg" width="150" height="150"></a>';
echo '</td>';
echo '<td>';
$code = imgurCode();
echo '<a href="http://i.imgur.com/'.$code.'.jpg" rel="lightbox" title="'.$code.'"><img src="http://i.imgur.com/'.$code.'.jpg" width="150" height="150"></a>';
echo '</td>';
echo '<td>';
$code = imgurCode();
echo '<a href="http://i.imgur.com/'.$code.'.jpg" rel="lightbox" title="'.$code.'"><img src="http://i.imgur.com/'.$code.'.jpg" width="150" height="150"></a>';
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>';
$code = imgurCode();
echo '<a href="http://i.imgur.com/'.$code.'.jpg" rel="lightbox" title="'.$code.'"><img src="http://i.imgur.com/'.$code.'.jpg" width="150" height="150"></a>';
echo '</td>';
echo '<td>';
$code = imgurCode();
echo '<a href="http://i.imgur.com/'.$code.'.jpg" rel="lightbox" title="'.$code.'"><img src="http://i.imgur.com/'.$code.'.jpg" width="150" height="150"></a>';
echo '</td>';
echo '<td>';
$code = imgurCode();
echo '<a href="http://i.imgur.com/'.$code.'.jpg" rel="lightbox" title="'.$code.'"><img src="http://i.imgur.com/'.$code.'.jpg" width="150" height="150"></a>';
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>';
$code = imgurCode();
echo '<a href="http://i.imgur.com/'.$code.'.jpg" rel="lightbox" title="'.$code.'"><img src="http://i.imgur.com/'.$code.'.jpg" width="150" height="150"></a>';
echo '</td>';
echo '<td>';
$code = imgurCode();
echo '<a href="http://i.imgur.com/'.$code.'.jpg" rel="lightbox" title="'.$code.'"><img src="http://i.imgur.com/'.$code.'.jpg" width="150" height="150"></a>';
echo '</td>';
echo '<td>';
$code = imgurCode();
echo '<a href="http://i.imgur.com/'.$code.'.jpg" rel="lightbox" title="'.$code.'"><img src="http://i.imgur.com/'.$code.'.jpg" width="150" height="150"></a>';
echo '</td>';
echo '</tr>';

echo '</table>';

?>
