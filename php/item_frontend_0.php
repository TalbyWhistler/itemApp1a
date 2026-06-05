<?php 
        // classes 
        $itemPageId="itemPage";
        $panelClass="itemInputPanel";
        $panelInputsClass="itemPanelInputs";
        $titleClass="itemTitle";
       // $cityButtonClass="itemCityButton";
       // $itemButtonClass="itemButton";
       // class="itemInfoTable"
       //id 
        $submitButtonId="itemSubmitButton";
        $titleBox=
        '
            <h1 class='.$titleClass.'>Item Keeper</h1>
        ';
        $cityInput=
        '
            <label for="itemCityInput">City:</label>
            </br>
            <input class='.$panelInputsClass.'name="itemCityInput" id="itemCityInput">
        ';
        $itemInput=
        '
            </br>
            <label for="itemItemInput">Item:</label>
            </br>
            <input class='.$panelInputsClass.' name="itemItemInput" id="itemItemInput">
        ';
        $costInput=
        '
            </br>
            <label for="itemPriceInput">Cost:</label>
            </br>
            <input class='.$panelInputsClass.'  name="itemPriceInput" id="itemPriceInput">

        ';
        $itemSubmitButton=
        '
            </br>
            <button onclick="handleItemSubmit()" id='.$submitButtonId.'>Submit</button>   
        ';
        $statusIndicator='<div id="itemStatusIndicatorBox"><p id="itemStatusIndicator">Ok</p></div>';
        $inputBox=
        '
            <div id="itemInputBox" class='.$panelClass.'>
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
        $fullOutput='<div id='.$itemPageId.'>'.
        $titleBox
        .$inputBox
        //.$scriptTestButton 
        .$scriptLink
        .$middleBand
        .$infoOutputArea.'</div>';

        echo $fullOutput;
?>