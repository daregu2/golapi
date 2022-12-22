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
        Schema::create('topics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('week_id')->constrained()->cascadeOnDelete();
            $table->string('name', 100);
            $table->string('resource_link', 100)->nullable();
            $table->tinyInteger('grade');
            $table->string('description', 100)->nullable();
            $table->boolean('is_active')->default(false);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topics');
    }
};
