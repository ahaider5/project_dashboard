<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class FundraiserChart extends BaseChart
{
    public ?array $middlewares = ['auth'];

    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        return Chartisan::build()
            ->labels(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'])
            ->dataset('User 1', [200, 500, 650,750,900,1200,1500,2000,5000,9000,12000,18000])
            ->dataset('User 2', [250, 450, 700,800,850,1300,1500,1800,2500,5000,8000,15000]);
    }
}
