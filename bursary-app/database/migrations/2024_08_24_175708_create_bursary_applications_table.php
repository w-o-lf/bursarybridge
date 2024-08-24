<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBursaryApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bursary_applications', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone_number');
            $table->date('date_of_birth');
            $table->string('highest_education');
            $table->string('institution_name');
            $table->string('course');
            $table->integer('year_of_study');
            $table->text('financial_need');
            $table->integer('family_income');
            $table->string('other_scholarships')->nullable();
            $table->integer('scholarship_amount');
            $table->text('extracurricular_activities')->nullable();
            $table->text('career_goals')->nullable();
            $table->text('volunteer_work')->nullable();
            $table->text('references')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bursary_applications');
    }
}
