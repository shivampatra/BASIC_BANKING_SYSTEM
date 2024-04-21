
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #8576FF;
            color: white;
        }
        footer {
            background-color: #1C1678;
            color: white;
        }
        .a{
          background-color:#7BC9FF;
        }
        td{
            text-align:center;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">TSF Bank of INDIA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="customers.php">All Customers</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <h2 class="text-center pt-4">Transaction History</h2>
    <br>
    <div class="table-responsive">
        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th class="text-center a">Serial No.</th>
                    <th class="text-center a">Sender</th>
                    <th class="text-center a">Receiver</th>
                    <th class="text-center a">Amount</th>
                    <th class="text-center a">Date & Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config.php';
                $sql = "SELECT * FROM transfers";
                $query = mysqli_query($conn, $sql);
                while ($rows = mysqli_fetch_assoc($query)) {
                ?>
                <tr>
                    <td class="py-2"><?php echo $rows['id']; ?></td>
                    <td class="py-2"><?php echo $rows['from_customer']; ?></td>
                    <td class="py-2"><?php echo $rows['to_customer']; ?></td>
                    <td class="py-2"><?php echo $rows['amount']; ?></td>
                    <td class="py-2"><?php echo $rows['transaction_time']; ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
<footer class="text-center mt-5 py-3">
    <p>&copy; 2024 <b>SHIVAM PATRA</b> <br>THE SPARKS FOUNDATION</p>
</footer>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
