<?php

spl_autoload_register(function ($class) {
    require_once $class . '.php';
});

$circle1 = new Circle(2.5);
$circle2 = new Circle(5);

echo "\$circle1\tClass: " . get_class($circle1)
    . "\t\$radius: " . $circle1->getRadius()
    . "\tArea: " . $circle1->getArea()
    . "\tPerimeter: " . $circle1->getPerimeter()
    . "\n";

echo "\$circle2\tClass: " . get_class($circle2)
    . "\t\$radius: " . $circle2->getRadius()
    . "\tArea: " . $circle2->getArea()
    . "\tPerimeter: " . $circle2->getPerimeter()
    . "\n";

echo "\n";

$rectangle1 = new Rectangle(3, 5);
$rectangle2 = new Rectangle(2, 10);

echo "\$rectangle1\tClass: " . get_class($rectangle1)
    . "\t\$width: " . $rectangle1->getWidth()
    . "\t\$height: " . $rectangle1->getHeight()
    . "\tArea: " . $rectangle1->getArea()
    . "\tPerimeter: " . $rectangle1->getPerimeter()
    . "\n";

echo "\$rectangle2\tClass: " . get_class($rectangle2)
    . "\t\$width: " . $rectangle2->getWidth()
    . "\t\$height: " . $rectangle2->getHeight()
    . "\tArea: " . $rectangle2->getArea()
    . "\tPerimeter: " . $rectangle2->getPerimeter()
    . "\n";

echo "\n";

$triangle1 = new Triangle(3, 5);
$triangle2 = new Triangle(2, 10);

echo "\$triangle1\tClass: " . get_class($triangle1)
    . "\t\$base: " . $triangle1->getBase()
    . "\t\$height: " . $triangle1->getHeight()
    . "\tArea: " . $triangle1->getArea()
    . "\n";

echo "\$triangle2\tClass: " . get_class($triangle2)
    . "\t\$base: " . $triangle2->getBase()
    . "\t\$height: " . $triangle2->getHeight()
    . "\tArea: " . $triangle2->getArea()
    . "\n";