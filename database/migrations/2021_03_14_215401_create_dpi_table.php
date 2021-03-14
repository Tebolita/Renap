<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function PHPUnit\Framework\once;

class CreateDpiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dpi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dpi', )->unique();
            $table->unsignedBigInteger('user_id')->unique();

            $table->foreign('user_id')
            ->references('id')
            ->on('solicitudes')
            ->onDelete('cascade')
            ->onUpdate('cascade');

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
        Schema::dropIfExists('dpi');
    }
}
