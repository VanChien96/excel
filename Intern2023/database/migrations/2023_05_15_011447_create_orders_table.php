<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            // mã đơn hàng
            $table->string('納入先コード',6)->unsigned();
            // người nhận
            $table->string('納入先名',180);
            // tên kana
            $table->string('フリガナ',280);
            // mã bưu điện
            $table->string('郵便番号',8)->unsigned();
            $table->string('住所',400);
            // quận
            // $table->string('都道府県',8);
            // $table->string('市区町村',8);
            // $table->string('町・番地',8);
            // $table->string('マンション・ビル名',8);
            // số điện thoại
            $table->string('電話番号', 20)->unsigned();
            // mã fax
            $table->string('FAX番号', 12)->unsigned()->nullable();
            // điểm chuyển hàng loại 1
            $table->string('納入先分類１',50)->nullable();
            $table->string('納入先分類２',50)->nullable();
            $table->string('納入先分類３',50)->nullable();
            // note
            $table->string('備考',200)->nullable();
            // người tạo
            $table->string('登録利用者',50);
            // người dùng cuối
            $table->string('最終利用者名',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
