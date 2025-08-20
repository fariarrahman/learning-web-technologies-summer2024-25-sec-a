<!DOCTYPE html>
<html>
<head>
    <title>VAT Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            padding: 30px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
            margin: auto;
            box-shadow: 0 0 10px gray;
        }
        h2 {
            text-align: center;
        }
        input {
            width: 95%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #aaa;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #218838;
        }
        .result {
            margin-top: 15px;
            padding: 10px;
            background: #e6ffe6;
            border: 1px solid #b3ffb3;
            border-radius: 5px;
        }
    </style>
    <script>
        function validateForm() {
            let amount = document.forms["vatForm"]["amount"].value;
            if (amount == "") {
                alert("Please enter an amount!");
                return false;
            }
            if (isNaN(amount)) {
                alert("Amount must be a number!");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>VAT Calculator (15%)</h2>
        <form name="vatForm" method="post" onsubmit="return validateForm();">
            <label>Enter Amount:</label><br>
            <input type="text" name="amount" placeholder="Enter amount"><br>
            <button type="submit" name="calculate">Calculate VAT</button>
        </form>

        <?php
        if (isset($_POST['calculate'])) {
            $amount = $_POST['amount'];

            if (is_numeric($amount)) {
                $vat = $amount * 0.15;
                $total = $amount + $vat;

                echo "<div class='result'>";
                echo "Amount: $amount <br>";
                echo "VAT (15%): $vat <br>";
                echo "Total (Amount + VAT): $total";
                echo "</div>";
            } else {
                echo "<p style='color:red;'>Please enter a valid number!</p>";
            }
        }
        ?>
    </div>
</body>
</html>
