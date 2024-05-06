<html>
	<head>
		<title>Payroll</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
		<style>
			body {
				background-color: #2d2d2d; /* Dark background color */
				color: #c8c8c8; /* Light text color */
			}
			h2 {
				color: #f0ad4e; /* Yellow heading color */
			}
			.form-group label {
				color: #f0ad4e; /* Yellow label color */
			}
			.btn-primary {
				background-color: #337ab7; /* Blue button color */
				border-color: #337ab7; /* Blue button border color */
			}
			.btn-primary:hover {
				background-color: #286090; /* Darker blue on hover */
				border-color: #286090; /* Darker blue border on hover */
			}
    	</style>
	</head>
<body>
    <div class="container">
        <h2><b>Employee's Payroll</b></h2>
        <form method="POST" action="payslip.php">
            <div class="form-group">
                <label for="employee_id">Employee ID</label>
                <input type="text" class="form-control" id="employee_id" name="employee_id" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="middle_initial">MI</label>
                <input type="text" class="form-control" id="middle_initial" name="middle_initial" required>
            </div>
            <div class="form-group">
                <label for="basic">Basic:</label>
                <input type="number" class="form-control" id="basic" name="basic" required>
            </div>
            <div class="form-group">
                <label for="incentive_pay">Incentive pay:</label>
                <input type="number" class="form-control" id="incentive_pay" name="incentive_pay" required>
            </div>
            <div class="form-group">
                <label for="house_rent_allowance">House Rent Allowance:</label>
                <input type="number" class="form-control" id="house_rent_allowance" name="house_rent_allowance" required>
            </div>
            <div class="form-group">
                <label for="meal_allowance">Meal Allowance:</label>
                <input type="number" class="form-control" id="meal_allowance" name="meal_allowance" required>
            </div>
            <div class="form-group">
                <label for="provident_fund">Provident Fund:</label>
                <input type="number" class="form-control" id="provident_fund" name="provident_fund" required>
            </div>
            <div class="form-group">
                <label for="tax">Tax:</label>
                <input type="number" class="form-control" id="tax" name="tax" required>
            </div>
            <div class="form-group">
                <label for="loan">Loan:</label>
                <input type="number" class="form-control" id="loan" name="loan" required>
            </div>
            <button type="submit" class="btn btn-primary">View Payslip</button>
        </form>
    </div>
</body>
</html>