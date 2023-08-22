<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopikMateriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topik_materi', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->foreignId('jenis_bidang_id')->constrained('jenis_bidang')->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topik_materi');
        // Schema::table('topik_materi', function (Blueprint $table) {
        //     //
        // });
    }
}
