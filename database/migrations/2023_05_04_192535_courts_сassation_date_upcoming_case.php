<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CourtsCassationDateUpcomingCase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('courts_сassation_date_upcoming_case', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date_upcoming_case')->nullable();
            
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){Schema::dropIfExists('courts_сassation_date_upcoming_case');}
}
