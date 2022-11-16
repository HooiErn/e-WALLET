<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->integer('account_id')->unsigned();
            $table->string('name');
            $table->string('username');
            $table->string('email',191)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('ic')->max(12)->nullable();
            $table->string('handphone_number')->nullable();
            $table->string('base_currency')->nullable();
            $table->integer('balance')->unsigned();
            $table->string('address')->nullable();
            $table->integer('credit_limit')->unsigned();
            $table->date('join_date');
            $table->string('created_by');
            $table->rememberToken();
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
        Schema::dropIfExists('branches');
    }
}
