@extends('voyager::master')

@section('content')
<div class="page-content">
    <h1>
        <div class="container-fluid">

        </div>
        <div class="container">
            <h1>Reports</h1>
            <hr>
            <ul class="list-group">
                <a href="/admin/reports/user-report" class="list-group-item list-group-item-action">
                    <li class="list-group-item d-flex justify-content-between align-items-center custom-li">
                        Users
                        <span class="badge badge-primary badge-pill">1</span>
                    </li>
                </a>
                <a href="/admin/reports/growth-report" class="list-group-item list-group-item-action">
                    <li class="list-group-item d-flex justify-content-between align-items-center custom-li">
                        Growth
                        <span class="badge badge-primary badge-pill">1</span>
                    </li>
                </a>
                <a href="/admin/reports/earning-report" class="list-group-item list-group-item-action">
                    <li class="list-group-item d-flex justify-content-between align-items-center custom-li">
                        Earning
                        <span class="badge badge-primary badge-pill">1</span>
                    </li>
                </a>
            </ul>
            {{-- <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some example text. Some example text.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div> --}}
        </div>
    </h1>
</div>
@endsection
