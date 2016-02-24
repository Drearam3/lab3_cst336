
<html>
    <head>
        <title> </title>
        <?php
        ?>
    </head>
    <body>
        <?php
        player
        cards
        result
        random number of cards
        random cards
        
        $cardC1 = ["score" => "1", 
                "suit" => $clubSuit,
                "rank" => "A"];
        $cardC2 = ["score" => "2", 
                "suit" => $clubSuit,
                "rank" => "2"];
        $cardC3 = ["score" => "3", 
                "suit" => $clubSuit,
                "rank" => "3"];
        $cardC4 = ["score" => "4", 
                "suit" => $clubSuit,
                "rank" => "4"];
        $cardC5 = ["score" => "5", 
                "suit" => $clubSuit,
                "rank" => "5"];
        $cardC6 = ["score" => "6", 
                "suit" => $clubSuit,
                "rank" => "6"];
        $cardC7 = ["score" => "7", 
                "suit" => $clubSuit,
                "rank" => "A"];
        $cardC8 = ["score" => "8", 
                "suit" => $clubSuit,
                "rank" => "2"];
        $cardC9 = ["score" => "9", 
                "suit" => $clubSuit,
                "rank" => "3"];
        $cardC10 = ["score" => "10", 
                "suit" => $clubSuit,
                "rank" => "4"];
        $cardC11 = ["score" => "11", 
                "suit" => $clubSuit,
                "rank" => "5"];
        $cardC12 = ["score" => "12", 
                "suit" => $clubSuit,
                "rank" => "6"];
                
                
        
        $clubSuit = ["directory" => "img/cards/Clubs",
                    "name" => "Clubs"];
        $diamondsSuit = ["directory" => "img/cards/Diamonds",
                    "name" => "Diamonds"];
        $heartsSuit = ["directory" => "img/cards/Hearts",
                    "name" => "Hearts"];
        $spadesSuit = ["directory" => "img/cards/Spades",
                    "name" => "Spades"];
                    
         
        //indexed array of the card objects      
        $deck = [];

        $player1 = ["imageName" => "",
                    "name" => $_POST["p1"]];
        $player2 = ["imageName" => "",
                    "name" => $_POST["p2"]];
        $player3 = ["imageName" => "",
                    "name" => $_POST["p3"]];
        $player4 = ["imageName" => "",
                    "name" => $_POST["p4"]];

        $table = [$player1, $player2, $player3, $player4];

                ["position1" => $player1,
                "posiiton2" => $player2,
                "position3" => $player3,
                "position4" => $player4];
        
        $hand = ["player" => null,
                "cards" => [], 
                "scores" => ""];

        $game= ["location" => $table,
                "hands" => $hands, ]

        ?>
    </body>
</html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <?php
        var_dump($table)
        ?>
        
        <form action="indexL3.php" method="POST">
            <input type ="hidden" name="p1" value="<?: $_POST[\"p1\"] ?>"/>
            <input type ="hidden" name="p2" value="<?: $_POST[\"p2\"] ?>"/>
            <input type ="hidden" name="p3" value="<?: $_POST[\"p3\"] ?>"/>
            <input type ="hidden" name="p4" value="<?: $_POST[\"p4\"] ?>"/>
            <input type ="submit" value="Play Again!"/>
        </form>
    </body>
</html>