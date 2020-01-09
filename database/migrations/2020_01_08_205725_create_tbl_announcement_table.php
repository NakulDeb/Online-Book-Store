<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblAnnouncementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_announcements', function (Blueprint $table) {
            $table->bigIncrements('announcement_id');
            $table->string('announcement_title');
            $table->string('announcement_details');
            $table->string('announcement_hyperlink');
            $table->boolean('publication_status')->nullable();
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
        Schema::dropIfExists('tbl_announcements');
    }
}
