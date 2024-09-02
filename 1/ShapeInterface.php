<?php
interface ShapeInterface
{
  public function area();
}

// Nguyên tắc I (Interface Segregation): 1 class k nên bị bắt buộc phải implement 1 hàm từ 1 interface mà nó k dùng tới

// Nếu phát sinh các class của object 3D, cần tính thể tích, ta nên tạo 1 interface riêng để chứa method volume, thay vì thêm vào interface cũ