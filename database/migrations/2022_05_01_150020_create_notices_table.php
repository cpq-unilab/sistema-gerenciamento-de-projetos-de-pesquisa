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
        Schema::create('notices', function (Blueprint $table) {
            $table->id();
            $table->string('number', 2);
            $table->string('year', 4);
            $table->string('code');
            $table->string('desription');

            $table->dateTime('submission_start');
            $table->dateTime('submission_end');

            $table->dateTime('submission_appeal_start');
            $table->dateTime('submission_appeal_end');

            $table->dateTime('evaluation_start');
            $table->dateTime('evaluation_end');

            $table->dateTime('evaluation_appeal_start');
            $table->dateTime('evaluation_appeal_end');

            $table->dateTime('execution_start');
            $table->dateTime('execution_end');

            $table->boolean('continuous_flow')->default(false);

            $table->string('file_path')->nullable();

            $table->boolean('archived')->default(false);

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
        Schema::dropIfExists('notices');
    }
};
