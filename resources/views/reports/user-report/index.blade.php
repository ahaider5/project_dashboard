@extends('voyager::master')

@section('content')
@php
use Illuminate\Support\Facades\DB;
@endphp

<div class="container-fluid">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>User Analytics</h1>
            <p>Graphs and Reports</p>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-3 col-sm-3">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="info">
                                        @php
                                        echo DB::table('users')->count();
                                        @endphp
                                    </h3>
                                    <h6>Total Users</h6>
                                </div>
                                <div>
                                    <i class="icon-user info font-large-2 float-right"></i>
                                </div>
                            </div>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%"
                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="warning">$
                                        @php
                                        echo DB::table('fundraiser')->sum('recommended_donations');
                                        @endphp
                                    </h3>
                                    <h6>Total Earning</h6>
                                </div>
                                <div>
                                    <i class="icon-pie-chart warning font-large-2 float-right"></i>
                                </div>
                            </div>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%"
                                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="success">146</h3>
                                    <h6>New Users</h6>
                                </div>
                                <div>
                                    <i class="icon-user-follow success font-large-2 float-right"></i>
                                </div>
                            </div>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 45%"
                                    aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="danger">85 %</h3>
                                    <h6>Paying Users</h6>
                                </div>
                                <div>
                                    <i class="icon-heart danger font-large-2 float-right"></i>
                                </div>
                            </div>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%"
                                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6 col-sm-6">
                <div id="ageChart" class="my-custom-chart"></div>
            </div>
            <div class="col-xs-6 col-sm-6">
                <div id="genderChart" class="my-custom-chart"></div>
            </div>
            <!-- Add clearfix for only the required viewport -->
            <div class="clearfix visible-xs"></div>
            <div class="col-xs-6 col-sm-6">
                <div id="locationChart" class="my-custom-chart"></div>
            </div>
            <div class="col-xs-6 col-sm-6">
                <div id="deviceChart" class="my-custom-chart"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div id="wdr-component"></div>
        </div>
    </div>
    <script>
        var base = window.location.origin;
            var path = {!! json_encode(url('/')) !!}

            var pivot = new WebDataRocks({
                container: "#wdr-component",
                toolbar: true,
                report: {
                    dataSource: {
                        filename: path+'/rpData/users.json'
                        // filename: path+'/rpData/users.json'
                    }
                }
            });
    </script>
    {{-- data: "{{ url('/admin/reports/get-users') }}" --}}
    <!-- Charting library -->
    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>

    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>

    <!-- Charting library -->
    <script src="https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>
    <!-- Your application script -->
    <script>
        const chart = new Chartisan({
            el: '#ageChart',
            url: "@chart('user_age_pie_chart')",
            hooks: new ChartisanHooks()
                .title('Age')
                .datasets('doughnut')
                .pieColors(),
        })

        const chart2 = new Chartisan({
            el: '#genderChart',
            url: "@chart('user_gender_pie_chart')",
            hooks: new ChartisanHooks()
                .title('Gender')
                .datasets('doughnut')
                .pieColors(),
                // .colors(['#4299E1','#FE0045'])
                /* .title('Total Fundraisers 2020')
                .datasets('line')
                .axis(true).legend().tooltip(), */
        });

        const chart3 = new Chartisan({
            el: '#locationChart',
            url: "@chart('user_location_pie_chart')",
            hooks: new ChartisanHooks()
                .title('Location')
                .datasets('doughnut')
                .pieColors(),
                // .colors(['#4299E1','#FE0045','#C07EF1']),
                /* .title('Earnings - 10 years')
                .colors(['#4299E1','#FE0045','#C07EF1','#67C560','#ECC94B'])
                .datasets([{ type: 'line', fill: false }, 'bar'])
                .datasets('bar')
                .axis(true).legend().tooltip(), */
        });

        const chart4 = new Chartisan({
            el: '#deviceChart',
            url: "@chart('user_device_pie_chart')",
            hooks: new ChartisanHooks()
                .title('Device')
                .datasets('doughnut')
                .pieColors(),
                // .colors(['#4299E1','#FE0045','#C07EF1']),
                /* .title('Earnings - 10 years')
                .colors(['#4299E1','#FE0045','#C07EF1','#67C560','#ECC94B'])
                .datasets([{ type: 'line', fill: false }, 'bar'])
                .datasets('bar')
                .axis(true).legend().tooltip(), */
        });
    </script>
</div>
@endsection
