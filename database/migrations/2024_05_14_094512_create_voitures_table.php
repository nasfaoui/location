<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('voitures', function (Blueprint $table) {
      $table->id('N_Voiture');
      $table->string('Marque');
      $table->string('Modele');
      $table->string('image');
      $table->decimal('Cost_Par_Jour', 8, 2);
      $table->decimal('kilometrage', 8, 2);
      $table->decimal('seats', 8, 2);
      $table->unsignedBigInteger('N_Parking'); // Ensure this is unsignedBigInteger
      $table->foreign('N_Parking')->references('N_Parking')->on('parkings')->onDelete('cascade');
      $table->unsignedBigInteger('user_id');
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      $table->boolean('availability')->default(true);
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
    Schema::dropIfExists('voitures');
  }
};
