<!-- Create class Rectangle having data members length and breadth and create a method to set length & breadth of rectangle. 
Get the area and perimeter of rectangle & print it. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rect</title>
</head>
<body>
    <?php
        class Rectangle {
            private $length;
            private $breadth;

            public function __construct($length, $breadth) {
                $this->length = $length;
                $this->breadth = $breadth;
            }

            public function calcArea() {
                return $this->length * $this->breadth;
            }

            public function calcPerimeter() {
                return 2 * ($this->length + $this->breadth);
            }
        }
    $rectangle = new Rectangle(56,23);
    $area = $rectangle->calcArea();
    $perimeter = $rectangle->calcPerimeter();
    echo "Area:".$area."<br>";
    echo "Perimeter:".$perimeter."<br>";
    ?>

</body>
</html>