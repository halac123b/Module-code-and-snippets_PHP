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
      // Ở đây ta dùng condition để chia case và tính area của từng shape riêng trong 1 class chung
      // Điều này không tốt vì nếu có thêm shape mới, ta phải thêm case mới vào class này, vi phạm Open/Closed Principle
      // Vì thế nến tạo hàm area cho từng shape
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
}

$shapes = [
  new Circle(2),
  new Square(5),
  new Square(6),
];

$areas = new AreaCalculator($shapes);
$output = new SumCalculatorOutputter($areas);

echo $output->JSON();
echo $output->HTML();
