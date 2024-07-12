<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('course');
            $table->string('purpose');
            $table->string('department');
            $table->string('meeting_mode');
            $table->string('online_preference')->nullable();
            $table->date('schedule');
            $table->string('status')->default('pending'); // pending, approved, disapproved
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('appointments');
    }
    
}
