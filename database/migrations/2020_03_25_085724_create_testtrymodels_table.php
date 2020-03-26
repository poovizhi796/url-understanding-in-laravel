<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTesttrymodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testtrymodels', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->string('regno');
			$table->string('address');
			$table->created_at();
			$table->updated_at();
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
        Schema::dropIfExists('testtrymodels');
    }
}
