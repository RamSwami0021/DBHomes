<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('contact', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id'); // Column for user_id
        $table->unsignedBigInteger('post_id'); // Column for post_id
        $table->string('name'); // Column for name
        $table->string('email'); // Column for email
        $table->string('contact_no'); // Column for contact number
        $table->boolean('loan')->default(false); // Checkbox column for loan, default value is false
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact');
    }
}
