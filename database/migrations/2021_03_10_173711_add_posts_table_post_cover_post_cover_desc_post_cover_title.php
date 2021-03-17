<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPostsTablePostCoverPostCoverDescPostCoverTitle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->text('post_cover')->nullable();
            $table->text('post_cover_title')->nullable();
            $table->text('post_cover_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('post_cover');
            $table->dropColumn('post_cover_title');
            $table->dropColumn('post_cover_description');
        });
    }
}
