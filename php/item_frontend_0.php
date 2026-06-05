<?php 
        $titleBox=
        '
            <h1>Item Keeper</h1>
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
        .$scriptTestButton 
        .$scriptLink
        .$middleBand
        .$infoOutputArea;

        echo $fullOutput;
?>