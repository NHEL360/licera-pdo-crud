<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$id = $link = $name = $description = $price = $added = $updated = "";
$id_err = $link_err = $name_err = $description_err = $price_err = $added_err = $updated_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["id"])) {
        
        $input_id = trim($_POST["id"]);
        if (empty($input_id)) {
            $id_err = "Please enter the id";
        } elseif (!ctype_digit($input_id)) {
            $id_err = "Please enter a positive integer value.";
        } else {
            $id = $input_id;
        }
    } else {
        $id_err = "ID is required";
    }

    if (isset($_POST["link"])) {
        $input_link = trim($_POST["link"]);
        if (empty($input_link)) {
            $link_err = "Please enter a link.";
        } elseif (!filter_var($input_link, FILTER_VALIDATE_URL)) {
            $link_err = "Please enter a valid URL.";
        } else {
            $link = $input_link;
        }
    } else {
        $link_err = "Link is required";
    }

    if (isset($_POST["name"])) {
        $input_name = trim($_POST["name"]);
        if (empty($input_name)) {
            $name_err = "Please enter a name.";
        } elseif (!preg_match("/^[a-zA-Z\s]+$/", $input_name)) {
            $name_err = "Please enter a valid name.";
        } else {
            $name = $input_name;
        }
    } else {
        $name_err = "Name is required";
    }

    if (isset($_POST["description"])) {
        $input_description = trim($_POST["description"]);
        if (empty($input_description)) {
            $description_err = "Please enter a description.";
        } else {
            $description = $input_description;
        }
    } else {
        $description_err = "Description is required";
    }

    if (isset($_POST["price"])) {
        $input_price = trim($_POST["price"]);
        if (empty($input_price)) {
            $price_err = "Please enter a price.";
        } elseif (!preg_match("/^\d+(\.\d+)?$/", $input_price)) {
            $price_err = "Please enter a valid price.";
        } else {
            $price = $input_price;
        }
    } else {
        $price_err = "Price is required";
    }

    if (isset($_POST["added"])) {
        $input_added = trim($_POST["added"]);
        if (empty($input_added)) {
            $added_err = "Please enter a date-added.";
        } else {
            $added = $input_added;
        }
    } else {
        $added_err = "Date added is required";
    }

    if (isset($_POST["updated"])) {
        $input_updated = trim($_POST["updated"]);
        if (empty($input_updated)) {
            $updated_err = "Please enter an updated date.";
        } else {
            $updated = $input_updated;
        }
    } else {
        $updated_err = "Updated date is required";
    }

    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($salary_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO employees (name, address, salary) VALUES (:name, :address, :salary)";
 
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":name", $param_name);
            $stmt->bindParam(":address", $param_address);
            $stmt->bindParam(":salary", $param_salary);
            
            // Set parameters
            $param_name = $name;
            $param_address = $address;
            $param_salary = $salary;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
    }
    
    // Close connection
    unset($pdo);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control <?php echo (!empty($address_err)) ? 'is-invalid' : ''; ?>"><?php echo $address; ?></textarea>
                            <span class="invalid-feedback"><?php echo $address_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Salary</label>
                            <input type="text" name="salary" class="form-control <?php echo (!empty($salary_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $salary; ?>">
                            <span class="invalid-feedback"><?php echo $salary_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>