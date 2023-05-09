<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EnforcementProceedingsDateVisitBailiff extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('enforcement_proceedings_date_visit_bailiff', function (Blueprint $table) {
            $table->id();
            $table->string('data')->nullable();
            
            $table->string('created_at')->nullable();
            $table->string('updated_at')->nullable();
            $table->string('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){Schema::dropIfExists('enforcement_proceedings_date_visit_bailiff');}
}
