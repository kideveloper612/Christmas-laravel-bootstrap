<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Kid_Gender')->nullable();
            $table->string('Kid_Name')->nullable();
            $table->integer('Kid_Age')->nullable();
            $table->string('Kid_Photo1')->nullable();
            $table->string('Kid_Photo2')->nullable();
            $table->string('Kid_Family_Photo')->nullable();
            $table->string('Kid_Room_Photo')->nullable();
            $table->string('Kid_Letter_Photo')->nullable();
            $table->string('Kid_Comment')->nullable();
            $table->string('Kid_Advice')->nullable();
            $table->string('Customer_Name')->nullable();
            $table->string('Customer_Email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
