<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationalActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educational_activities', function (Blueprint $table) {
            $table->id();

            $table->string('name', 50)->default(NULL);
            $table->string('address', 150)->default(NULL);
            $table->string('direction_activity', 50)->default(NULL);
            $table->string('function_activity', 50)->default(NULL);
            $table->integer('area_object')->default(NULL);
            $table->string('document_activity', 50)->default(NULL);

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
        Schema::dropIfExists('educational_activities');
    }
}
