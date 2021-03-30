<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('batch_name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('position')->nullable();
            $table->string('no_of_employee')->nullable();
            $table->string('blood')->nullable();
            $table->string('blood_donner')->nullable();
            $table->string('gender')->nullable();
            $table->string('about_you')->nullable();
            $table->string('about_your_business')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('nationality')->nullable();
            $table->string('occupation')->nullable();
            $table->string('phone')->nullable();
            $table->string('facebook')->nullable();
            $table->string('status')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
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
