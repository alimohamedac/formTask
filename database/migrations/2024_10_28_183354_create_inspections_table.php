<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspections', function (Blueprint $table) {
            $table->id();
            $table->string('work_order_no');
            $table->date('date');
            $table->string('customer_name');
            $table->string('project');
            $table->string('shape');
            $table->boolean('visual_check')->default(false);
            $table->boolean('color_match')->default(false);
            $table->boolean('coating_thickness')->default(false);
            $table->boolean('bad_packaging')->default(false);
            $table->boolean('bad_sealing')->default(false);
            $table->string('approved_by')->nullable();
            $table->string('inspector_name')->nullable();
            $table->date('inspection_date')->nullable();
            $table->string('signature')->nullable();
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
        Schema::dropIfExists('inspections');
    }
}
