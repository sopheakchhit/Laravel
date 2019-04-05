<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('products',function(Blueprint $table){
          $table->increments('id');
          $table->string('proname',40);
          $table->string('image',40);
          $table->string('description',50);
          $table->decimal('price', 10, 2);
          $table->string('cat_id',10);
          $table->string('size',30);
          $table->string('type',20);
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
        Schema::dropIfExists('products');
    }
}
