<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buytables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('phone');
            $table->string('brandname');
            $table->string('genericname');
            $table->string('quantity');
            $table->string('medicinetype');
            $table->string('sellername');
            $table->string('selleraddress');
            $table->string('semail')->unique();
            /*$table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();*/
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
        Schema::dropIfExists('users');
    }
}
