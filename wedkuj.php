<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styl_1.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>



<body>

    <?php

    $mysqli = mysqli_connect('localhost', 'root', '', 'wedkowanie2');



    mysqli_close($mysqli);

    ?>

    <header class="head">
        <h1 id="naglowek">Portal dla wędkarzy</h1>
    </header>


    <div class="left">
        <div class="L1">
            <p>Ryby zamieszujące rzeki</p>
        
        </div>

        <div class="L2">
            <p>Ryby drapierzne naszych wód</p>
        
        </div>
    </div>
    

    <div class="P1">
        <div class="zdj">
            <img src="ryba1.jpg">
        </div>
        <div id="kw"><a href="kwerendy.txt" >Pobierz kwerendy</a></div>
    </div>



    <footer class="footer">
        <p class="ftr">Stronę wykonał: Kacper Krużycki</p>
    </footer>


</body>



</html>


