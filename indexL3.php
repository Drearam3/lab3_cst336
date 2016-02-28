
<html>
    <head>
        <title> </title>
        <?php
        ?>
    </head>
    <body>
        <?php
        echo '<link rel="stylesheet" type="text/css" href="css/yo.css">';
        $h=100;
        $w=80;
        //individual cards
        $cardC1 = ["score" => 1, 
                "suit" => "Clubs",
                "rank" => "A"
                ,"pic" => "<img src='img/cards/Clubs/1.png' height='$h' width='$w'>"];
        $cardC2 = ["score" => 2, 
                "suit" => "Clubs",
                "rank" => "2" 
                ,"pic" => "<img src='img/cards/Clubs/2.png' height='$h' width='$w'>"];
        $cardC3 = ["score" => 3, 
                "suit" => "Clubs",
                "rank" => "3"
                ,"pic" => "<img src='img/cards/Clubs/3.png' height='$h' width='$w'>"];
        $cardC4 = ["score" => 4, 
                "suit" => "Clubs",
                "rank" => "4"
                ,"pic" => "<img src='img/cards/Clubs/4.png' height='$h' width='$w'>"];
        $cardC5 = ["score" => 5, 
                "suit" => "Clubs",
                "rank" => "5"
                ,"pic" => "<img src='img/cards/Clubs/5.png' height='$h' width='$w'>"];
        $cardC6 = ["score" => 6, 
                "suit" => "Clubs",
                "rank" => "6"
                ,"pic" => "<img src='img/cards/Clubs/6.png' height='$h' width='$w'>"];
        $cardC7 = ["score" => 7, 
                "suit" => "Clubs",
                "rank" => "7"
                ,"pic" => "<img src='img/cards/Clubs/7.png' height='$h' width='$w'>"];
        $cardC8 = ["score" => 8, 
                "suit" => "Clubs",
                "rank" => "8"
                ,"pic" => "<img src='img/cards/Clubs/8.png' height='$h' width='$w'>"];
        $cardC9 = ["score" => 9, 
                "suit" => "Clubs",
                "rank" => "9"
                ,"pic" => "<img src='img/cards/Clubs/9.png' height='$h' width='$w'>"];
        $cardC10 = ["score" => 10, 
                "suit" => "Clubs",
                "rank" => "10"
                ,"pic" => "<img src='img/cards/Clubs/10.png' height='$h' width='$w'>"];
        $cardC11 = ["score" => 11, 
                "suit" => "Clubs",
                "rank" => "J"
                ,"pic" => "<img src='img/cards/Clubs/11.png' height='$h' width='$w'>"];
        $cardC12 = ["score" => 12, 
                "suit" => "Clubs",
                "rank" => "Q"
                ,"pic" => "<img src='img/cards/Clubs/12.png' height='$h' width='$w'>"];
        $cardC13 = ["score" => 13, 
                "suit" => "Clubs",
                "rank" => "K"
                ,"pic" => "<img src='img/cards/Clubs/13.png' height='$h' width='$w'>"];
                
        $cardD1 = ["score" => 1, 
                "suit" => "Diamonds",
                "rank" => "A"
                ,"pic" => "<img src='img/cards/Diamonds/1.png' height='$h' width='$w'>"];
        $cardD2 = ["score" => 2, 
                "suit" => "Diamonds",
                "rank" => "2"
                ,"pic" => "<img src='img/cards/Diamonds/2.png' height='$h' width='$w'>"];
        $cardD3 = ["score" => 3, 
                "suit" => "Diamonds",
                "rank" => "3"
                ,"pic" => "<img src='img/cards/Diamonds/3.png' height='$h' width='$w'>"];
        $cardD4 = ["score" => 4, 
                "suit" => "Diamonds",
                "rank" => "4"
                ,"pic" => "<img src='img/cards/Diamonds/4.png' height='$h' width='$w'>"];
        $cardD5 = ["score" => 5, 
                "suit" => "Diamonds",
                "rank" => "5"
                ,"pic" => "<img src='img/cards/Diamonds/5.png' height='$h' width='$w'>"];
        $cardD6 = ["score" => 6, 
                "suit" => "Diamonds",
                "rank" => "6"
                ,"pic" => "<img src='img/cards/Diamonds/6.png' height='$h' width='$w'>"];
        $cardD7 = ["score" => 7, 
                "suit" => "Diamonds",
                "rank" => "7"
                ,"pic" => "<img src='img/cards/Diamonds/7.png' height='$h' width='$w'>"];
        $cardD8 = ["score" => 8, 
                "suit" => "Diamonds",
                "rank" => "8"
                ,"pic" => "<img src='img/cards/Diamonds/8.png' height='$h' width='$w'>"];
        $cardD9 = ["score" => 9, 
                "suit" => "Diamonds",
                "rank" => "9"
                ,"pic" => "<img src='img/cards/Diamonds/9.png' height='$h' width='$w'>"];
        $cardD10 = ["score" => 10, 
                "suit" => "Diamonds",
                "rank" => "10"
                ,"pic" => "<img src='img/cards/Diamonds/10.png' height='$h' width='$w'>"];
        $cardD11 = ["score" => 11, 
                "suit" => "Diamonds",
                "rank" => "J"
                ,"pic" => "<img src='img/cards/Diamonds/11.png' height='$h' width='$w'>"];
        $cardD12 = ["score" => 12, 
                "suit" => "Diamonds",
                "rank" => "Q"
                ,"pic" => "<img src='img/cards/Diamonds/12.png' height='$h' width='$w'>"];
        $cardD13 = ["score" => 13, 
                "suit" => "Diamonds",
                "rank" => "K"
                ,"pic" => "<img src='img/cards/Diamonds/13.png' height='$h' width='$w'>"];
                
        $cardH1 = ["score" => 1, 
                "suit" => "Hearts",
                "rank" => "A"
                ,"pic" => "<img src='img/cards/Hearts/1.png' height='$h' width='$w'>"];
        $cardH2 = ["score" => 2, 
                "suit" => "Hearts",
                "rank" => "2"
                ,"pic" => "<img src='img/cards/Hearts/2.png' height='$h' width='$w'>"];
        $cardH3 = ["score" => 3, 
                "suit" => "Hearts",
                "rank" => "3"
                ,"pic" => "<img src='img/cards/Hearts/3.png' height='$h' width='$w'>"];
        $cardH4 = ["score" => 4, 
                "suit" => "Hearts",
                "rank" => "4"
                ,"pic" => "<img src='img/cards/Hearts/4.png' height='$h' width='$w'>"];
        $cardH5 = ["score" => 5, 
                "suit" => "Hearts",
                "rank" => "5"
                ,"pic" => "<img src='img/cards/Hearts/5.png' height='$h' width='$w'>"];
        $cardH6 = ["score" => 6, 
                "suit" => "Hearts",
                "rank" => "6"
                ,"pic" => "<img src='img/cards/Hearts/6.png' height='$h' width='$w'>"];
        $cardH7 = ["score" => 7, 
                "suit" => "Hearts",
                "rank" => "7"
                ,"pic" => "<img src='img/cards/Hearts/7.png' height='$h' width='$w'>"];
        $cardH8 = ["score" => 8, 
                "suit" => "Hearts",
                "rank" => "8"
                ,"pic" => "<img src='img/cards/Hearts/8.png' height='$h' width='$w'>"];
        $cardH9 = ["score" => 9, 
                "suit" => "Hearts",
                "rank" => "9"
                ,"pic" => "<img src='img/cards/Hearts/9.png' height='$h' width='$w'>"];
        $cardH10 = ["score" => 10, 
                "suit" => "Hearts",
                "rank" => "10"
                ,"pic" => "<img src='img/cards/Hearts/10.png' height='$h' width='$w'>"];
        $cardH11 = ["score" => 11, 
                "suit" => "Hearts",
                "rank" => "J"
                ,"pic" => "<img src='img/cards/Hearts/11.png' height='$h' width='$w'>"];
        $cardH12 = ["score" => 12, 
                "suit" => "Hearts",
                "rank" => "Q"
                ,"pic" => "<img src='img/cards/Hearts/12.png' height='$h' width='$w'>"];
        $cardH13 = ["score" => 13, 
                "suit" => "Hearts",
                "rank" => "K"
                ,"pic" => "<img src='img/cards/Hearts/13.png' height='$h' width='$w'>"];
                
        $cardS1 = ["score" => 1, 
                "suit" => "Spades",
                "rank" => "A"
                ,"pic" => "<img src='img/cards/Spades/1.png' height='$h' width='$w'>"];
        $cardS2 = ["score" => 2, 
                "suit" => "Spades",
                "rank" => "2"
                ,"pic" => "<img src='img/cards/Spades/2.png' height='$h' width='$w'>"];
        $cardS3 = ["score" => 3, 
                "suit" => "Spades",
                "rank" => "3"
                ,"pic" => "<img src='img/cards/Spades/3.png' height='$h' width='$w'>"];
        $cardS4 = ["score" => 4, 
                "suit" => "Spades",
                "rank" => "4"
                ,"pic" => "<img src='img/cards/Spades/4.png' height='$h' width='$w'>"];
        $cardS5 = ["score" => 5, 
                "suit" => "Spades",
                "rank" => "5"
                ,"pic" => "<img src='img/cards/Spades/5.png' height='$h' width='$w'>"];
        $cardS6 = ["score" => 6, 
                "suit" => "Spades",
                "rank" => "6"
                ,"pic" => "<img src='img/cards/Spades/6.png' height='$h' width='$w'>"];
        $cardS7 = ["score" => 7, 
                "suit" => "Spades",
                "rank" => "7"
                ,"pic" => "<img src='img/cards/Spades/7.png' height='$h' width='$w'>"];
        $cardS8 = ["score" => 8, 
                "suit" => "Spades",
                "rank" => "8"
                ,"pic" => "<img src='img/cards/Spades/8.png' height='$h' width='$w'>"];
        $cardS9 = ["score" => 9, 
                "suit" => "Spades",
                "rank" => "9"
                ,"pic" => "<img src='img/cards/Spades/9.png' height='$h' width='$w'>"];
        $cardS10 = ["score" => 10, 
                "suit" => "Spades",
                "rank" => "10"
                ,"pic" => "<img src='img/cards/Spades/10.png' height='$h' width='$w'>"];
        $cardS11 = ["score" => 11, 
                "suit" => "Spades",
                "rank" => "J"
                ,"pic" => "<img src='img/cards/Spades/11.png' height='$h' width='$w'>"];
        $cardS12 = ["score" => 12, 
                "suit" => "Spades",
                "rank" => "Q"
                ,"pic" => "<img src='img/cards/Spades/12.png' height='$h' width='$w'>"];
        $cardS13 = ["score" => 13, 
                "suit" => "Spades",
                "rank" => "K"
                ,"pic" => "<img src='img/cards/Spades/13.png' height='$h' width='$w'>"];
        
                
                
        // $clubsSuit = ["directory" => "img/cards/Clubs",
        //             "name" => "Clubs"];
        // $diamondsSuit = ["directory" => "img/cards/Diamonds",
        //             "name" => "Diamonds"];
        // $heartsSuit = ["directory" => "img/cards/Hearts",
        //             "name" => "Hearts"];
        // $spadesSuit = ["directory" => "img/cards/Spades",
        //             "name" => "Spades"];
                    
         
        //indexed array of the card objects      
        $deck = [$cardC1, $cardC2, $cardC3, $cardC4, $cardC5, $cardC6, $cardC7, $cardC8, $cardC9, $cardC10, $cardC11, $cardC12, $cardC13,
                $cardD1, $cardD2, $cardD3, $cardD4, $cardD5, $cardD6, $cardD7, $cardD8, $cardD9, $cardD10, $cardD11, $cardD12, $cardD13,
                $cardH1, $cardH2, $cardH3, $cardH4, $cardH5, $cardH6, $cardH7, $cardH8, $cardH9, $cardH10, $cardH11, $cardH12, $cardH13,
                $cardS1, $cardS2, $cardS3, $cardS4, $cardS5, $cardS6, $cardS7, $cardS8, $cardS9, $cardS10, $cardS11, $cardS12, $cardS13];

        $player1 = array("imageName" => "",
                    "name" => $_REQUEST["p1"], 
                        "hand" => array( 
                        "cards" => [], 
                        "scores" => ""));
        $player2 = array("imageName" => "",
                    "name" => $_REQUEST["p2"], 
                        "hand" => array( 
                        "cards" => [], 
                        "scores" => ""));
        $player3 = array("imageName" => "",
                    "name" => $_REQUEST["p3"], 
                        "hand" => array( 
                        "cards" => [], 
                        "scores" => ""));
        $player4 = array("imageName" => "",
                    "name" => $_REQUEST["p4"], 
                        "hand" => array( 
                        "cards" => [], 
                        "scores" => ""));

        $table = [$player1, $player2, $player3, $player4];
        $name = array("Angie", "Steven", "Jack", "Andy");
        //image of payers
        $pImg=array("<img src='img/players/1.jpg' height='60' width='60'>", 
        "<img src='img/players/2.jpg' height='60' width='60'>",
        "<img src='img/players/3.jpg' height='60' width='60'>",
        "<img src='img/players/4.jpg' height='60' width='60'>");
        // $game= ["location" => $table,
        //         "hands" => $hands];
        
        $chosenCards = [""];
        $chosenCardsIncrement = 0;
        echo "<table align='center'>";
        for ($j = 0; $j < count($table); $j++)
        {
                //cards for each players' hand
                $playersHand = [""];
                $num = rand(4,6);
                echo "<tr>";
                //print put player picture and name
                echo "<td>";
                        echo $pImg[$j];
                        echo "<br>";
                        echo $name[$j];
                echo "</td>";
                for($i = 0; $i < $num; $i++)
                {
                        $cardInHand = $deck[array_rand($deck, 1)];
                        while(in_array($cardInHand, $chosenCards) == true)
                        {
                                $cardInHand = $deck[array_rand($deck, 1)];
                        }
                        echo "<td>";
                                echo $cardInHand["pic"];
                        echo "</td>";
                        $chosenCards[$chosenCardsIncrement] = $cardInHand;
                        $chosenCardsIncrement++;
                        $playersHand[$i] = $cardInHand;
                        $sum+=$cardInHand["score"];
                }
                //print out score at the end of each row
                echo "<br/><br/>";
                echo "<td>";
                        echo "<font size=\"20\"> $sum </font>";
                echo "</td>";
                echo "</tr>";
                $sumArray[$j]=$sum;
                $sum=0;
                $table[$j]["hand"]["cards"] = $playersHand;
                echo "<br/><br/>";
                //var_dump($table[$j]["name"]);
                //var_dump($table[$j]["hand"]["cards"]);
        }
        echo "</table>";
        //var_dump($sumArray);
        $winScore=0;
        for($i = 0; $i < sizeof($sumArray); $i++){
            if($sumArray[$i] <= 42 && $sumArray[$i] > $winScore){
                $winScore = $sumArray[$i];
                $winner=$i;
            }
            if($winner==-1){
                echo "Everyone's scores are above 42, so no one win! ";
            }
        }
        echo "<div align='center'>";
                echo "<font size=\"20\">$name[$winner] is winning, with the score of $winScore !</font>";
        echo "</div>";
        echo "<br/><br/>";
        ?>
        
   </body>
</html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/yo.css">
        <title> </title>
    </head>
    <body>
        
        <form action="indexL3.php" method="POST">
            <input type ="hidden" name="p1" value="<?php echo $_REQUEST['p1'] ?>"/>
            <input type ="hidden" name="p2" value="<?php echo $_REQUEST['p2'] ?>"/>
            <input type ="hidden" name="p3" value="<?php echo $_REQUEST['p3'] ?>"/>
            <input type ="hidden" name="p4" value="<?php echo $_REQUEST['p4'] ?>"/>
            <input type ="submit" value="Play Again!"/>
        </form>
    </body>

</html>
