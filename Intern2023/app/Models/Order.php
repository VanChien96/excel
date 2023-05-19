<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = [
        '納入先コード',
        '納入先名',
        'フリガナ',
        '郵便番号',
        '住所',
        '電話番号',
        'FAX番号',
        '登録利用者',
        '最終利用者名',
        '納入先分類１',
        '納入先分類２',
        '納入先分類３',
    ];

    protected $table = 'orders';
}
