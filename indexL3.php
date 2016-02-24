
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <?php
        //player
        //cards
        //result
        //random number of cards
        //random cards
        
        $cardC1 = ["score" => "1", 
                "suit" => "Clubs",
                "rank" => "A"];
        
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

        $player = ["imageName" => "",
                    "name" => ""];
        $player = ["imageName" => "",
                    "name" => ""];
        $player = ["imageName" => "",
                    "name" => ""];
        $player = ["imageName" => "",
                    "name" => ""];

        $table = ["position1" => $player1,
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