<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function desenhaLinha($Ordem, $Pais, $Ouro, $Prata, $Bronze, $qtdMedalha, $imagem="") {
    
    echo "<tr>";
    echo "<td>" . $Ordem . "</td>";
    echo "<td><img src='" . $imagem . "'>" . $Pais . "</td>";
    echo "<td>" . $Ouro . "</td>";
    echo "<td>" . $Prata . "</td>";
    echo "<td>" . $Bronze . "</td>";
    echo "<td>" . $qtdMedalha . "</td>";
    echo "</tr>";
}

echo "<h1>Quantidade de Medalhas</h1>";

echo "<table border='1'>";

    echo "<tr>";
    echo "<th>Ordem</th>";
    echo "<th>País</th>";
    echo "<th><img src= 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Gold_medal.svg/20px-Gold_medal.svg.png'</th>";
    echo "<th><img src='https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Silver_medal.svg/20px-Silver_medal.svg.png'></th>";
    echo "<th><img src='https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/Bronze_medal.svg/20px-Bronze_medal.svg.png'> </th>";
    echo "<th><img src='https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/GoldSilverBronze_medals.svg/40px-GoldSilverBronze_medals.svg.png'></th>";

    echo "</tr>";

desenhaLinha (1, "Estados Unidos" , 46, 37 , 38, 121, "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/22px-Flag_of_the_United_States.svg.png");
desenhaLinha (2, "Grã-Bretanha" , 27, 23 , 17, 67, "https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Flag_of_the_United_Kingdom_%283-5%29.svg/22px-Flag_of_the_United_Kingdom_%283-5%29.svg.png");
desenhaLinha (3, "China" , 26, 18 , 26, 70, "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/22px-Flag_of_the_People%27s_Republic_of_China.svg.png");
desenhaLinha (4, "Russia" , 19, 17 , 20, 56, "https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/22px-Flag_of_Russia.svg.png");       
desenhaLinha (5, "Alemanha" , 17, 10 , 15, 42, "https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/22px-Flag_of_Germany.svg.png");
