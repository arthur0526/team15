<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarineMammalsObservationsTable extends Migration
{

    public function up()
    {
        Schema::create('marine_mammals_observations', function (Blueprint $table) {
            $table->id(); // 自動遞增主鍵
            $table->integer('year')->comment('年份（民國年）'); // 年份（民國年）
            $table->float('solar_power')->comment('太陽光電發電量 (百萬度)'); // 太陽光電
            $table->float('wind_power')->comment('風力發電量 (百萬度)'); // 風力發電
            $table->float('hydro_power')->comment('慣常水力發電量 (百萬度)'); // 慣常水力
            $table->float('biomass_power')->comment('生質能發電量 (百萬度)'); // 生質能發電
            $table->float('geothermal_power')->nullable()->comment('地熱發電量 (百萬度)'); // 地熱發電
            $table->float('waste_power')->comment('廢棄物發電量 (百萬度)'); // 廢棄物發電
            $table->float('total_power')->comment('發電總合計 (百萬度)'); // 合計
            $table->timestamps(); // 自動產生 created_at 和 updated_at 欄位
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marine_mammals_observations');
    }
}
