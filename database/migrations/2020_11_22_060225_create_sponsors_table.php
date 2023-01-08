<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age');
            $table->text('amount');
            $table->string('gender');
            $table->string('dob')->nullable();
            $table->string('projectArea')->nullable();
            $table->text('noOfSiblings')->nullable();
            $table->string('hobbies')->nullable();
            $table->string('aimInLife')->nullable();
            $table->string('favouriteSubject')->nullable();
            $table->text('grade')->nullable();
            $table->string('favouriteSports')->nullable();
            $table->string('monhtlyProtein')->nullable();
            $table->string('householdIncome')->nullable();
            $table->text('image')->nullable();

            $table->text('dreams')->nullable();
            $table->text('goesToSchool')->nullable();
            $table->text('sourceOfEnergy')->nullable();
            $table->text('guardianEmployment')->nullable();
            $table->string('ageRange')->nullable();


            $table->text('noOfFamilyMembers')->nullable();
            $table->string('professionOfMembers')->nullable();
            $table->string('kidsAges')->nullable();
            $table->string('highestMonthlyIncome')->nullable();
            $table->text('lowestMonthlyIncome')->nullable();



            $table->boolean('isSidebar');
            $table->integer('serialNumber')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sponsors');
    }
}
