<?php
if ($_GET['randomId'] != "debJ3G4cDU4Whb404o450R6MQX7zYWbtsqwf2R_K2Aq187c8Am1gNw53412bxcr4") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
