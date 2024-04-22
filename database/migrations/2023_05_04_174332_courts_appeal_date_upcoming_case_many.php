<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CourtsAppealDateUpcomingCaseMany extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::connection('two')->create('courts_appeal_date_upcoming_case__many', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('courts_appeal_id')->unsigned()->nullable();
            $table->unsignedBigInteger('date_upcoming_case_id')->unsigned()->nullable();
            
            $table->string('created_at')->nullable();
            $table->string('updated_at')->nullable();
            $table->string('deleted_at')->nullable();

           $table->foreign('courts_appeal_id')->references('id')->on('courts_appeal')->onDelete('cascade');
           $table->foreign('date_upcoming_case_id')->references('id')->on('courts_appeal_date_upcoming_case')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){Schema::connection('two')->dropIfExists('courts_appeal_date_upcoming_case__many');}
}
