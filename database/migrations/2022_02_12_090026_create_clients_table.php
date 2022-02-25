<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('clients_id', 150)->nullable();
            $table->string('auteur', 50)->nullable();
            $table->string('entreprise_libelle', 100)->nullable();
            $table->string('type_entreprise', 100)->nullable();
            $table->string('sigle', 100)->nullable();
            $table->string('boite_postal', 100)->nullable();
            $table->string('compte_contribuable', 100)->nullable();
            $table->string('registre_commerce', 100)->nullable();
            $table->string('ville', 100)->nullable();
            $table->integer('facteur_1')->nullable();
            $table->integer('facteur_2')->nullable();

            $table->string('immeuble', 100)->nullable();
            $table->string('etage', 100)->nullable();
            $table->string('porte', 100)->nullable();

            $table->string('contacts_clients', 100)->nullable();
            $table->string('commune_clients', 100)->nullable();
            $table->string('quartier_clients', 100)->nullable();
            $table->string('rue_clients')->nullable();
            $table->string('dirigeant')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
