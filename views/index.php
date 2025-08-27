<?php

require_once("../functions/variable.php");
require_once("../functions/move.php");
require_once("../functions/displayLabyrinth.php");
// echo "<pre>",var_dump(generateMaze()),"</pre>";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labyrinthe</title>
    <link rel="stylesheet" href="../assets/css/index.css">
</head>

<body>

    <main>
        <section>
            <h1>Le labyrinthe du chien</h1>
            <div id="gameContainer">
                <div id="labyrinthContainer">
                    <?= $_SESSION["win"] ? "<p>Bravo !</p>" : displayLabyrinth($_SESSION["pattern"], $images) ?>
                </div>
                <div id="controlsContainer">
                    <form method="POST">
                        <button id="btnUp" name="move" value="up">
                            <img src="../assets/imgs/fleche_haut.png" alt="submit" />
                        </button>
                        <div id="midContainer">
                            <button id="btnLeft" name="move" value="left">
                                <img src="../assets/imgs/fleche_gauche.png" alt="submit" />
                            </button>
                            <button id="btnRight" name="move" value="right">
                                <img src="../assets/imgs/fleche_droite.png" alt="submit" />
                            </button>
                        </div>
                        <button id="btnDown" name="move" value="down">
                            <img src="../assets/imgs/fleche_bas.png" alt="submit" />
                        </button>
                        <button id="reset" type="submit" name="reset" value="reset">Reset</button>
                    </form>
                </div>
            </div>
            <p id="error"><?= $checkError["error"] != [] ? $checkError["error"] : null ?></p>
        </section>
    </main>

</body>

</html>