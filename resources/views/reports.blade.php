@extends('voyager::master')

@section('content')
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<div class="page-content">
    <h1>
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

            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Open modal
            </button>

            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Modal Heading</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            Modal body..
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </h1>
</div>
@endsection
