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
            <h2 class="fw-bold text-center">Buy Course</h2>
            <div class="h-line bg-dark"> </div>
            <form action="bookroom" method="post">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control shadow-none">
            </div>
            <div class="mb-4">
                <label class="form-label">Course Name</label>
                <select class="form-select" name="roomname">
                <option selected>select</option>
                <option value="1">Single Room</option>
                <option value="2">Double Room</option>
                <option value="3">Triple Room</option>
                <option value="3">Quad Room</option>
                <option value="3">King Room</option>
                </select>
                <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500;">Check-in</label>
                <input type="date" name="check_in" class="form-control shadow-none">
                </div>
                <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500;">Check-out</label>
                <input type="date" name="check_out" class="form-control shadow-none">
                </div>
                <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500;">Adult</label>
                <select name="adult" class="form-select">
                    <option selected>select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                </div>
                <div class="col-lg-2 mb-3">
                <label class="form-label" style="font-weight: 500;">Children</label>
                <select name="children" class="form-select">
                    <option selected>select</option>
                    <option value="0">None</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center mb-2">
                <button type="submit" class="btn btn-dark">Book Now</button>
            </div>
            </div>
            
            </form>
        </div>
        <?php include 'components/footer.php'?>
    </div>
</body>
</html>