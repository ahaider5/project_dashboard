<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class SampleChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        return Chartisan::build()
            ->labels(['Admin', 'Moderator', 'Manager', 'User'])
            ->dataset('January', [1, 2, 3, 4])
            ->dataset('February', [2, 5, 1, 6])
            ->dataset('March', [2, 4, 6, 15]);
            // ->toJSON();
    }
}