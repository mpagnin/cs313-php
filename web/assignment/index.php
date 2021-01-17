<?php
/*
 * Main controller for the CSE341-02 Assignments roots
 */

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

switch ($action) {
    case 'assignments':
        include 'views/assignments.php';
    break;
    default:
        include 'views/home.php';
    break;
}
?>