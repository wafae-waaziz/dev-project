
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id(); // ID de la demande
            $table->text('contenu'); // Contenu de la demande
            $table->unsignedBigInteger('etudiant_id'); // ID de l'étudiant qui fait la demande
            $table->timestamps(); // Champs pour les dates de création et de mise à jour
        });

        // Table de liaison pour les destinataires (ResponsableFiliere et Professeur)
        Schema::create('demande_destinataire', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('demande_id');
            $table->unsignedBigInteger('destinataire_id');
            $table->string('destinataire_type'); // Type de destinataire (Professeur ou ResponsableFiliere)
            $table->timestamps();

            $table->foreign('demande_id')->references('id')->on('demandes');
            $table->unique(['demande_id', 'destinataire_id', 'destinataire_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demande_destinataire');
        Schema::dropIfExists('demandes');
    }
    public function envoyerNotificationAuxDestinataires()
{
    $demande = $this;

    // Récupérez le responsable de filière
    $responsableFiliere = ResponsableFiliere::where('filiere_id', $demande->filiere_id)->first();

    // Récupérez le responsable de module
    $responsableModule = ResponsableModule::where('module_id', $demande->module_id)->first();

    // Assurez-vous que les responsables existent et ont des adresses e-mail
    if ($responsableFiliere && $responsableFiliere->email) {
        $responsableFiliere->notify(new NouvelleDemandeNotification($demande));
    }

    if ($responsableModule && $responsableModule->email) {
        $responsableModule->notify(new NouvelleDemandeNotification($demande));
}