<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBricolagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bricolages', function (Blueprint $table) {
            $table->id();
            $table->string('bricolage')->nullable();
            $table->text('bricolage_description');
            $table->date('date_bricolage');
            $table->string('horaire_bricolage');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('assistances_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('bricolages');
    }
}