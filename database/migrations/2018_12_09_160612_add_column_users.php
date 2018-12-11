<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::table('users', function (Blueprint $table) {
            $table->string('fname');
            $table->string('lname');
            $table->string('civility');
            $table->string('address');
            $table->string('city');
            $table->string('postal_code');
            $table->string('cin')->uniq();
            $table->string('num_passport')->uniq();
            $table->string('telephone');
            $table->string('fax');
            $table->string('mobile');
            $table->string('observation');
            $table->boolean('isblacklist');
            $table->string('company');
            $table->date('date_birthday');
            $table->string('gender');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropColumn('fname');
            $table->dropColumn('lname');
            $table->dropColumn('civility');
            $table->dropColumn('address');
            $table->dropColumn('city');
            $table->dropColumn('postal_code');
            $table->dropColumn('cin');
            $table->dropColumn('num_passport');
            $table->dropColumn('telephone');
            $table->dropColumn('fax');
            $table->dropColumn('mobile');
            $table->dropColumn('observation');
            $table->dropColumn('isblacklist');
            $table->dropColumn('company');
            $table->dropColumn('date_birthday');
            $table->dropColumn('gender');    
            });
        }

}
