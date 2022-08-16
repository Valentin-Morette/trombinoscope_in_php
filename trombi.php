<?php

for ($i = 0; $i < count($arrStudent); $i++) {
  echo '<div>';
  echo "<a class='box-img' href='#" . $arrStudent[$i]->getFirstname() . "'>";
  echo "<img src='" .
    $arrStudent[$i]->getPictureRed() .
    "' class='student' alt='photo-" .
    $arrStudent[$i]->getName() .
    "'>";
  echo '</a>';
  echo "<div class='iconstrombi'>";
  echo "<a href='" . $arrStudent[$i]->getLinkedin() . "' target='_blank'>";
  echo "<img src='./media/icons/linkedin-red.png' class='icon' alt='icon linkedin'>";
  echo '</a>';
  echo "<a href='" . $arrStudent[$i]->getGithub() . "' target='_blank'>";
  echo "<img src='./media/icons/github-red.png' class='icon' alt='icon github'>";
  echo '</a>';
  echo '</div>';
  echo "<p class='namestudent'>" .
    $arrStudent[$i]->getFirstname() .
    '</p></div>';
}
