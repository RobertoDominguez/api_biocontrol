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
        Schema::create('visitas', function (Blueprint $table) { 
            $table->id();
            $table->integer('ci');
            $table->string('nombre');
            $table->string('celular');
            $table->string('placa');
            $table->string('casa');
            $table->string('observacion');
            $table->string('foto');
            $table->unsignedBigInteger('persona_id');
            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('visitas');
    }
};


/*

CREATE TABLE Visita(
	id int not null IDENTITY(1,1) primary key,
	codigo varchar(12) not null,
	ci varchar(12),
	nombre varchar(255) not null,
	placa varchar(12),
	observacion varchar(255),
	foto varchar(255),
    foto_salida varchar(255),
	salio bit not null,
    casa varchar(20),
	id_usuario_casa int not null,
	foreign key (id_usuario_casa) references persona(id) on delete cascade on update cascade,
	id_sucursal int not null,
	foreign key (id_sucursal) references sucursal(id) on delete cascade on update cascade,
	created_at datetime,
	updated_at datetime
);

ALTER TABLE Visita ADD foto2 varchar(255);
ALTER TABLE Visita ADD foto3 varchar(255);
ALTER TABLE Visita ADD foto_salida2 varchar(255);
ALTER TABLE Visita ADD foto_salida3 varchar(255);


ALTER TABLE Visita ADD celular varchar(255);



 */
