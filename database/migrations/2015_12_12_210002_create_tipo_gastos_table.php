<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoGastosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipo_gastos', function(Blueprint $table)
		{
			$table->increments('id_gasto');
			$table->string('nombre_gasto', 50);
			$table->integer('monto_max');
			$table->integer('id_viaje')->unsigned();

			$table->timestamps();

			$table->foreign('id_viaje')
				->references('id_viaje')->on('tipo_viajes')
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
		Schema::drop('tipo_gastos');
	}

}
