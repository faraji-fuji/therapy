<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nationalId', 10);
            $table->string('proficiency', 20);
            $table->string('motivation', 250);
            $table->string('resume', 250);
            // status codes
            // 0: new
            // 1: approved
            $table->string('status')->nullable()->default("0");
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
        Schema::dropIfExists('applications');
    }
};
