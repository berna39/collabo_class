<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LivreBiblio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        schema:: create ('livres',function(Blueprint $table)
        {   
       $table->id();
       $table->string('titre');
       $table->string('annee');
       $table->string('edition');
       $table->string('auteur');
       $table->string('editeur');
       $table->string('resume');
       $table->date('date_publication');
  
          } ); //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
