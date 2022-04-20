<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('number_of_rooms', 100);
            $table->string('type of repair', 100);
            $table->integer('floor');
            $table->decimal('area', $precision = 7, $scale = 3);
            $table->boolean('glazed balcony');
            $table->boolean('dressing room');
            $table->decimal('discount', $precision = 7, $scale = 3);
            $table->decimal('price', $precision = 9, $scale = 2);
            $table->timestamps();

            $table->foreignId('image_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('description_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('decoration_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('room_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartments');
    }
}
