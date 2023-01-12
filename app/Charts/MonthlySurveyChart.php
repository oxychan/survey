<?php

namespace App\Charts;

use App\Models\Survey;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class MonthlySurveyChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        $januari = Survey::whereYear('tanggal_survey', '=', date('Y'))
            ->whereMonth('tanggal_survey', '=', 1)
            ->count();

        $februari = Survey::whereYear('tanggal_survey', '=', date('Y'))
            ->whereMonth('tanggal_survey', '=', 2)
            ->count();

        $maret = Survey::whereYear('tanggal_survey', '=', date('Y'))
            ->whereMonth('tanggal_survey', '=', 3)
            ->count();

        $april = Survey::whereYear('tanggal_survey', '=', date('Y'))
            ->whereMonth('tanggal_survey', '=', 4)
            ->count();

        $mei = Survey::whereYear('tanggal_survey', '=', date('Y'))
            ->whereMonth('tanggal_survey', '=', 5)
            ->count();

        $juni = Survey::whereYear('tanggal_survey', '=', date('Y'))
            ->whereMonth('tanggal_survey', '=', 6)
            ->count();

        $juli = Survey::whereYear('tanggal_survey', '=', date('Y'))
            ->whereMonth('tanggal_survey', '=', 7)
            ->count();

        $agustus = Survey::whereYear('tanggal_survey', '=', date('Y'))
            ->whereMonth('tanggal_survey', '=', 8)
            ->count();

        $september = Survey::whereYear('tanggal_survey', '=', date('Y'))
            ->whereMonth('tanggal_survey', '=', 9)
            ->count();

        $oktober = Survey::whereYear('tanggal_survey', '=', date('Y'))
            ->whereMonth('tanggal_survey', '=', 10)
            ->count();

        $november = Survey::whereYear('tanggal_survey', '=', date('Y'))
            ->whereMonth('tanggal_survey', '=', 11)
            ->count();

        $desember = Survey::whereYear('tanggal_survey', '=', date('Y'))
            ->whereMonth('tanggal_survey', '=', 12)
            ->count();

        $datas = [$januari, $februari, $maret, $april, $mei, $juni, $juli, $agustus, $september, $oktober, $november, $desember];

        return $this->chart->barChart()
            ->addData('Jumlah Pengisi', $datas)
            ->setXAxis($months);
    }
}
