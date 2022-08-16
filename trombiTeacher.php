<?php

for ($i = 0; $i < count($arrTeacher); $i++) {
  echo '<div>';
  echo '<div><img src="' .
    $arrTeacher[$i]->getPictureRed() .
    '" class="teacher" alt="photo-formateur"></div>';
  echo '<p class="nameteacher>' .
    $arrTeacher[$i]->getFirstname() .
    ' ' .
    $arrTeacher[$i]->getName() .
    '</p>';
  echo '<p class="job">' . $arrTeacher[$i]->getJob() . '</p>';
  echo '</div>';
}
