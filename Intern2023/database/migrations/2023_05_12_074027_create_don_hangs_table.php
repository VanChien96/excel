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
        Schema::create('don_hangs', function (Blueprint $table) {
            $table->id();
            //納入先名(điểm đến)			90 Character full-size, 180 Character half-size
            $table->string('diemden', 90)->nullable();
            //フリガナ(tên phiên âm)				140 Character katakana full-size		
            $table->integer('ide');
            $table->enum('role',['admin','user','guest']);
            $table->timestamp('birth_day')->nullable();
            $table->unsignedInteger('phone');
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
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('don_hangs');
    }
};
