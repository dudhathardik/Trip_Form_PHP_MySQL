<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Project 2</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 80%;
        background-color: rgb(136, 136, 136);
        margin: auto;
        padding: 20px;
    }
</style>

<body>
    <div class="container">
        <h1>This is my Second page</h1>
        <?php
        echo "<br>";
        $age = 15;
        if ($age > 18) {
            echo "You can go to the party";
        } else {
            echo "You can not go to the Party";
        }

        // Arry in PHP
        $language = array("Python", "PHP", "C++");
        echo "<br>";
        echo "Total number of language known: ";
        echo count($language);
        $a = 0;
        echo "<br>";
        while ($a < count($language)) {
            echo "<br>Known languages: ";
            echo $language[$a];
            $a++;
        }
        echo "<br>";
        echo "<br>";

        $a = 0;
        echo "While Loop Testing";


        while ($a <= 10) {
            echo "<br>Print number: ";
            echo $a;
            $a++;
        }


        ?>
    </div>
</body>

</html>