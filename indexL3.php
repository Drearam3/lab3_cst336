
<html>
    <head>
        <title> </title>
        <?php
        ?>
    </head>
    <body>
        <?php
        $h=100;
        $w=80;
        //individual cards
        $cardC1 = ["score" => 1, 
                "suit" => "Clubs",
                "rank" => "A"
                ,"pic" => "<img src='img/cards/Clubs/1.png' height='$h' width='$w'>"];
                
        echo $cardC1["pic"];
        $cardC2 = ["score" => 2, 
                "suit" => "Clubs",
                "rank" => "2"];
        $cardC3 = ["score" => 3, 
                "suit" => "Clubs",
                "rank" => "3"];
        $cardC4 = ["score" => 4, 
                "suit" => "Clubs",
                "rank" => "4"];
        $cardC5 = ["score" => 5, 
                "suit" => "Clubs",
                "rank" => "5"];
        $cardC6 = ["score" => 6, 
                "suit" => "Clubs",
                "rank" => "6"];
        $cardC7 = ["score" => 7, 
                "suit" => "Clubs",
                "rank" => "7"];
        $cardC8 = ["score" => 8, 
                "suit" => "Clubs",
                "rank" => "8"];
        $cardC9 = ["score" => 9, 
                "suit" => "Clubs",
                "rank" => "9"];
        $cardC10 = ["score" => 10, 
                "suit" => "Clubs",
                "rank" => "10"];
        $cardC11 = ["score" => 11, 
                "suit" => "Clubs",
                "rank" => "J"];
        $cardC12 = ["score" => 12, 
                "suit" => "Clubs",
                "rank" => "Q"];
        $cardC13 = ["score" => 13, 
                "suit" => "Clubs",
                "rank" => "K"];
                
        $cardD1 = ["score" => 1, 
                "suit" => "Diamonds",
                "rank" => "A"];
        $cardD2 = ["score" => 2, 
                "suit" => "Diamonds",
                "rank" => "2"];
        $cardD3 = ["score" => 3, 
                "suit" => "Diamonds",
                "rank" => "3"];
        $cardD4 = ["score" => 4, 
                "suit" => "Diamonds",
                "rank" => "4"];
        $cardD5 = ["score" => 5, 
                "suit" => "Diamonds",
                "rank" => "5"];
        $cardD6 = ["score" => 6, 
                "suit" => "Diamonds",
                "rank" => "6"];
        $cardD7 = ["score" => 7, 
                "suit" => "Diamonds",
                "rank" => "7"];
        $cardD8 = ["score" => 8, 
                "suit" => "Diamonds",
                "rank" => "8"];
        $cardD9 = ["score" => 9, 
                "suit" => "Diamonds",
                "rank" => "9"];
        $cardD10 = ["score" => 10, 
                "suit" => "Diamonds",
                "rank" => "10"];
        $cardD11 = ["score" => 11, 
                "suit" => "Diamonds",
                "rank" => "J"];
        $cardD12 = ["score" => 12, 
                "suit" => "Diamonds",
                "rank" => "Q"];
        $cardD13 = ["score" => 13, 
                "suit" => "Diamonds",
                "rank" => "K"];
                
        $cardH1 = ["score" => 1, 
                "suit" => "Hearts",
                "rank" => "A"];
        $cardH2 = ["score" => 2, 
                "suit" => "Hearts",
                "rank" => "2"];
        $cardH3 = ["score" => 3, 
                "suit" => "Hearts",
                "rank" => "3"];
        $cardH4 = ["score" => 4, 
                "suit" => "Hearts",
                "rank" => "4"];
        $cardH5 = ["score" => 5, 
                "suit" => "Hearts",
                "rank" => "5"];
        $cardH6 = ["score" => 6, 
                "suit" => "Hearts",
                "rank" => "6"];
        $cardH7 = ["score" => 7, 
                "suit" => "Hearts",
                "rank" => "7"];
        $cardH8 = ["score" => 8, 
                "suit" => "Hearts",
                "rank" => "8"];
        $cardH9 = ["score" => 9, 
                "suit" => "Hearts",
                "rank" => "9"];
        $cardH10 = ["score" => 10, 
                "suit" => "Hearts",
                "rank" => "10"];
        $cardH11 = ["score" => 11, 
                "suit" => "Hearts",
                "rank" => "J"];
        $cardH12 = ["score" => 12, 
                "suit" => "Hearts",
                "rank" => "Q"];
        $cardH13 = ["score" => 13, 
                "suit" => "Hearts",
                "rank" => "K"];
                
        $cardS1 = ["score" => 1, 
                "suit" => "Spades",
                "rank" => "A"];
        $cardS2 = ["score" => 2, 
                "suit" => "Spades",
                "rank" => "2"];
        $cardS3 = ["score" => 3, 
                "suit" => "Spades",
                "rank" => "3"];
        $cardS4 = ["score" => 4, 
                "suit" => "Spades",
                "rank" => "4"];
        $cardS5 = ["score" => 5, 
                "suit" => "Spades",
                "rank" => "5"];
        $cardS6 = ["score" => 6, 
                "suit" => "Spades",
                "rank" => "6"];
        $cardS7 = ["score" => 7, 
                "suit" => "Spades",
                "rank" => "7"];
        $cardS8 = ["score" => 8, 
                "suit" => "Spades",
                "rank" => "8"];
        $cardS9 = ["score" => 9, 
                "suit" => "Spades",
                "rank" => "9"];
        $cardS10 = ["score" => 10, 
                "suit" => "Spades",
                "rank" => "10"];
        $cardS11 = ["score" => 11, 
                "suit" => "Spades",
                "rank" => "J"];
        $cardS12 = ["score" => 12, 
                "suit" => "Spades",
                "rank" => "Q"];
        $cardS13 = ["score" => 13, 
                "suit" => "Spades",
                "rank" => "K"];
        
                
                
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


        // $game= ["location" => $table,
        //         "hands" => $hands];
        
        $chosenCards = [""];
        $chosenCardsIncrement = 0;
        $score1=0;
        for ($j = 0; $j < count($table); $j++)
        {
                //cards for each players' hand
                $playersHand = [""];
                $num = rand(4,6);
                for($i = 0; $i < $num; $i++)
                {
                        $cardInHand = $deck[array_rand($deck, 1)];
                        while(in_array($cardInHand, $chosenCards) == true)
                        {
                                $cardInHand = $deck[array_rand($deck, 1)];
                        }
                        $chosenCards[$chosenCardsIncrement] = $cardInHand;
                        $chosenCardsIncrement++;
                        $playersHand[$i] = $cardInHand;
                        $sum+=$cardInHand["score"];
                }
                $sumArray[$j]=$sum;
                $sum=0;
                $table[$j]["hand"]["cards"] = $playersHand;
                echo "<br/><br/>";
                var_dump($table[$j]["name"]);
                var_dump($table[$j]["hand"]["cards"]);
        }
        var_dump($sumArray);
        $winScore=0;
        for($i = 0; $i < sizeof($sumArray); $i++){
            if($sumArray[$i] <= 42 && $sumArray[$i] > $winScore){
                $winScore = $sumArray[$i];
                $winner=$i+1;
            }
            if($winner==-1){
                echo "Everyone's scores are above 42, so noone win! ";
            }
        }
        echo "The winner is player $winner, with the score of $winScore !";
        echo "<br/><br/>";
        
                

        ?>
        
   </body>
</html>
<html>
    <head>
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
