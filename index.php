<!DOCTYPE html>
<html>
<head>
    <title>Megahamster | Ihr Hamsterversorger</title>
</head>
<body>
    <section id="list-products">
        <?php

        include('classes/room.php');
        include('classes/rectangle.php');
        include('classes/octagon.php');

        $array_rooms = [new rectangle('The room','EUR 49,-','none','80', '50','50')
            ,new rectangle('The Flat','EUR 149,-','Food Jars','120','80','80')
            ,new octagon('The Pit','EUR 100,-','none','15')];

        foreach ($array_rooms as $room) {
            echo $room -> toHTML();
        }
        ?>
    </section
    </section>
    <footer id="contact">
        <p><small>Christoph Schrenk</small></p>
    </footer>
</body>
</html>