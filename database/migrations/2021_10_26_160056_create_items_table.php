<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::dropIfExists('items');
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('category_id')->nullable()->index('items_category_id_foreign');
            $table->string('name');
            $table->tinyInteger('status')->default(1);
            $table->decimal('price', 14);
            $table->decimal('offer_price', 14)->nullable();
            $table->string('image')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->longText('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
