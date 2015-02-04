<?php
    require_once 'src/Animal.php';
    require_once 'src/Cat.php';
?>

<html>
<head>
    <title>Test</title>
</head>

<body>

    <?php

        $cat = new Cat('garfield');

        echo $cat->getName() === 'garfield' ? 'true' : 'false'; // true

        echo '<br>';

        echo $cat->meow() === 'Cat garfield is saying meow' ? 'true' : 'false'; // true
    ?>

</body>
</html>
