<?php

export GOOGLE_APPLICATION_CREDENTIALS="config.json"

if (isset($_POST['line1'])) {
    echo $_POST['line1'];
    
} else {
    echo "I borked it!";
}