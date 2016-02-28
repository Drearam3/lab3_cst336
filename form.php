<html>
    <head>
        <title> </title>
        <link rel="stylesheet" type="text/css" href="css/yo.css">
    </head>
    <body class='back' background="img/lightblue.jpg">
        <div align='center'>
            <h1>Enter in Player Names!</h1>
            <form  action="indexL3.php" method="POST">
                <div>
                    <label>Player 1: </label><input type="text" name = "p1" />
                </div>
                <br/>
                <div>
                    <label>Player 2: </label><input type="text" name = "p2" />
                </div>
                <br/>
                <div>
                    <label>Player 3: </label><input type="text" name = "p3" />
                </div>
                <br/>
                <div>
                    <label>Player 4: </label><input type="text" name = "p4" />
                </div>
                <br/>
                
                <input class="formButtons" type="submit" value="Submit"/>
                <input class="formButtons" type="reset" value="Reset"/>
                
            </form>
        </div>
        <?php

        ?>
    </body>
</html>


