<?php
// To seperate functions of classes, we create this class just for outputting the sum of areas
class SumCalculatorOutputter
{
  // AreaCalculator instance
  protected $calculator;

  public function __constructor(AreaCalculator $calculator)
  {
    $this->calculator = $calculator;
  }

  public function JSON()
  {
    // Associative array to convert to JSON
    $data = [
      'sum' => $this->calculator->sum(),
    ];

    // Convert to JSON
    return json_encode($data);
  }

  public function HTML()
  {
    return implode('', [
      '',
      'Sum of the areas of provided shapes: ',
      $this->calculator->sum(),
      '',
    ]);
  }
}
