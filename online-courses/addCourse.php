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
        .h-line{
        width: 130px;
        margin: 0 auto;
        height: 1.7px;
        }
    </style>
</head>
    
<body>
    <div class="main">
        <?php include 'components/navbar.php'?>
        <div class="container mt-5">
            <h2 class="fw-bold text-center">Add Course</h2>
            <div class="h-line bg-dark"> </div>
            <form action="bookroom" method="post">
                <div class="mb-3">
                    <label class="form-label">Course Name</label>
                    <input type="text" name="name" class="form-control shadow-none">
                </div>
                <div class="mb-3">
                    <label class="form-label">University Name</label>
                    <input type="text" name="name" class="form-control shadow-none">
                </div>
                <div class="mb-3">
                    <label class="form-label">Rating</label>
                    <input type="text" name="name" class="form-control shadow-none">
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="text" name="name" class="form-control shadow-none">
                </div>
                <div class="d-flex align-items-center justify-content-center mb-8">
                    <button type="submit" class="btn btn-dark">Add</button>
                </div>
            </form>
        </div>
        <?php include 'components/footer.php'?>
    </div>
</body>
</html>