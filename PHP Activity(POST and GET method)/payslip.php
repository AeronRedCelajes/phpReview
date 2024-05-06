<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Payslip</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<style>
			body {
				background-color: #2d2d2d; /* Dark background color */
				color: #c8c8c8; /* Light text color */
				padding-top: 20px;
			}
			h2 {
				color: #f0ad4e; /* Yellow heading color */
			}
			.btn-primary {
				background-color: #337ab7; /* Blue button color */
				border-color: #337ab7; /* Blue button border color */
			}
			.btn-primary:hover {
				background-color: #286090; /* Darker blue on hover */
				border-color: #286090; /* Darker blue border on hover */
			}
			.form-group {
				margin-bottom: 20px; /* Space between form groups */
			}
		</style>
	</head>
<body>
    <?php
        $employee_id = $_POST['employee_id'];
        $last_name = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $middle_initial = $_POST['middle_initial'];
        $basic = $_POST['basic'];
        $incentive_pay = $_POST['incentive_pay'];
        $house_rent_allowance = $_POST['house_rent_allowance'];
        $meal_allowance = $_POST['meal_allowance'];
        $provident_fund = $_POST['provident_fund'];
        $tax = $_POST['tax'];
        $loan = $_POST['loan'];

        // Computations
        $total_earnings = $basic + $incentive_pay + $house_rent_allowance + $meal_allowance;
        $total_deductions = $provident_fund + $tax + $loan;
        $net_pay = $total_earnings - $total_deductions;
    ?>

	<div class="container">
        <form>
			<!-- Employee Payslip Data -->
			<h2><b>Employee's Payslip</b></h2>
            <div class="form-group">
                <label for="employee_id">Employee ID:</label>
                <input type="text" class="form-control" id="employee_id" name="employee_id" value="<?php echo $employee_id; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="employee_name">Employee Name:</label>
                <input type="text" class="form-control" id="employee_name" name="employee_name" value="<?php echo "$first_name $middle_initial $last_name"; ?>" readonly>
            </div>

			<hr>
			<br>

			<!-- Earnings Data -->
			<h2><b>Earnings</b></h2>
            <div class="form-group">
                <label for="basic">Basic:</label>
                <input type="text" class="form-control" id="basic" name="basic" value="<?php echo $basic; ?>" readonly>
            </div>
			<div class="form-group">
                <label for="incentive_pay">Incentive Pay:</label>
                <input type="text" class="form-control" id="incentive_pay" name="incentive_pay" value="<?php echo $incentive_pay; ?>" readonly>
            </div>
			<div class="form-group">
                <label for="house_rent_allowance">House Rent Allowance:</label>
                <input type="text" class="form-control" id="house_rent_allowance" name="house_rent_allowance" value="<?php echo $house_rent_allowance; ?>" readonly>
            </div>
			<div class="form-group">
                <label for="meal_allowance">Meal Allowance:</label>
                <input type="text" class="form-control" id="meal_allowance" name="meal_allowance" value="<?php echo $meal_allowance; ?>" readonly>
            </div>

			<hr>
			<br>

			<!-- Deductions Data -->
			<h2><b>Deductions</b></h2>
            <div class="form-group">
                <label for="provident_fund">Provident Fund:</label>
                <input type="text" class="form-control" id="provident_fund" name="provident_fund" value="<?php echo $provident_fund; ?>" readonly>
            </div>
			<div class="form-group">
                <label for="tax">Tax:</label>
                <input type="text" class="form-control" id="tax" name="tax" value="<?php echo $tax; ?>" readonly>
            </div>
			<div class="form-group">
                <label for="loan">Loan:</label>
                <input type="text" class="form-control" id="loan" name="loan" value="<?php echo $loan; ?>" readonly>
            </div>

			<hr>
			<br>

			<!-- Computations -->
			<h2><b>Computations</b></h2>
			<div class="form-group">
                <label for="total_earnings">Total Earnings:</label>
                <input type="text" class="form-control" id="total_earnings" name="total_earnings" value="<?php echo $total_earnings; ?>" readonly>
            </div>
			<div class="form-group">
                <label for="total_deductions">Total Deductions:</label>
                <input type="text" class="form-control" id="total_deductions" name="total_deductions" value="<?php echo $total_deductions; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="net_pay">NET PAY:</label>
                <input type="text" class="form-control" id="net_pay" name="net_pay" value="<?php echo $net_pay; ?>" readonly>
            </div>
			<a href="payroll.php" class="btn btn-primary">Back</a>
        </form>
    </div>
</body>
</html>