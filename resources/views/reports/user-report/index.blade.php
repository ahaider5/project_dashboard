@extends('voyager::master')

@section('content')
<div class="page-content">

    @php
    use \koolreport\widgets\google\ColumnChart;
    use Illuminate\Support\Facades\DB;
    @endphp
    <html>

    <head>
        <title>User Report</title>
    </head>

    <body>
        @php
        ColumnChart::create(array(
        "dataSource"=>DB::table('users')
        ->select('age', DB::raw('COUNT(*) as "Total Users"'))
        ->groupBy('age')
        // ->havingRaw('SUM(age) > ?', [2500])
        ->get()
        ));
        @endphp
        <div id="wdr-component"></div>
        <script>
            var base = window.location.origin;
            var path = {!! json_encode(url('/')) !!}

            var pivot = new WebDataRocks({
                container: "#wdr-component",
                toolbar: true,
                report: {
                    dataSource: {
                        filename: path+'/rpData/users.json'
                    }
                }
            });
        </script>
    </body>

    </html>

</div>
@endsection
