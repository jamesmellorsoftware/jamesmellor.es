<?php

require("variables.php");

if (isset($_POST['retrieve_command']) && $_POST['retrieve_command']) {

    $command_to_retrieve = strtolower(trim($_POST['command']));
    if (empty($command_to_retrieve)) return false;

    $command_language = $_POST['lang'];
    if (empty($command_language)) $command_language = "en";

    if (!defined("SECTION_TERMINAL_COMMAND_RESPONSE")) return false;

    if (!isset(SECTION_TERMINAL_COMMAND_RESPONSE[$command_language])) return false;

    if (!isset(SECTION_TERMINAL_COMMAND_RESPONSE[$command_language][$command_to_retrieve])) {
        $command_to_retrieve = "invalid";
    }

    $command_response = SECTION_TERMINAL_COMMAND_RESPONSE[$command_language][$command_to_retrieve];

    echo json_encode($command_response);
}

?>