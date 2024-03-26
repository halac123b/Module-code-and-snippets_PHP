<?php
class AreaCalculator
{
  public $shapes;

  public function __construct($shapes = [])
  {
    $this->shapes = $shapes;
  }

  public function sum()
  {
    foreach ($this->shapes as $shape) {
      // Check if an object is an instance of a class
      // if (is_a($shape, 'Square')) {
      if ($shape instanceof Square) {
        // Push an item to the end of an array
        $area[] = pow($shape->length, 2);
      } elseif ($shape instanceof Circle) {
        $area[] = pi() * pow($shape->radius, 2);
      }
    }
    // Calculate the sum of values in an array
    return array_sum($area);
  }

  public function output()
  {
    // Join array elements with a string (like join() in Python)
    return implode('', [
      '',
      'Sum of the areas of provided shapes: ',
      $this->sum(),
      '',
    ]);
  }
}

$shapes = [
  new Circle(2),
  new Square(5),
  new Square(6),
];

$areas = new AreaCalculator($shapes);
echo $areas->output();
