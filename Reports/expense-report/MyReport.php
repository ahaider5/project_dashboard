<?php
//Step 1: Load KoolReport
require_once "../../../load.koolreport.php";

//Step 2: Creating Report class
class MyReport extends \koolreport\KoolReport
{
    function settings()
    {
        return array(
            "dataSources"=>array(
                "automaker"=>array(
                    "connectionString"=>"mysql:host=localhost;dbname=automaker",
                    "username"=>"root",
                    "password"=>"",
                    "charset"=>"utf8"
                ),
            )
        );
    }
    protected function setup()
    {
        $this->src('automaker')
        ->query("SELECT employeeNumber, firstName,lastName,jobTitle, extension from employees")
        ->pipe($this->dataStore("employees"));
    }

}
