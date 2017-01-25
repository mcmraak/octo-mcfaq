<?php namespace Mcmraak\Mcfaq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMcmraakMcfaqFeedback extends Migration
{
    public function up()
    {
        Schema::create('mcmraak_mcfaq_feedback', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('email');
            $table->text('question');
            $table->text('answer');
            $table->integer('active')->default(0);
            $table->string('ip');
            $table->dateTime('date');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mcmraak_mcfaq_feedback');
    }
}
