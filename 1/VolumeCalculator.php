
<?php
class VolumeCalculator extends AreaCalculator
{
  public function __constructor($shapes = [])
  {
    parent::construct($shapes);
  }

  public function sum()
  {
    // Nguyên tắc L: đảm bảo subclass return các data type sao cho k bị lỗi khi thay thế base class trong code
    return 0;
  }
}
?>