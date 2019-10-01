<!DOCTYPE html>
<html>
<head>
    <title>Megahamster | Ihr Hamsterversorger</title>
</head>
<body>
    <section id="list-products">
        <?php
        include ("classes/room.php");
        include ("classes/rectangle.php");
        include ("classes/octagon.php");

        $theRoom = new rectangle('The Room', '49 €', 'none', '80', '50', '50');
        $theFlat = new rectangle('The Flat', '149 €', 'Food', '120', '80', '80');
        $thePit = new octagon ('The Pit', '69 €', 'none', '50');
        
        echo $theRoom->toHTML();
        echo $theFlat->toHTML();
        echo $thePit->toHTML();
        ?>
    </section>
    <footer id="contact">
        <p><small>Christoph Schrenk</small></p>
    </footer>
</body>
</html>