<?php

if (isset($_POST["move"])) {

    for ($i = 0; $i < (count($_SESSION["pattern"])); $i++) {
        $faisabiltyCheck = false;

        for ($j = 0; $j < (count($_SESSION["pattern"][$i])); $j++) {
            $found = false;

            if ($_SESSION["pattern"][$i][$j] === "d") {
                $found = true;

                switch (htmlspecialchars($_POST["move"])) {
                    case "up":
                        if ($i > 0 && $_SESSION["pattern"][$i - 1][$j] != "w") {

                            if ($_SESSION["pattern"][$i - 1][$j] == "b") {
                                $_SESSION["win"] = true;
                            }

                            $_SESSION["pattern"][$i - 1][$j] = "d";
                            $faisabiltyCheck = true;
                        }
                        break;

                    case "down":
                        if ($i < (count($_SESSION["pattern"]) - 1) && $_SESSION["pattern"][$i + 1][$j] != "w") {

                            if ($_SESSION["pattern"][$i + 1][$j] == "b") {
                                $_SESSION["win"] = true;
                            }

                            $_SESSION["pattern"][$i + 1][$j] = "d";
                            $faisabiltyCheck = true;
                        }
                        break;

                    case "right":
                        if ($j < (count($_SESSION["pattern"][$i]) - 1) && $_SESSION["pattern"][$i][$j + 1] != "w") {

                            if ($_SESSION["pattern"][$i][$j + 1] == "b") {
                                $_SESSION["win"] = true;
                            }

                            $_SESSION["pattern"][$i][$j + 1] = "d";
                            $faisabiltyCheck = true;
                        }
                        break;

                    case "left":
                        if ($j > 0 && $_SESSION["pattern"][$i][$j - 1] != "w") {

                            if ($_SESSION["pattern"][$i][$j - 1] == "b") {
                                $_SESSION["win"] = true;
                            }

                            $_SESSION["pattern"][$i][$j - 1] = "d";
                            $faisabiltyCheck = true;
                        }
                        break;
                }
                if ($faisabiltyCheck) {
                    $_SESSION["pattern"][$i][$j] = "";
                    $faisabiltyCheck = false;
                } else {
                    $checkError["error"] = "Tu ne peux pas aller par là !";
                }
                break;
            }
        }
        if ($found) break;
    }
}
