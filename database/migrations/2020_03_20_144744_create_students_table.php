<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    
     
    public function up()
    {
        // Primo argomento il nome della tabella 
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            // $table->strings();
            // $table->int();
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
        // Cancella questa tabella se esiste
        Schema::dropIfExists('students');
    }
}
