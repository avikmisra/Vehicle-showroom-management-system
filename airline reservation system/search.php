<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">-->
        <link rel="stylesheet" href="src/css/font-awesome.min.css">
        <link rel="stylesheet" href="src/css/bootstrap.css">
        <link rel="stylesheet" href="src/css/style.css">
        <title>Airline Reservation System</title>
    </head>

    <body>
    <div id="search-section" style="background-color:#ececec">
        <div class="container py-4">
            <div class="card rounded z-depth-5">
                <div class="card-header" style="background-color:white">
                    <h6 class="p-1 text-left">book domestic & international flight</h6>
                </div>
                <div class="card-body">
                    <form action="search_result.php" method="POST" class="d-md-flex flex-row">
                        <div class="form-row p-3">
                        <input type="text" name="from" id="from" placeholder="from" class="border-top-0 border-left-0 border-right-0 border-secondary">
                        </div>
                        <div class="form-row p-3">
                        <input type="text" name="to" id="to" placeholder="to" class="border-top-0 border-left-0 border-right-0 border-secondary">
                        </div>
                        <div class="form-row p-3">
                        <input type="Date" name="dept" id="dept" placeholder="Departure" class="border-top-0 border-left-0 border-right-0 border-secondary">
                        </div>
                        <div class="form-row p-3">
                        <input type="Date" name="return" id="return" placeholder="Return" class="border-top-0 border-left-0 border-right-0 border-secondary">
                        </div>
                        <div class="form-row p-3 ">
                        <input type="number" name="passanger" id="passenger" placeholder="passenger|Class" class="border-top-0 border-left-0 border-right-0 border-secondary">
                        </div>
                        <div class="form-row p-3">
                        <input type="submit" class="btn btn-danger" name="search" id="search" value="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="src/js/jquery.min.js"></script>
        <script src="src/js/popper.min.js"></script>
        <script src="src/js/bootstrap.min.js"></script>
        <script src="src/js/app2.js"></script>
    </body>
</html>