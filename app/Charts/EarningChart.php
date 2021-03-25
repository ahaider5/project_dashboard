<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class EarningChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        return Chartisan::build()
            ->labels(['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021'])
            ->dataset('Savings', [346, 1758, 3934, 2122, 3652, 695, 1643, 2940, 3416, 1229, 293])
            ->dataset('Fundraiser', [580, 1650, 3840, 1370, 530, 3421, 1031, 2794, 1076, 971, 3706])
            ->dataset('Investments' , [2071, 228, 1748, 1922, 506, 2714, 1785, 290, 3573, 1086, 3633]);
    }
}