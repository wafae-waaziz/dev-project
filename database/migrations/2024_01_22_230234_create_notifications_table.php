
<?php
// database/migrations/YYYY_MM_DD_create_notifications_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // ID de l'étudiant destinataire
            $table->text('content'); // Contenu de la notification
            $table->unsignedBigInteger('announcement_id'); // ID de l'annonce associée
            $table->timestamp('created_at')->useCurrent(); // Date de création

            // Ajoutez d'autres colonnes si nécessaire

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // Ajoutez d'autres contraintes étrangères si nécessaire
        });
    }

    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
