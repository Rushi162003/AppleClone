<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>sign up</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            font-family: -- "SF Pro Text" "SF Pro Icons" "Helvetica Neue" Helvetica Arial sans-serif;
            opacity: 0.99;
            width: 100%;
        }

        li a {
            font-weight: 100;
            margin: 0 15px;
        }

        .d-flex {
            margin-bottom: -20px;
        }

        .navbar-brand {
            padding-top: 10px;
            font-size: 24px;
            font-weight: 500;
        }

        .d-flex ul {
            padding-top: 10px;
            list-style: none;
        }

        .d-flex ul li {
            display: inline-block;
            margin-left: 20px;
        }

        /*#input {
            width: 500px;
        }*/
        .heading h1 {
            font-size: 34px;
            font-weight: 700;
        }

        form {
            width: 500px;
            margin-left: 350px;
        }

        input {
            height: 56px;
            width: 460px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark justify-content-center navbar-dark sticky-top">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="fa-brands fa-apple"></i></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Store</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Mac</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">ipad</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">iphone</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Watch</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">AirPods</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Tv & Home</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Entertainment</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Accessories</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Mannage Your Apple Id</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="fa-solid fa-magnifying-glass"></i></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="fa-solid fa-bag-shopping"></i></a>
            </li>
        </ul>
    </nav>
    <nav class="container navbar navbar-light">
        <div class="container-fluid">
            <span class="navbar-brand">Apple Id</span>
            <form class="d-flex">
                <ul>
                    <li>Sign up</li>
                    <li>Create your Apple ID</li>
                    <li>FQA</li>
                </ul>
            </form>
        </div>
    </nav>
    <hr>
    <div class="container text-center">
        <form action="action.php" method="post">
            <div class="heading">
                <h1>Create Your Apple ID</h1>
                <p>One Apple ID is all you need to access all Apple services.</p>
            </div>
            <div id="input" class="row">
                <div class="col-6 form-floating mb-3">
                    <input required type="text" class="form-control" name="fname" id="fname" placeholder="name@example.com">
                    <label style="margin-left: 10px; color: rgb(118, 118, 118);" for="floatingInput">first name</label>
                </div>
                <div class="col-6 form-floating">
                    <input required type="text" class="form-control" name="lname" id="floatingPassword" placeholder="Password">
                    <label style="margin-left: 10px;color: rgb(118, 118, 118)" for="floatingPassword">last name</label>
                </div>
            </div>
            <div class="form-floating mb-3">
                <input required type="text" class="form-control" name="country" id="floatingInput" placeholder="name@example.com">
                <label style="color: rgb(118, 118, 118)" for="floatingInput">COUNTRY/REGION</label>
            </div>
            <div class="form-floating mb-3">
                <input required type="date" class="form-control" name="dob" id="floatingPassword" placeholder="Password">
                <label style="color: rgb(118, 118, 118)" for="floatingPassword">Date of Birth</label>
            </div>
            <div class="form-floating mb-3">
                <input required type="email" class="form-control" name="username" id="floatingInput" placeholder="name@example.com">
                <label style="color: rgb(118, 118, 118)" for="floatingInput">name@example.com</label>
                <p style="margin-left: -270px;">This will be your new Apple ID.</p>
            </div>
            <div class="form-floating mb-3">
                <input required type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label style="color: rgb(118, 118, 118)" for="floatingPassword">Password</label>
            </div>
            <div class="form-floating mb-3">
                <input required type="password" class="form-control" name="cpassword" id="floatingInput" placeholder="name@example.com">
                <label style="color: rgb(118, 118, 118)" for="floatingInput">Confirm password</label>
            </div>
            <div class="input-group mb-3 flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">+91</span>
                <input required style="color: rgb(118, 118, 118)" name="number" type="text" class="form-control" placeholder="Phone number" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <button type="submit"  onsubmit="validation()" class="btn btn-primary mb-5">Continue</button>
        </form>
       
    </div>
    <script>
        function validation() {
            // let name = document.getElementsByName('fname').value;
            // var lname = document.getElementsByName('lname').value;
            // var country = document.getElementsByName('country').value;
            // var dob = document.getElementsByName('dob').value;
            // var username = document.getElementsByName('username').value;
            // var password = document.getElementsByName('password').value;
            // var cpassword = document.getElementsByName('cpassword').value;
            // var number = document.getElementsByName('number').value;
            if (document.getElementsByName('password').value != document.getElementsByName('cpassword').value)
            {
                alert("Confirm password is not match");
            }
        }
    </script>
</body>

</html>