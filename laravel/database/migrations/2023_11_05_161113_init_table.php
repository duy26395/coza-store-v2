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
        //migration table banner
        Schema::create('banner', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->nullable(false);
            $table->string('type', 50)->nullable();
            $table->string('url', 255)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        //migration table category
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20)->nullable(false);
            $table->integer('parent_id')->nullable(false);
            $table->timestamps();
            $table->softDeletes();
        });

        //migration table discount
        Schema::create('discount', function (Blueprint $table) {
            $table->id();
            $table->string('code', 255)->nullable(false);
            $table->string('type', 50)->nullable(false);
            $table->string('money', 50)->nullable(false);
            $table->integer('percent')->nullable(false);
            $table->string('description', 255)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        //migration table img_product_detail
        Schema::create('img_product_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->nullable(false);
            $table->string('name', 255)->nullable(false);
            $table->timestamps();
            $table->softDeletes();
        });

        //migration table orders
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable(false);
            $table->integer('total_cost')->nullable(false);
            $table->string('status', 10)->nullable(false);
            $table->string('address', 255)->nullable(false);
            $table->string('phone_number', 20)->nullable(false);
            $table->string('email', 255)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        //migration table order_detail
        Schema::create('order_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->nullable(false)->index();
            $table->foreignId('product_id')->nullable(false);
            $table->integer('quantity')->nullable(false);
            $table->string('size', 10)->nullable();
            $table->string('color', 10)->nullable();
            $table->string('description', 255)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        //migration table password_reset_temp
        Schema::create('password_reset_temp', function (Blueprint $table) {
            $table->id();
            $table->string('email', 250)->nullable(false);
            $table->string('key', 250)->nullable(false);
            $table->timestamp('expDate')->nullable(false);
            $table->timestamps();
            $table->softDeletes();
        });

        //migration table products
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_company', 50)->nullable(false);
            $table->string('product_name', 255)->nullable(false)->index();
            $table->string('description', 255)->nullable();
            $table->integer('price')->nullable(false);
            $table->integer('quantity')->nullable(false);
            $table->string('product_img', 255)->nullable(false);
            $table->foreignId('category_id')->nullable(false);
            $table->timestamps();
            $table->softDeletes();
        });

        //migration table sliders
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->nullable(false);
            $table->string('type', 50)->nullable();
            $table->string('image_url', 255)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banner');
        Schema::dropIfExists('category');
        Schema::dropIfExists('discount');
        Schema::dropIfExists('img_product_detail');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('order_detail');
        Schema::dropIfExists('password_reset_temp');
        Schema::dropIfExists('products');
        Schema::dropIfExists('sliders');
        Schema::dropIfExists('sliders');
    }
};
