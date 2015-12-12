<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargoViajesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cargo_viajes', function(Blueprint $table)
		{
			$table->integer('id_cargo')->unsigned();
			$table->integer('id_viaje')->unsigned();
			$table->timestamps();

			$table->foreign('id_viaje')
				->references('id_viaje')->on('tipo_viajes')
				->onUpdate('CASCADE')
				->onDelete('RESTRICT');

			$table->foreign('id_cargo')
				->references('id_cargo')->on('cargos')
				->onUpdate('CASCADE')
				->onDelete('RESTRICT');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cargo_viajes');
	}

}
