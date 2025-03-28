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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // العنوان
            $table->string('address'); // العنوان (موجود بالفعل)
            $table->float('area'); // المساحة
            $table->enum('property_type', ['Villa', 'Apartment', 'Land']); // نوع العقار
            $table->integer('number_of_rooms'); // عدد الغرف
            $table->decimal('price', 15, 2); // السعر
            $table->text('detailed_description')->nullable(); // وصف تفصيلي (اختياري)
            $table->text('photo')->nullable(); // الصورة (اختياري)
            $table->string('location'); // الموقع
            $table->enum('transaction_type', ['Rent', 'Buy', 'Sell']); // نوع العملية
            $table->date('date_added'); // تاريخ الإضافة
            $table->timestamps(); // تاريخ الإنشاء والتعديل (موجود بالفعل)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};