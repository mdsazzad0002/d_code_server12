<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category_id');
            $table->integer('district_id');
            $table->text('short_details');
            $table->longText('long_details');
            $table->integer('creatorId');
            $table->text('slug');
            $table->date('deadline');
            $table->date('start_date');
            $table->integer('up_vote')->nullable();
            $table->integer('down_vote')->nullable();
            $table->integer('apply_count')->default(0);
            $table->string('company_name');
            $table->string('company_type');
            $table->string('location');
            $table->string('selected_list')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_posts');
    }
};
