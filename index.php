<?php
	if(!isset($cust_fname)){$cust_fname = '';}
	if(!isset($cust_lname)){$cust_lname = '';}
	if(!isset($labor_cost)){$labor_cost = '';}
    if(!isset($parts_cost)){$parts_cost = '';}

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
        <?php if (!empty($error_message)){?>
            <p class="error"><?php echo $error_message; ?></p>
        <?php } //end if ?>
        <form action="display_invoice.php" method="post">

            <div id="data">
                <label>Customer First Name:</label>
                <input type="text" name="cust_fname">
				<value="<?php echo htmlspecialchars($cust_fname);?>"><br>
				
				<label>Customer Last Name:</label>
                <input type="text" name="cust_lname">
				<value="<?php echo htmlspecialchars($cust_lname);?>"><br>

				<label>Labor Costs:</label>
                <input type="text" name="labor_costs"
				value="<?php echo htmlspecialchars($labor_costs);?>"><br>

                <label>Parts Cost:</label>
                <input type="text" name="parts_cost"
                value="<?php echo htmlspecialchars($parts_cost);?>"><br>

            </div>

            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Display Invoice"><br>
            </div>

        </form>
    </main>
</body>
</html>