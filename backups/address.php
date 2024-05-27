<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f7f7f7;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .form-group label {
            color: #555;
        }
        .form-control {
            border-radius: 4px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
        .error {
            color: #d9534f;
            font-size: 0.875em;
        }
    </style>
</head>
<body>
<div class="container">
    <h2 class="mt-5">Enter Your Address</h2>
    <form action="process_address.php" method="POST" onsubmit="return validateForm()">
        <!-- Add a hidden input field for user ID -->
        <input type="hidden" name="user_id" value="1"> <!-- Assuming logged in user has ID 1. Modify this based on your login system. -->
        <div class="form-group">
            <label for="street">Street</label>
            <input type="text" class="form-control" id="street" name="street" required>
            <span class="error" id="street_error"></span> <!-- Error message for street -->
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="city" required>
            <span class="error" id="city_error"></span> <!-- Error message for city -->
        </div>
        <div class="form-group">
            <label for="state">State</label>
            <input type="text" class="form-control" id="state" name="state">
        </div>
        <div class="form-group">
            <label for="postal_code">Postal Code</label>
            <input type="text" class="form-control" id="postal_code" name="postal_code" required>
            <span class="error" id="postal_code_error"></span> <!-- Error message for postal code -->
        </div>
        <div class="form-group">
            <label for="country">Country</label>
            <select class="form-control" id="country" name="country" required>
                <option value="">Select your country</option>
                <option value="USA">United States</option>
                <option value="UK">United Kingdom</option>
                <option value="CA">Canada</option>
                <option value="PHI">Philippines</option>
            </select>
            <span class="error" id="country_error"></span> <!-- Error message for country -->
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="../products/despay.php" class="btn btn-danger mr-3" style="border-color: black;">Cancel</a>
    </form>
</div>

<script>
    function validateForm() {
        var street = document.getElementById('street').value;
        var city = document.getElementById('city').value;
        var postalCode = document.getElementById('postal_code').value;
        var country = document.getElementById('country').value;

        var streetError = document.getElementById('street_error');
        var cityError = document.getElementById('city_error');
        var postalCodeError = document.getElementById('postal_code_error');
        var countryError = document.getElementById('country_error');

        var isValid = true;

        // Validation for Street
        if (street.trim() === '') {
            streetError.textContent = 'Please enter your street';
            isValid = false;
        } else {
            streetError.textContent = '';
        }

        // Validation for City
        if (city.trim() === '') {
            cityError.textContent = 'Please enter your city';
            isValid = false;
        } else {
            cityError.textContent = '';
        }

        // Validation for Postal Code
        if (postalCode.trim() === '') {
            postalCodeError.textContent = 'Please enter your postal code';
            isValid = false;
        } else {
            postalCodeError.textContent = '';
        }

        // Validation for Country
        if (country.trim() === '') {
            countryError.textContent = 'Please select your country';
            isValid = false;
        } else {
            countryError.textContent = '';
        }

        return isValid;
    }
</script>
</body>
</html>
