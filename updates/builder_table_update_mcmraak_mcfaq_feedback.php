<?php namespace Mcmraak\Mcfaq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMcmraakMcfaqFeedback extends Migration
{
    public function up()
    {
        Schema::table('mcmraak_mcfaq_feedback', function($table)
        {
            $table->text('answer')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('mcmraak_mcfaq_feedback', function($table)
        {
            $table->text('answer')->nullable(false)->change();
        });
    }
}
