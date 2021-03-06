<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class Products extends Migration {
 /**
  * Run the migrations.
  *
  * @return void
  */
 public function up()
 {
  Schema::create('products', function(Blueprint $table)
  {
                        $table->increments('id');
                        $table->string('name');
                        $table->string('description');
                        $table->integer('price');
                        $table->integer('stocks');
                        $table->string('distributor');
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
  Schema::drop('products');
 }
}