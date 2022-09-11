<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Discuss - Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>

    <div class="container my-4" style="width:40%">
        <h2>Contact Us</h2>
        <form>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@gmail.com">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Tell About Yourself </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Elaborate Your Concern</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button class="btn btn-success">Submit</button>
        </form>
    </div>


    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-success">Our Policies</h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Terms of use </a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Privacy Policy</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Safety Guidelines</a>
                    </p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-success">Important Links</h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">About Us </a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Affiliations</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Reviews</a>
                    </p>
                </div>
                <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-success">Contact Us</h5>
                    <p>
                        <i class="fas fa-home mr-3"></i> Laxminager, New Delhi
                    </p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> webdiscuss@gmail.com
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3"></i>+91-9746454443
                    </p>
                </div>
            </div>
            <hr class="mb-4">
            <div class="row align-items-center">
                <div class="col-md-7 col-lg-8">
                    <a href="#" style="text-decoration:none;">
                        <strong class="text-success">Web Discuss Forum</strong></a>
                    </p>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 30px;"><i
                                        class="fab fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 30px;"><i
                                        class="fab fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 30px;"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 30px;"><i
                                        class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 30px;"><i
                                        class="fab fa-youtube"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php include 'partials/_footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>