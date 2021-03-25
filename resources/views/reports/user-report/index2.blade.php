@extends('voyager::master')

@section('content')
<div class="page-content">

    <?php
    // use \koolreport\datagrid\DataTables;
    ?>
    <html>

    <head>
        <title>User Report</title>
    </head>

    <body>

        <body>
            <?php
        // use \koolreport\datagrid\DataTables;


        DataTables::create(array(
        "dataSource"=>$this->dataStore("employees"),
        "themeBase"=>"bs4", // Optional option to work with Bootsrap 4
        "cssClass"=>array(
            "table"=>"table table-striped table-bordered"
        )
    ));
        ?>
        </body>

    </html>

</div>
@endsection
