<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTitleToContactFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contact_forms', function (Blueprint $table) {
            //カラムの追加場所をafterみたいな修飾できたりする。
            $table->string('title',50)->after('your_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contact_forms', function (Blueprint $table) {
            //カラム追加のmigrationfileにはここでカラム消す作業を書いてあげる(テーブル作成するファイルとここ絶対わすれる。)
            //rollbackする時の操作をちゃんと書いてあげる。
            $table->dropColumn('title');
        });
    }
}