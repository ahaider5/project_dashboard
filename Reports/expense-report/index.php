<?php
require_once "UserReport.php";

$salesByCustomer = new UserReport;
$salesByCustomer->run()->render();