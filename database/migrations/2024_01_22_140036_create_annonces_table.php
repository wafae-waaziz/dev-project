<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            
            // Assurez-vous que le type de la colonne `module_id` correspond à la colonne référencée (`id` dans la table `modules`).
            $table->unsignedBigInteger('module_id');
            
            $table->string('titre');
            $table->text('contenu');
            $table->timestamp('date_annonce')->nullable();
            $table->timestamps();

            // Assurez-vous que les types de données et les jeux de caractères sont compatibles.
            $table->foreign('module_id')->references('id')->on('modules')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annonces');
    }
}
