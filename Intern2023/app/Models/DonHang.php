<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    use HasFactory;

    protected $fillable = [
        //納入先名(điểm đến)			90 Character full-size, 180 Character half-size	
        //フリガナ(tên phiên âm)				140 Character katakana full-size		
        //郵便番号(mã bưu điện)			8Character(###-####)			
        //住所(địa chỉ)				400 Character		
        //電話番号(sdt)			20 Character			
        //FAX番号			Ký hiệu half-seize number 12 Character			
        //納入先分類１(điểm đến giao hàng loại 1)			Character 50			
        //納入先分類２			Character 50				
        //納入先分類３			Character 50				
        //備考(note)				200Character	
        //登録利用者(người tạo)	
        //最終利用者名(người dùng cuối)
    ];
}
