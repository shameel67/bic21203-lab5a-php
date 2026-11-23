<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        function calculateArea(float|int $width, float|int $height): float|int {
            return $width * $height;
        }

        $width = 4;
        $height = 2;
        $area = calculateArea($width, $height);

        echo "The area of a rectangle with a width of {$width} and {$height} is {$area}";
    ?>
</body>
</html>