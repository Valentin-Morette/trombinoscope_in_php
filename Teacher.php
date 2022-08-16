<?php

require_once 'Person.php';

class Teacher extends Person
{
  private string $job;

  public function __construct(
    string $firstname,
    string $name,
    string $pictureRed,
    string $job
  ) {
    $this->firstname = $firstname;
    $this->name = $name;
    $this->pictureRed = $pictureRed;
    $this->job = $job;
  }

  public function getJob(): string
  {
    return $this->job;
  }
}
