<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('fname');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('job');
            $table->string('salary');
            $table->string('keste');
            $table->string('birthdate');
            $table->string('gender');
            $table->string('edu');
            $table->string('know');
            $table->string('prof');
            $table->string('year');
            $table->string('know1');
            $table->string('prof1');
            $table->string('year1');
            $table->string('org');
            $table->string('p');
            $table->string('yearj');
            $table->text('aboutj');
            $table->string('org1');
            $table->string('p1');
            $table->string('yearj1');
            $table->text('aboutj1');
            $table->string('lang');
            $table->string('skill');
            $table->text('aboutm');
            $table->string('image');
            $table->foreignId('cuisine_id')->nullable()->constrained();
            $table->foreignId('category_id')->nullable()->constrained();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('resumes');
    }
};
