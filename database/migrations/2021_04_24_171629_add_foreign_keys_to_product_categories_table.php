<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProductCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('product_categories', function(Blueprint $table)
		{
			$table->foreign('id_category', 'FK_product_categories_base_categories')->references('id')->on('base_categories')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_product', 'FK_product_categories_products')->references('id')->on('products')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('product_categories', function(Blueprint $table)
		{
			$table->dropForeign('FK_product_categories_base_categories');
			$table->dropForeign('FK_product_categories_products');
		});
	}

}
