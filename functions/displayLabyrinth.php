<?php

// echo "<pre>",var_dump($_SESSION["pattern"]),"</pre>";
// echo var_dump($_SESSION["win"]);

function displayLabyrinth($pattern, $images)
{
    $i = 0;
    $j = 0;

    foreach ($pattern as $row) {
        echo "<div class='row'>";
        $j = 0;

        foreach ($row as $cell) {
            echo "<div class='cell'>";

            switch (strtolower($pattern[$i][$j])) {
                case 'd':
                    echo $images["dog"];
                    break;

                case 'w':
                    if ($i > 0 && $pattern[$i - 1][$j] === "d") {
                        echo $images["wall"];
                    } elseif ($i < count($pattern) - 1 && $pattern[$i + 1][$j] === "d") {
                        echo $images["wall"];
                    } elseif ($j < (count($pattern[$i])) && $pattern[$i][$j + 1] === "d") {
                        echo $images["wall"];
                    } elseif ($j > 0 && $pattern[$i][$j - 1] === "d") {
                        echo $images["wall"];
                    } else {
                        echo $images["fog"];
                    }
                    break;

                case 'b':
                    if ($i > 0 && $pattern[$i - 1][$j] === "d") {
                        echo $images["bone"];
                    } elseif ($i < count($pattern) - 1 && $pattern[$i + 1][$j] === "d") {
                        echo $images["bone"];
                    } elseif ($j < (count($pattern[$i])) - 1 && $pattern[$i][$j + 1] === "d") {
                        echo $images["bone"];
                    } elseif ($j > 0 && $pattern[$i][$j - 1] === "d") {
                        echo $images["bone"];
                    } else {
                        echo $images["fog"];
                    }
                    break;

                case '':
                    if ($i > 0 && $pattern[$i - 1][$j] === "d") {
                        echo null;
                    } elseif ($i < count($pattern) - 1 && $pattern[$i + 1][$j] === "d") {
                        echo null;
                    } elseif ($j < (count($pattern[$i])) - 1 && $pattern[$i][$j + 1] === "d") {
                        echo null;
                    } elseif ($j > 0 && $pattern[$i][$j - 1] === "d") {
                        echo null;
                    } else {
                        echo $images["fog"];
                    }
                    break;
            }
            echo "</div>";
            $j = $j + 1;
        }
        $i = $i + 1;
        echo "</div>";
    }
}
