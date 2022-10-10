<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableSongsAddChordAndVideo extends Migration
{
    
    public function up()
    {
        Schema::table('songs', function (Blueprint $table) {
            $table->text('chord')->after('slug');
            // $table->renameColumn('content', 'video');
        });
    }

   
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('chord');
            // $table->renameColumn('video', 'content');
        });
    }
}
