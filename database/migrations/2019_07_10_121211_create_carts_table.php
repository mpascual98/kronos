<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->timestamps();
          $table->string('name', 100);
          $table->string('description', 300);
          $table->decimal('price', 10, 2);
          $table->string('featured_img', 300);
          $table->integer('cant');
          $table->bigInteger('user_id')->unsigned();
          $table->smallInteger('status')->default(0);
          $table->bigInteger('cart_number');
          $table->softDeletes();

          $table->foreign('user_id')
          ->references('id')->on('users');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
