<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #CCC;
            height: 100vh;
        }

        h1 {
            color: blue;
            font-family: sans-serif;
            font-weight: bold;
        }
    </style>


</head>

<body>
    <h1>TESTE DE PHP</h1>

    <?php

    $cruz = array("___*___", "_*****_", "___*___", "___*___", "___*___");
    $X = array("*___*", "_*_*_", "__*__", "_*_*_", "*___*");




    //  O MODELO DE BAIXO CONTÉM A "CRUZ" e o "X" DESENHADA POR PONTOS.

    // $cruz = array("...*...", ".*****.", "...*...", "...*...", "...*...");
    // $X = array("*...*", ".*.*.", "..*..", ".*.*.", "*...*");
    

    foreach ($cruz as $PARTE_DESENHO):
        echo  "<script>console.log('" . $PARTE_DESENHO. "' );</script>";
    endforeach;



    ?>

</body>

</html>