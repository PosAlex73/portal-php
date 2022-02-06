<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreadMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thread_messages', function (Blueprint $table) {
            $table->id('message_id');
            $table->unsignedBigInteger('thread_id');
            $table->foreign('thread_id')->references('thread_id')->on('threads')->cascadeOnDelete();
            $table->text('message', 512)->nullable(false);
            $table->string('status', 1)->nullable(false)->default(\App\Enums\MessageStatuses::UNREAD);
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
        Schema::dropIfExists('thread_messages');
    }
}
