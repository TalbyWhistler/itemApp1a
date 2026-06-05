<?php 
    include 'item_db_operations.php';
    $rawInput=file_get_contents('php://input');
    $jsonInput=json_decode($rawInput,true);
    $function=$jsonInput["function"];
    $outputMessage='';

    switch($function)
        {
            case("testFunction"):
            {
                
                $functionParams=$jsonInput["params"];
                $testNumber=$functionParams["testNumber"];
                $outputMessage='Test function control test number is ' .$testNumber;
                break;
            }
            case("fetchCities"):
            {
                $outputMessage=fetchCities();
                break;
            }
            case("fetchItems"):
                $outputMessage='Fetch items control has fired';
                $outputMessage=fetchItems();
                break;
            case("fetchCityItemInfo"):
                $functionParams=$jsonInput["params"];
                $city=$functionParams["city"];
                $outputMessage=fetchItemInfoByCity($city);             
                break;
            case("fetchItemItemInfo"):
                $functionParams=$jsonInput["params"];
                $item=$functionParams["item"];
                $outputMessage=fetchItemInfoByItem($item);
                break;
        }
    


    echo json_encode($outputMessage);


?>