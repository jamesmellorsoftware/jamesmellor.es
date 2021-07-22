<?php

require("variables.php");

if (isset($_POST['retrieve_project']) && $_POST['retrieve_project']) {

    $project_to_retrieve = strtolower(trim($_POST['project_to_retrieve']));

    if (empty($project_to_retrieve)) return false;

    if (!isset(SECTION_PORTFOLIO_ROWS[$project_to_retrieve])) return false;

    $project = SECTION_PORTFOLIO_ROWS[$project_to_retrieve];

    echo json_encode($project);
    
}

?>