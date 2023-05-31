<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameUploadedAt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('logs', function(Blueprint $table) {
            $table->renameColumn('uploaded_at', 'created_at');
        });
    }


    public function down()
    {
        Schema::table('logs', function(Blueprint $table) {
            $table->renameColumn('created_at', 'uploaded_at');
        });
    }
}
