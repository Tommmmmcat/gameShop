



<?php
include '../view/header.php';
require '../model/database.php';
require '../model/employees_db.php';
$employees = select_employees();
?>
<main>
     <?php include '../view/navber2.php'; ?>
    <div class="main_div">
        <form method="get" action="../view/main_view.php">
            <input type="hidden" name="action" value="view_timesheets"/>
            <select name="selected">
                <option>Select Employee</option>
                <?php
                // loop the options of selection
                foreach ($employees as $employee) {
                    //get the full name from database
                    $employee_name = $employee['firstName'] . ' ' . $employee['lastName'];
                    // get id and full name. format: id@full name
                    $employee_detail = $employee['id'] . '@' . $employee_name;
                    ?>
                    <!--option value is id@full name-->
                    <option value='<?php echo $employee['id']; ?>'><?php echo $employee_name; ?></option>
                <?php } ?>
            </select>
            <input type="submit" value="SUBMIT"/>
        </form><!--ending of form-->
    </div>
</main>
<?php include '../view/footer.php'; ?>

