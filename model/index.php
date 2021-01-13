<?php

require '../model/database.php';
require '../model/employees_db.php';
require '../model/timesheet_db.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'Select_employee';
    }
}

switch ($action) {
    case 'Select_employee':
        $employees = select_employees();
        include '../view/main_select.php';
        break;
    case 'enter_emp_hours':
        $employee_detail = $_GET['selected'];
        include '../view/main_enter.php';
        break;
    case 'save_emp_hours':
        $empId = $_GET['id'];
        $jobsheet = $_GET['jobsheet'];
        $weedending = $_GET['weedending'];
        $mon = $_GET['Mon'];
        $tues = $_GET['Tues'];
        $wed = $_GET['Wed'];
        $thur = $_GET['Thur'];
        $fri = $_GET['Fri'];
        $sat = $_GET['Sat'];
        $sun = $_GET['Sun'];
        save_timesheet($empId, $jobsheet, $weedending, $mon, $tues, $wed, $thur, $fri, $sat, $sun);
        break;
}




