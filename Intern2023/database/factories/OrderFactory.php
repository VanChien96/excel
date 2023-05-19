<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Oder>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            '納入先コード' => rand(123456,654321),
            '納入先名' =>  Str::random(20),
            'フリガナ' => Str::random(40),
            '郵便番号' =>  Str::random(8),
            '住所' =>  Str::random(100),
            '電話番号' =>  rand(123456789,999999999),
            'FAX番号' =>  rand(12345678,32654987),
            '納入先分類１' =>  Str::random(20),
            '納入先分類２' =>  Str::random(20),
            '納入先分類３' =>  Str::random(20),
            '備考' =>  Str::random(50),
            '登録利用者' =>  Str::random(20),
            '最終利用者名' =>  Str::random(20),
        ];
    }
}
