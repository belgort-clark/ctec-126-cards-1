<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cards 1 (done in PHP) - March 2019</title>
    <style>
        img {
            height:50%;
            margin:25px;
            border: 2px solid #000;
            border-radius: 8px;
            box-shadow: 10px 10px 10px;
        }
    </style>
</head>
<body>    
    <h1>Display a deck of cards using PHP</h1>
    <?php  

        // playingCard
        class PlayingCard {
            public function __construct($suit, $face) {
                $this->suit = $suit;
                $this->face = $face;
                $this->image = $face . '_of_' . $suit . '.png';                
            }
        }

        function display($deck) {
            for ($index = 0; $index < count($deck); $index++) {
                echo '<img src="img/' . $deck[$index]->image . '">';
            }
        }

        function main() {
            $suits = ['clubs','diamonds','hearts','spades'];
            $faces = ['ace','2','3','4','5','6','7','8','9','10','jack','queen','king'];
            $deck = [];

            // build the deck of playingCard objects
            for ($suit = 0 ; $suit < count($suits) ; $suit++) {
                for ($face = 0 ; $face < count($faces) ; $face++) {
                    $card = new PlayingCard($suits[$suit],$faces[$face]);
                    array_push($deck, $card);
                }
            }

            // shuffle the deck 1,000 times
            for ($i=0; $i < 1000; $i++) { 
                shuffle($deck);
            }
    
            // show the deck
            display($deck);
        }

        // start it up!
        main();

    ?>
</body>
</html>