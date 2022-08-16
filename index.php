<!DOCTYPE html>
<html lang="fr">
<?php
require 'students.php';
require 'teachers.php';
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Trombinoscope 2022</title>
</head>

<body>

    <!-- NAVBAR -->

    <nav>
        <img class="logo" alt="logo" src="media/icons/wild-w-red.png"/>
        <div class="titre">
            <h1>Wildbook</h1>
            <h2>Reims 2022</h2>
        </div>
        <ul>
            <li><a href="#trombi">Trombinoscope</a></li>
            <li><a href="#classe">Promotion Krilin</a></li>
        </ul>
    </nav>

    <!-- STUDENTS TROMBINOSCOPE GENERATE ON PHP -->

    <div id="trombi" class="trombi">
        <?php include 'trombiStudent.php'; ?>
    </div>

    <!-- BUTTON FOR RANDOM PRESENTATION -->

    <div class="buttonfather">
        <button type="button" class="randomlink button">
            J'ai de la chance
        </button>
    </div>

    <!-- ALL PRESENTATION GENERATE ON PHP -->

    <div id="presentation" class="presentation">
        <?php include 'desc.php'; ?>

    </div>

    <!-- SCHOOL PICTURE WITH GLOBAL PRESENTATION -->

    <div class="classe" id="classe">
        <div class="groupeclasse">
            <div class="groupe">
                <img src="./media/classe.png" alt="photo-groupe-classe">
            </div>
            <div class="groupe">
                <p>Voici la promotion Krilin, c'est la 11 ème promotion de la WildCodeSchool de Reims. Cette promotion est composée 
                    de huits personnes très motivées et curieuses de découvrir le développement web. 
                    Cette formation développeur web et mobile dure 5 mois, la base de l'apprentisage est sur le 
                    développement de site internet interactifs qui utilisent les technologies HTML, CSS et Javascript .
                    Pour cette 11 ème édition la promotion est sur JavasScript React, c'est un programme intensif, il se 
                    repose sur la pratique des nouveaux concepts qui se découvre sur la plateforme Odyssey. Ils doivent réaliser des projets 
                    qui sont réunis sur un portfolio qui a pour but de présenter leurs projets à des recruteurs afin de décrocher un 
                    premier emploi dans la tech. La promotion à un accompagnement vers l'emploi avec l'organisation d'ateliers CV ainsi 
                    que le développement des softs skills, ils bénificient également de l'accompagnement personnalisé de l'équipe Career 
                    Support et peuvent profiter du réseau de la Wild qui a plus de 1000 entreprises partenaires qui peuvent trouver des 
                    opportunités professionnelles dans les métiers de la tech.</p>
            </div>
        </div>

    <!-- TEACHERS TROMBINOSCOPE GENERATE ON PHP-->

        <h2 class="training">Nos formateurs</h2>
        <div class="globalteacher">
            <?php include 'trombiTeacher.php'; ?>
        </div>
    </div>

    <!-- BUTTON ON THE RIGHT FOR GO BACK TO THE TOP -->

    <a class="top-link" href="#trombi">
        <span>&#8593;</span>
    </a>

    <!-- FOOTER -->

    <footer>© 2022 - Valentin, Louis, Jeffrey et Alexandra - Wild Code School.</footer>

    <script type="module" src="script.js"></script>

</body>

</html>
