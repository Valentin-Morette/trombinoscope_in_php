<?php

abstract class Person
{
  protected string $firstname;
  protected string $name;
  protected string $pictureRed;

  public function __construct(
    string $firstname,
    string $name,
    string $pictureRed
  ) {
    $this->firstname = $firstname;
    $this->name = $name;
    $this->pictureRed = $pictureRed;
  }

  public function getFirstname(): string
  {
    return $this->firstname;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getPictureRed(): string
  {
    return $this->pictureRed;
  }
}
