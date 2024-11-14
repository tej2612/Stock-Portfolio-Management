<?php
    include("connection.php");
    session_start();
    if (isset($_SESSION['email'])) {
        $uid = $_SESSION['user_id'];
<<<<<<< HEAD
    } else {
=======
    } 
    else {
>>>>>>> 0ea6c9653d7026f9276a0d5f28c07599290dac4d
        // Redirect the user to the login page if not logged in
        header("Location: dash.php");
        exit();
    }
?>

<<<<<<< HEAD
=======

>>>>>>> 0ea6c9653d7026f9276a0d5f28c07599290dac4d
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Add Transaction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
          crossorigin="anonymous">
    <link rel="stylesheet" href="../static/style.css">
    <link rel="stylesheet" href="../static/font-awesome/css/font-awesome.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        h1 {
            color: rgb(255, 204, 0);
        }
        a:hover {
            color: cyan;
        }
        form {
            color: #4ed3ff;
        }
        .form-container {
            margin: auto;
            background: white;
            padding: 2.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-group label {
            font-weight: bold;
        }
        select, input {
            width: 100%;
            padding: 0.5rem;
            margin-top: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .submit {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 0.5rem 1.5rem;
            border-radius: 5px;
            font-size: 1rem;
        }
        .submit:hover {
            background-color: #0056b3;
        }
        .back-link a {
            color: #007bff;
            text-decoration: none;
        }
        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
                    <center><h1>Add Transaction</h1></center>
                    <form method="POST" action="add_t.php">
                        <div class="form-group">
                            <label for="symbol">Symbol</label>
                            <select name="symbol" id="symbol" onchange="getSymbolCurrentPrice()">
                                <?php
                                    $sql = "SELECT * FROM company";
                                    $result = mysqli_query($conn, $sql);
                                    if ($result) {
                                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                            $companyName = $row['STOCK_ID'];
                                            echo "<option value=\"$companyName\">$companyName</option>";
                                        }
                                        mysqli_free_result($result);
                                    } else {
                                        echo "Error: " . mysqli_error($conn);
                                    }
                                    mysqli_close($conn);
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Current Price: <span id="currentPrice"></span></label>
                        </div>

                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="number" name="quantity" required>
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" id="price" class="price-input" 
                                   oninput="this.value = this.value.replace(/[^0-9.]/g, '')" required>
                        </div>

                        <center><button type="submit" class="submit" name="sub_t">Submit</button></center>
                    </form>

                    <div class="back-link mt-4">
                        <center><h3><a href="dash.php">Go back!</a></h3></center>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function getSymbolCurrentPrice() {
            var symbol = document.getElementById('symbol').value;

            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'get_current_price.php?symbol=' + symbol, true);

            xhr.onload = function () {
                if (xhr.status == 200) {
                    var currentPriceSpan = document.getElementById('currentPrice');
                    currentPriceSpan.textContent = xhr.responseText;
                    currentPriceSpan.style.color = 'black';
                } else {
                    console.error('Request failed. Status: ' + xhr.status);
                }
            };

            xhr.send();
        }
    </script>

</body>
</html>
=======
    <title>Add transaction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../static/style.css">
    <link rel="stylesheet" href="../static/font-awesome/css/font-awesome.min.css">
</head>
<style>
    h1{
        color:rgb(255, 204, 0);
    }
    a:hover{
        color:cyan;
    }
    select,input{
        float:right;
    }
    form{
        color:rgb(78, 211, 255);
    }
</style>
<body>
    <center><h1>Add transaction</h1></center>
    <main class="container my-5" style="width: 50%; height:fit-content; float: center; justify-content: center; text-align: left; margin: 25%; padding: 2.5rem;"><h2>
        <form method="POST" action='add_t.php'>
            Symbol
            <select name="symbol" id="symbol" onchange="getSymbolCurrentPrice()">
                <?php
                    $sql = "SELECT * FROM company";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            $companyName = $row['STOCK_ID'];
                            echo "<option value=\"$companyName\">$companyName</option>";
                        }
                
                        // Free the result set
                        mysqli_free_result($result);
                    } else {
                        echo "Error: " . mysqli_error($conn);
                    }
                
                    // Close the database connection
                    mysqli_close($conn);
                ?>
            </select>
            <br><br>
                Current Price: <span id="currentPrice"></span>
                <script>
    function getSymbolCurrentPrice() {
        var symbol = document.getElementById('symbol').value;

        // Make an AJAX request to get the current price
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'get_current_price.php?symbol=' + symbol, true);

        xhr.onload = function () {
            if (xhr.status == 200) {
                var currentPriceSpan = document.getElementById('currentPrice');
                currentPriceSpan.textContent = xhr.responseText;
                currentPriceSpan.style.color = 'black';
                currentPriceSpan.style.textAlign = 'right';
            } else {
                console.error('Request failed. Status: ' + xhr.status);
            }
        };

        xhr.send();
    }
</script>
            <br><br>
            Quantity 
            <input type='number' name='quantity' />
            <br><br>
            Price <input type="text" name="price" id="price" class="price-input" oninput="this.value = this.value.replace(/[^0-9.]/g, '')" required>
            <br><br>
            <center><input type="submit" id="button2" class="submit" name="sub_t" required></center>
        </form>
    </main>
         <center><h3><a href="#" onclick="window.location.href='dash.php'">Go back!</a></h3></center>
    
</body>
</html>
>>>>>>> 0ea6c9653d7026f9276a0d5f28c07599290dac4d
