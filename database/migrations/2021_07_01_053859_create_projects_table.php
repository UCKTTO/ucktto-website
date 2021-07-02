<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
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
            $table->string('college');
            $table->string('department');
            $table->string('title');
            $table->string('author1');
            $table->string('author2')->nullable();
            $table->string('author3')->nullable();
            $table->string('author4')->nullable();
            $table->string('author5')->nullable();
            $table->string('author6')->nullable();
            $table->string('email1');
            $table->string('email2')->nullable();
            $table->string('email3')->nullable();
            $table->string('email4')->nullable();
            $table->string('email5')->nullable();
            $table->string('email6')->nullable();
            $table->string('phonenumber1');
            $table->string('phonenumber2')->nullable();
            $table->string('phonenumber3')->nullable();
            $table->string('phonenumber4')->nullable();
            $table->string('phonenumber5')->nullable();
            $table->string('phonenumber6')->nullable();
            $table->string('adviser');
            $table->date('date');
            $table->text('description');
            $table->string('pip');
            $table->string('pil');
            $table->integer('a')->leghth(11);
            $table->integer('b')->leghth(11);
            $table->integer('c')->leghth(11);
            $table->integer('d')->leghth(11);
            $table->integer('e')->leghth(11);
            $table->integer('f')->leghth(11);
            $table->integer('overall');
            $table->string('action');
            $table->string('fipr');
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
}
