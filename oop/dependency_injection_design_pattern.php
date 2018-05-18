<?php
/**
*@author by Vuong
*@category Dependency Injection
*/


interface TheThao
{
    function dacdiem($message);
}

class BongDa implements TheThao
{

    public function dacdiem($message)
    {
        printf("Đây là thông tin Bóng Đá. Anh là %s \n", $message);
    }
}

class BongChuyen implements TheThao 
{

    public function dacdiem($message) 
    {
        printf("Đây là thông tin Bóng chuyền. Anh là %s \n", $message);
    }
}

class VanDongVien 
{
    public $vandongvien;

    public function __construct(TheThao $vandongvien) 
    {
        $this->vandongvien = $vandongvien;
    }

    public function dacdiem($message)
    {
        return $this->vandongvien->dacdiem($message);
    }
}

//dùng với class Bóng Đá
$vuong = new VanDongVien(new BongDa);
$vuong->dacdiem('cầu thủ bóng đá');

// dùng với class bóng chuyền
$vidu2 = new VanDongVien(new BongChuyen);
$vidu2->dacdiem('cầu thủ bóng chuyền');

//https://3v4l.org/Av2RI