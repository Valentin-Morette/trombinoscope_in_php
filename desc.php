<?php

for ($i = 0; $i < count($arrStudent); $i++) {
  echo '<div id=' . $arrStudent[$i]->getFirstname() . '>';
  if ($i % 2 === 1) {
    echo '<img src=' . $arrStudent[$i]->getPictureRed() . " alt='photo-eleve'>";
  } else {
    echo '<img src=' .
      $arrStudent[$i]->getPictureWhite() .
      " alt='photo-eleve'>";
  }
  echo '<div class="biographie">';
  echo '<h2>' .
    $arrStudent[$i]->getName() .
    ' ' .
    $arrStudent[$i]->getFirstname() .
    '</h2>';
  echo '<h4>' .
    $arrStudent[$i]->getAge() .
    ' ans, ' .
    $arrStudent[$i]->getCity() .
    '</h4>';
  echo '<h5>' . $arrStudent[$i]->getMobility() . '</h5>';
  echo '<h5>' . $arrStudent[$i]->getSkills() . '</h5>';
  echo "<div class='icons'>";
  if ($i % 2 === 1) {
    echo "<a href='" .
      $arrStudent[$i]->getGithub() .
      "' target='_blank'><img src='./media/icons/github-red.png' alt='icon-github-red' class='icon'></a>";
    echo "<a href='" .
      $arrStudent[$i]->getLinkedin() .
      "' target='_blank'><img src='./media/icons/linkedin-red.png' alt='icon-linkedin-red' class='icon'></a><img src='./media/icons/website-red.png' alt='icon-link-red' class='icon'>";
  } else {
    echo "<a href='" .
      $arrStudent[$i]->getGithub() .
      "' target='_blank'><img src='./media/icons/github-white.png' alt='icon-github-white' class='icon'></a>";
    echo "<a href='" .
      $arrStudent[$i]->getLinkedin() .
      "' target='_blank'><img src='./media/icons/linkedin-white.png' alt='icon-linkedin-white' class='icon'></a><img src='./media/icons/website-white.png' alt='icon-link-white' class='icon'>";
  }

  echo '</div>';
  echo '</div>';
  echo '<p>' . $arrStudent[$i]->getDesc() . '</p>';
  echo '</div>';
}
