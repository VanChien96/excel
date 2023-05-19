<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        // DonHang::factory(1)->create([
        //     'diemden' => 'HaTinh',
        //     'ide' => 12334,
        //     'role' => 'admin',
        //     'phone' => 25
        // ]);
        // DonHang::factory(10)->create();

        Order::factory(3)->sequence([
            '納入先コード' => '123456',
            '納入先名' =>  'Khach san ABC',
            'フリガナ' => 'ABC',
            '郵便番号' =>  '123-4567',
            '住所' =>  'Da Nang, Lien Chieu, Hoa Khanh, so 12',
            '電話番号' =>  '0977777777',
            'FAX番号' =>  '124542',
            '納入先分類１' =>  'VietNam',
            '納入先分類２' =>  'Japan',
            '納入先分類３' =>  'Korea',
            '備考' =>  'Bla Bla Bla',
            '登録利用者' =>  'Nguyen Van A',
            '最終利用者名' =>  'Nguyen Van B',
        ], [
            '納入先コード' => '123455',
            '納入先名' =>  'Khach san ABCD',
            'フリガナ' => 'ABCD',
            '郵便番号' =>  '123-4568',
            '住所' =>  'Da Nang, Lien Chieu, Hoa Khanh, so 13',
            '電話番号' =>  '097777779',
            'FAX番号' =>  '124942',
            '納入先分類１' =>  'Indonesia',
            '納入先分類２' =>  'Brubay',
            '納入先分類３' =>  'Philipin',
            '備考' =>  'Bla Bla Bla 999',
            '登録利用者' =>  'Nguyen Van A9',
            '最終利用者名' =>  'Nguyen Van B9',
        ], [
            '納入先コード' => '123485',
            '納入先名' =>  'Khach san ABCD8',
            'フリガナ' => 'ABCD8',
            '郵便番号' =>  '123-4867',
            '住所' =>  'Da Nang, Lien Chieu, Hoa Khanh, so 18',
            '電話番号' =>  '097778779',
            'FAX番号' =>  '124948',
            '納入先分類１' =>  'Japan',
            '納入先分類２' =>  'Brubay',
            '納入先分類３' =>  'VietNam',
            '備考' =>  'Bla Bla Bla 9998',
            '登録利用者' =>  'Nguyen Van A98',
            '最終利用者名' =>  'Nguyen Van B98',
        ])->create();

        Order::factory(150)->create();
    }
}
