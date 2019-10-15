<!DOCTYPE html>
<html>
<head>
    <title>Megahamster | Ihr Hamsterversorger</title>
</head>
<body>
    <section id="list-products">
        <h1 style="color:green">MEGAHAMSTER</h1>
        <h2 style="color:blue">Aktuell bieten wir folgende Produkte an:</h2>
        <?php

        include('Classes/room.php');
        include('Classes/rectangle.php');
        include('Classes/octagon.php');
        use ChaosFr3ak\Megahamster as Classes;

        $array_rooms = [new Classes\rectangle('The room','EUR 49,-','none','80', '50','50'),
            new Classes\rectangle('The Flat','EUR 149,-','Food Jars','120','80','80'),
            new Classes\octagon('The Pit','EUR 100,-','none','15')];

        foreach ($array_rooms as $room) {
            echo $room -> toHTML();
        }
        ?>
    </section>
    <footer id="contact">
        <p><small>Christoph Schrenk | HTL3r</small></p>
    </footer>
</body>
</html>