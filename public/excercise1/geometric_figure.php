<?php

class Geometry{

 public function createPolygon(){
      header('Content-type: image/png');
      $png_image = imagecreate(300, 300);
      $grey = imagecolorallocate($png_image, 229, 229, 229);
      $green = imagecolorallocate($png_image, 128, 204, 204);
      imagefilltoborder($png_image, 0, 0, $grey, $grey);
      
      $poly_points_center = array(150, 50,  50, 150, 250, 150);
      imagefilledpolygon ($png_image, $poly_points_center, 3, $green);  

      $poly_points_top = array( 150,  30,  100, 70,  200,  70  ); 
      imagefilledpolygon ($png_image, $poly_points_top, 3, $green);  

      $poly_points_left = array( 70,  100, 30, 150, 70,  180 ); 
      imagefilledpolygon ($png_image, $poly_points_left, 3, $green);  

      $poly_points_right = array( 230,  110, 230, 180, 280, 150 ); 
      imagefilledpolygon ($png_image, $poly_points_right, 3, $green);  

      imagepng($png_image);
      imagedestroy($png_image);
  }
/*$values = array( 
            150,  50, // Point 1 (x, y) 
            50, 250,  // Point 2 (x, y) 
            250,  250 // Point 3 (x, y) 
        ); */
}

$obj = new Geometry();
$obj->createPolygon();

  ?>