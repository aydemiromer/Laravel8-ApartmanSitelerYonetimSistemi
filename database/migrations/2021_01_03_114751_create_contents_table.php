<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {

                $table->id()->autoIncrement();

                $table->string('title',150);
                $table->string('keywords')->nullable();
                $table->string('description')->nullable();
                $table->string('image',100)->nullable();
                $table->integer('menu_id')->default(0);
                $table->text('detail',)->nullable();
                $table->float('price',)->nullable();
                $table->integer('tax',)->default(20);
                $table->text('type',)->nullable();
                $table->integer('user_id')->nullable();
                $table->string('status',5)->nullable()->default('False');
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
        Schema::dropIfExists('contents');
    }
}
