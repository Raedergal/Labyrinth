<?php

require_once("../functions/generateMaze.php");

session_start();

if (!isset($_SESSION["pattern"]) || isset($_POST["reset"]) || !isset($_SESSION["win"]) || $_SESSION["win"]) {
    $_SESSION["pattern"] = randomMaze($mazes);
    $_SESSION["win"] = false;
    $checkError["error"] = [];
}

$images = [
    "dog" => "<img src='../assets/imgs/chien.png' alt='chien'>",
    "wall" => "<img src='../assets/imgs/haie.png' alt='haie'>",
    "bone" => "<img src='../assets/imgs/os.png' alt='os'>",
    "fog" => "<img src='../assets/imgs/brouillard.png' alt='fog'>"
];

$checkError["error"] = [];