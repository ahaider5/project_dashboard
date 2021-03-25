<?php

use App\Reports\UserReport;

require_once "UserReport.php";

$report = new UserReport();
$report->run()->render();
