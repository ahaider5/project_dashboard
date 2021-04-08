@extends('voyager::master')

@section('content')
<div class="container-fluid h-100">
    <h1>Available Reports</h1>
    <hr>
    <ul class="list-group">
        <a href="/admin/reports/user-reports" class="list-group-item list-group-item-action">
            <li class="list-group-item d-flex justify-content-between align-items-center custom-li">
                Users
                <span class="badge badge-primary badge-pill">1</span>
            </li>
        </a>
        <a href="/admin/reports/growth-reports" class="list-group-item list-group-item-action">
            <li class="list-group-item d-flex justify-content-between align-items-center custom-li">
                Growth
                <span class="badge badge-primary badge-pill">1</span>
            </li>
        </a>
        <a href="/admin/reports/earning-reports" class="list-group-item list-group-item-action">
            <li class="list-group-item d-flex justify-content-between align-items-center custom-li">
                Earning
                <span class="badge badge-primary badge-pill">1</span>
            </li>
        </a>
    </ul>
</div>
@endsection
