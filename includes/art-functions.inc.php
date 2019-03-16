<?php


function generateReviewStars($rating) {
  $output = "";
  for ($i=0; $i<$rating; $i++) {
    $output .= '<i class="star icon"></i>';
  }
  return $output;
}


function generateRatingStars($rating) {
  $output = "";
  for ($i=0; $i<$rating; $i++) {
    $output .= '<i class="orange star icon"></i>';
  }
  for ($i=$rating; $i<5; $i++) {
    $output .= '<i class="empty star icon"></i>';
  }
  
  return $output;
}


function generateLink($url,$label) {
    return "<a href='$url'>$label</a>";
}


?>