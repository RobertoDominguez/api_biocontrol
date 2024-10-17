<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichadas', function (Blueprint $table) { 
            $table->id();
            $table->string('codigo');
            $table->date('fecha');
            $table->string('hostname');
            $table->string('ip');
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
        Schema::dropIfExists('fichadas');
    }
};


/*

CREATE TABLE FichadaExtendida(
	id_fichada int not null primary key,
	foto varchar(255),
	foreign key (id_fichada) references fichada(id) on delete cascade on update cascade
);

ALTER TABLE FichadaExtendida ADD foto2 varchar(255);
ALTER TABLE FichadaExtendida ADD foto3 varchar(255);

 */
