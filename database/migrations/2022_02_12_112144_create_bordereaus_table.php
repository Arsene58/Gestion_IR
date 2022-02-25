<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBordereausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bordereaus', function (Blueprint $table) {
            $table->id();

            $table->string('bordereau_id',255)->nullable();
            $table->string('expediteur',55)->nullable();
            $table->string('bordereau_ir',255)->nullable();
            $table->string('ref_bordereau',255)->nullable();
            $table->string('email_client',100)->nullable();
            $table->string('destinataire',100)->nullable();
            $table->string('hover_destinataire',100)->nullable();
            $table->string('nature_entreprise',100)->nullable();
            $table->string('type_course',100)->nullable();
            $table->string('contact_client', 100)->nullable();
            $table->string('commune_client', 100)->nullable();
            $table->string('quarter_client', 100)->nullable();
            $table->string('rue_client')->nullable();
            $table->string('type_doc',100)->nullable();
            $table->integer('nombre_doc')->nullable();
            $table->string('retour_souche',100)->nullable();
            $table->integer('nombre_souche')->nullable();
            $table->integer('facteur1')->nullable();
            $table->integer('facteur2')->nullable();
            $table->string('ref_facture')->nullable();
            
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
        Schema::dropIfExists('bordereaus');
    }
}
