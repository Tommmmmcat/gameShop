



<?php include '../view/header.php'; ?>
<main>
      <?php include '../view/navber2.php'; ?>
    <div class="main_div">
        <form method="get"><!--put all in the form with method get/post, it can send msg when submit -->
            <input type="hidden" name="action" value="enter_emp_hours"/>
            <select name="selected">
                <option>Select Employee</option>
                <?php
                // loop the options of selection
                foreach ($employees as $employee) {
                    //get the full name from database
                    $employee_name = $employee['firstName'] . ' ' . $employee['lastName'];
                    // get id and full name. format: id@full name
                    $employee_detail = $employee['id'].'@'.$employee_name;
                    ?>
                <!--option value is id@full name-->
                <option value='<?php echo $employee_detail ?>'><?php echo $employee_name; ?></option>
                <?php } ?>
            </select>
            <lable id="name_lable">Select a Friday</lable>
            <input type="date" id ="date" name="weedending"/>
            <input type="submit" value="SUBMIT"/>
        </form><!--ending of form-->
    </div>
</main>
<?php include '../view/footer.php'; ?>

