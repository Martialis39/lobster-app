<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('commutes');
        Schema::dropIfExists('places');
         // Creating the 'places' table if it doesn't exist
         Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
        });

        Schema::create('commutes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('start_destination_id');
            $table->unsignedBigInteger('end_destination_id');
            $table->decimal('distance', 10, 2);
            $table->timestamps();
            $table->decimal('fuel_consumed', 8, 2);
            $table->integer('duration_seconds');
            // Add other columns as needed

            // Foreign key constraints
            $table->foreign('start_destination_id')->references('id')->on('places');
            $table->foreign('end_destination_id')->references('id')->on('places');
        });

       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commutes');
        Schema::dropIfExists('places');
    }
}
