<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq_answers', function (Blueprint $table) {
            $table->id();
            $table->string('details');
            $table->boolean('para')->default(false);
            $table->boolean('title')->default(false);
            $table->boolean('point')->default(false);
            $table->unsignedBigInteger('faq_id');
            $table->foreign('faq_id')
                ->references('id')
                ->on('faqs')
                ->onDelete('cascade');
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
        Schema::dropIfExists('faq_answers');
    }
}
