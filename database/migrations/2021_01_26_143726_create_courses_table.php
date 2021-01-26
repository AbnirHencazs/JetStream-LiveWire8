<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');//Que usuario ha creado este curso
            $table->unsignedBigInteger('category_id');//A que categoría pertenece éste curso

            $table->string('name');
            $table->string('slug');//Identificador único amigable para la lectura
            $table->string('image');
            $table->text('description');
            $table->timestamps();

            //Relaciones (llaves foraneas)
            /**
             * Vamos a trbajar con la tabla users, vamos a relacionar su campo id
             * con el campo foreign 'user_id'
             */
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
