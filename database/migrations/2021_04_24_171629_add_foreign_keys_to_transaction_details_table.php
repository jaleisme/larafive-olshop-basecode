<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTransactionDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('transaction_details', function(Blueprint $table)
		{
			$table->foreign('id_transaction', 'FK_transaction_details_transactions')->references('id')->on('transactions')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('transaction_details', function(Blueprint $table)
		{
			$table->dropForeign('FK_transaction_details_transactions');
		});
	}

}
