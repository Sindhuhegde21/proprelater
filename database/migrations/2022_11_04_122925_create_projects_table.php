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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->enum('project_title', ['Prestige', 'Total-Environment','Other']);
            $table->enum('type',['House','Flat','Villa','Appartment']);
            $table->string('location');
            $table->string('price')->nullable();
            $table->string('size')->nullable();
            $table->string('image')->nullable();
            $table->text('images')->nullable();
            $table->string('rera_number')->nullable();
            $table->integer('number_of_units')->nullable();
            $table->text('specification')->nullable();

            $table->string('possession')->nullable();
            $table->longtext('about_the_project')->nullable();
            $table->string('floor_plan')->nullable();
            $table->string('master_plan')->nullable();
            $table->integer('unit')->nullable();
            $table->longText('amenities')->nullable();
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('projects');
    }
};
