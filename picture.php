<?php
  //
  //
  $img = imagecreate(300, 300);

  //
  //
  $red = imagecolorallocate($img, 255, 0, 0);
  $white = imagecolorallocate($img, 255, 255, 255);

  //
  //
  imagecolorallocate($img, 0, 0, 300, 300, $red);

  //
  //
  $txt = $_GET['text'];
  $font = "HERE THR FONT WITH EXTENSION .ttf";
  imagettftext($img, 24, 0, 5, 55, $white, $font, $text);

  //
  //
  imagepng($img, "yourImg.png");
  echo "done ;)";
?>
