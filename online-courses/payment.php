<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learn</title>
    <style>
        .main{
            background-color:whitesmoke;
        }
        .enroll{
            background-color:rgb(0, 153, 153);
        }
    </style>
</head>
    
<body>
    <div class="main">
        <?php include 'components/navbar.php'?>
        <div class="container mt-5">
            <h2 class="fw-bold text-center">Card Details</h2>
            <div class="h-line bg-dark"> </div>
            <form action="bookroom" method="post">
                <div class="mb-3">
                    <label class="form-label">Name on Card</label>
                    <input type="text" name="name" class="form-control shadow-none">
                </div>
                <div class="mb-3">
                    <label class="form-label">Card Number</label>
                    <input type="text" name="name" class="form-control shadow-none">
                </div>
                <div class="mb-3">
                    <label class="form-label">Expiration Date</label>
                    <input type="date" name="name" class="form-control shadow-none">
                </div>
                <div class="mb-3">
                    <label class="form-label">CVV</label>
                    <input type="password" name="name" class="form-control shadow-none">
                </div>
                <div class="d-flex align-items-center justify-content-center mb-8">
                    <button type="submit" class="btn btn-dark">Pay</button>
                </div>
            </form>
        </div>
        <?php include 'components/footer.php'?>
    </div>
</body>
</html>