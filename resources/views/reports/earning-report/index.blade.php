@extends('voyager::master')

@section('content')
<div class="page-content">

    <?php
    use \koolreport\widgets\google\ColumnChart;
?>
<html>
    <head>
        <title>Earning Report</title>
    </head>
    <body>
    <body>
        <?php
        ColumnChart::create(array(
            "dataSource"=>DB::table('users')
                            ->select('age', DB::raw('COUNT(*) as "Total Users"'))
                            ->groupBy('age')
                            // ->havingRaw('SUM(price) > ?', [2500])
                            ->get()
        ));
        ?>
    </body>
</html>

</div>
@endsection
