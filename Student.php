<?php

class Student
{
  private string $firstname;
  private string $name;
  private string $age;
  private string $city;
  private string $mobility;
  private string $pictureRed;
  private string $pictureWhite;
  private string $desc;
  private string $skills;
  private string $linkedin;
  private string $github;

  public function __construct(
    string $firstname,
    string $name,
    string $age,
    string $city,
    string $mobility,
    string $pictureWhite,
    string $pictureRed,
    string $skills,
    string $desc,
    string $linkedin,
    string $github
  ) {
    $this->firstname = $firstname;
    $this->name = $name;
    $this->age = $age;
    $this->city = $city;
    $this->mobility = $mobility;
    $this->pictureRed = $pictureRed;
    $this->pictureWhite = $pictureWhite;
    $this->desc = $desc;
    $this->skills = $skills;
    $this->linkedin = $linkedin;
    $this->github = $github;
  }

  public function getFirstname(): string
  {
    return $this->firstname;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getAge(): string
  {
    return $this->age;
  }

  public function getCity(): string
  {
    return $this->city;
  }

  public function getMobility(): string
  {
    return $this->mobility;
  }

  public function getPictureRed(): string
  {
    return $this->pictureRed;
  }

  public function getPictureWhite(): string
  {
    return $this->pictureWhite;
  }

  public function getDesc(): string
  {
    return $this->desc;
  }

  public function getSkills(): string
  {
    return $this->skills;
  }

  public function getLinkedin(): string
  {
    return $this->linkedin;
  }

  public function getGithub(): string
  {
    return $this->github;
  }
}
