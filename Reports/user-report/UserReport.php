<?php
namespace App\Reports;

// require_once "koolreport/core/autoload.php";
// require_once "../../../load.koolreport.php";

class UserReport extends \koolreport\KoolReport
{
    use \koolreport\laravel\Friendship;
    use \koolreport\clients\Bootstrap;
    // By adding above statement, you have claim the friendship between two frameworks
    // As a result, this report will be able to accessed all databases of Laravel
    // There are no need to define the settings() function anymore
    // while you can do so if you have other datasources rather than those
    // defined in Laravel.

    /* function settings()
    {
        return array(
            "dataSources"=>array(
                "automaker"=>array(
                    "connectionString"=>"mysql:host=localhost;dbname=project_dashboard",
                    "username"=>"root",
                    "password"=>"",
                    "charset"=>"utf8"
                ),
            )
        );
    } */


    function setup()
    {
        // Let say, you have "sale_database" is defined in Laravel's database settings.
        // Now you can use that database without any futher setitngs.
        $this->src("users_data")
        ->query("SELECT name, email, gender, age, location, device_used FROM users")
        ->pipe($this->dataStore("users"));
    }
}
