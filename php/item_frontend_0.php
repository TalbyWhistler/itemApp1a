<?php 
        $titleBox=
        '
            <h1>Item Keeper</h1>
        ';
        $cityInput=
        '
            <label for="itemCityInput">City:</label>
            </br>
            <input name="itemCityInput" id="itemCityInput">
        ';
        $itemInput=
        '
            </br>
            <label for="itemItemInput">Item:</label>
            </br>
            <input name="itemItemInput" id="itemItemInput">
        ';
        $costInput=
        '
            </br>
            <label for="itemPriceInput">Cost:</label>
            </br>
            <input name="itemPriceInput" id="itemPriceInput">

        ';
        $itemSubmitButton=
        '
            </br>
            <button onclick="handleItemSubmit()" id="itemSubmitButton">Submit</button>   
        ';
        $statusIndicator='<div id="itemStatusIndicatorBox"><p id="itemStatusIndicator">Ok</p></div>';
        $inputBox=
        '
            <div id="itemInputBox">
            '.$cityInput.$itemInput.$costInput.$itemSubmitButton.$statusIndicator.'
            </div>
        ';
        $scriptLink='<script src="js/item_scripts_0.js"></script>';
        $scriptTestButton='<button onclick="testFunction0()">Test Function 0</button>';
        $cityButtonArea='<div id="cityButtonArea"></div>';
        $itemButtonArea='<div id="itemButtonArea"></div>';
        $middleBand='
        <div id="itemMiddleBand">
            '.$cityButtonArea.$itemButtonArea.'
        </div>';
        $infoOutputArea='<div id="itemInfoOutputArea"></div>';
        $fullOutput=
        $titleBox
        .$inputBox
        //.$scriptTestButton 
        .$scriptLink
        .$middleBand
        .$infoOutputArea;

        echo $fullOutput;
?>