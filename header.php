<?php
    session_start();
    if (isset($_SESSION["SESS_FIRST_NAME"])) {
      // This session already exists, should already contain data
        echo "User ID:", $_SESSION["SESS_FIRST_NAME"], "<br />"
    }
?>