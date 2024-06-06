<?php
class Square implements ShapeInterface
{
    public $length;

    public function __constructor($length)
    {
        $this->length = $length;
    }

    // Thay vì tính areaa trong AreaCalculator, ta tạo hàm area riêng cho từng shape
    // Đảm bảo Open-Close Principle
    public function area()
    {
        return pow($this->length, 2);
    }
}
