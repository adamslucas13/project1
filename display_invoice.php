<?php
$cust_fname = filter_input(INPUT_POST, 'cust_fname');
$cust_lname = filter_input(INPUT_POST, 'cust_lname');
$labor_costs = filter_input(INPUT_POST, 'labor_costs', FILTER_VALIDATE_FLOAT);
$parts_cost = filter_input(INPUT_POST, 'parts_cost', FILTER_VALIDATE_FLOAT);

if (empty($cust_fname)){
    $error_message = 'First name is a required field.';
} else if(empty($cust_lname)) {
    $error_message = 'Last name is a required field.';
} else if($labor_costs === FALSE) {
} else if(empty($labor_costs)) {
    $error_message = 'labor cost must be a valid number';
} else if($labor_cost <= 0) {
    $error_message = 'labor cost must be greater than zero';
} else if($parts_cost === FALSE) {
    $error_message = 'parts cost must be a valid number';
} else if($parts_cost <= 0) {
    $error_message = 'parts cost must be greater than zero';
} else {
    $error_message = '';
}

if($error_message != '') {
    include('index.php');
    exit();   
}
define('TAX_RATE',  .0925);
$parts_cost + $labor_cost = $subtotal;
$sales_tax = $subTotal * TAX_RATE;
$subTotal + $sales_tax = $total;
echo $total;







//$f_cust_name = $cust_fname.( )$cust_lname;
//Use the define() function to create a constant TAX_RATE equal to
//0925 or 9.25%. You will need variables called: $subTotal, $total, $sales_tax. The final section of 


//get the data from the form and filter input

//validate user input (not empty, not FALSE, and greater than zero)

//if loop to call index.php when error message is not empty

//do the math (use the define function to create a constant called TAX_RATE)

//format variables as strings for display as currency and concatenate 
//first and last names into one customer name

?>
<!DOCTYPE html>
<html>
<head>
    <title>Invoice Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Dooley's Automotive</h1>

        <label>Customer's Name:</label>
        <span><?php echo $f_cust_name; ?></span><br>

        <label>Labor Costs:</label>
        <span><?php echo $labor_costs; ?></span><br>

        <label>Parts Cost:</label>
        <span><?php echo $parts_costs; ?></span><br>

        <label>Subtotal:</label>
        <span><?php echo $subtotal; ?></span><br>
		
		<label>Sales Tax:</label>
        <span><?php echo $sales_tax; ?></span><br>

        <label>Total:</label>
        <span><?php echo $total; ?></span><br>
    </main>
</body>
</html>