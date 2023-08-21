<?php
$nilai = 95;
  if ($nilai > 90){
    $grade = "sangat baik";
  }elseif ($nilai > 80) {
    $grade = "baik";
  }elseif ($nilai > 70) {
    $grade = "cukup";
  }elseif ($nilai > 60) {
    $grade = "kurang";
  }elseif ($nilai > 40) {
    $grade = "sangat kurang";
  }

  echo  "nilai anak rpl  $nilai <br> " ; 
  echo  "grade ". $grade ;


?>