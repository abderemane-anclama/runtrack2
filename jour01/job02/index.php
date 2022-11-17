<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <body>
    <?php
        $v = true;
        $f = false;
        $int = 7;
        $d = 8.1;
        $car = "mot";
        $type = "sans mot";


        echo "la variable \$v contient une valeur de type ";
        print gettype ($v);

        echo " <br> la variable \$f contient une valeur de type ";
        print gettype($f);

        echo " <br> la variable \$int contient une valeur de type ";
        print gettype($int);

        echo " <br> la variable \$d contient une valeur de type ";
        print gettype($d);

        echo " <br> la variable \$car contient une valeur de type ";
        print gettype($car);

        echo " <br> la variable \$type contient une valeur de type ";
        print gettype($type);

?>
    </body>
</html>