<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./style.css">
  <title>Apple (India)</title>
  <style>
   
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
        <a href="login.php" class="nav-link"><i class="fa-solid fa-bag-shopping"></i> <?php 
        if(isset($_COOKIE["user_name"])) {
          
          echo $_COOKIE["user_name"];
          }
        else{
          echo"Login";
        }
         ?></a>
      </li>
    </ul>
  </nav>
  <div class="container-fluid text-center">
    <div class="heading">
      <h1 class="h1">MacBook Pro</h1>
    </div>
    <div class="heading2">
      <span class="grid">Mind-blowing. Head-turing.</span>
    </div>
    <div class="link">
      <a href="#">Learn More &#128898;</a> <a href="#"> Buy &#128898;</a>
    </div>
    <div class="image">
      <video style="height: 600px; width: 1200px" src="macbookvideo.mp4"></video>
    </div>
  </div>
  <div class="container-fluid text-center" style="margin-top: 20px">
    <div class="heading">
      <h1 class="h1">iMac</h1>
    </div>
    <div class="heading2">
      <span class="grid">Packed with more juice</span>
    </div>
    <div class="link">
      <a href="#">Learn More &#128898;</a> <a href="#">Buy &#128898;</a>
    </div>
    <div class="image">
      <img style="height: 400px; width: 600px" src="./image/imac.jpg" alt="" />
    </div>
  </div>

  <div class="container-fluid text-center" id="iphone" style="margin-top: 20px">
    <div class="heading">
      <h1 class="h1">iPhone 15 Pro</h1>
    </div>
    <div class="heading2">
      <span class="grid">Titanium. So strong. So light. So Pro.</span>
    </div>
    <div class="link">
      <a href="#">Learn More &#128898;</a> <a href="#">Buy &#128898;</a>
    </div>
    <div class="image" style="height: 100%; width: 1200px">
      <img style="height: 100%; width: 1200px" class="iphoneimg" src="./image/iphone-15-pro_overview__f8jz7aagka2q_og.png" alt="" />
    </div>
  </div>

  <div class="container-fluid">
    <div class="row m-1">
      <div class="col-sm-6 text-center" id="col1">
        <div class="heading1">
          <h1 class="h1">iPhone 15</h1>
        </div>
        <div class="heading1.1">
          <span class="grid">New Camera. New Design. Newphoria.</span>
        </div>
        <div class="link1">
          <a href="#">Learn More &#128898;</a> <a href="#">Buy &#128898;</a>
        </div>
        <div class="image1">
          <img style="height: 500px; width: 700px" src="./image/iphone-15-finish-select-202309-6-1inch-blue_AV2_FMT_WHH.jpeg" alt="" />
        </div>
      </div>
      <div class="col-sm-6 text-center" id="col2">
        <div class="heading1">
          <h1 class="h1"><i class="fa-brands fa-apple"></i>Watch</h1>
        </div>
        <div>
          <p class="series">SERIES 9</p>
        </div>
        <div class="heading1.1">
          <span class="grid">New Camera. New Design. Newphoria.</span>
        </div>
        <div class="link1">
          <a href="#">Learn More &#128898;</a> <a href="#">Buy &#128898;</a>
        </div>
        <div class="image1">
          <img style="height: 500px; width: 500px" src="./image/Apple-Watch-S9-hero-230912_Full-Bleed-Image.jpg.small_2x.jpg" alt="" />
        </div>
      </div>
    </div>
    <div class="row m-1">
      <div class="col-sm-6 text-center" id="col3">
        <div class="heading1">
          <h1 class="h1">ipad</h1>
        </div>
        <div class="heading1.1">
          <span class="grid">New Camera. New Design. Newphoria.</span>
        </div>
        <div class="link1">
          <a href="#">Learn More &#128898;</a> <a href="#">Buy &#128898;</a>
        </div>
        <div class="image1">
          <img style="height: 500px; width: 500px" src="./image/hero__ecv967jz1y82_small_2x (1).jpg" alt="" />
        </div>
      </div>
      <div class="col-sm-6 text-center" id="col2">
        <div class="heading1">
          <h1 class="h1">AirPods Pro</h1>
        </div>
        <div class="heading1.1">
          <span class="grid">New Camera. New Design. Newphoria.</span>
        </div>
        <div class="link1">
          <a href="#">Learn More &#128898;</a> <a href="#">Buy &#128898;</a>
        </div>
        <div class="image1">
          <img style="height: 500px; width: 500px" src="./image/airpods-pro-2nd-gen-600x600-1.webp" alt="" />
        </div>
      </div>
    </div>
    <div class="row m-1">
      <div class="col-sm-6 text-center" id="col3">
        <div class="heading1">
          <h1 class="h1"><i class="fa-brands fa-apple"></i>WATCH</h1>
        </div>
        <div class="heading1.1">
          <span class="grid">New Camera. New Design. Newphoria.</span>
        </div>
        <div class="link1">
          <a href="#">Learn More &#128898;</a> <a href="#">Buy &#128898;</a>
        </div>
        <div class="image1">
          <img style="height: 500px; width: 500px" src="./image/IMG_20231117_002848.jpg" alt="" />
        </div>
      </div>
      <div class="col-sm-6 text-center" id="col3">
        <div class="heading1">
          <h1 class="h1"><i class="fa-brands fa-apple"></i>Trade in</h1>
        </div>
        <div class="heading1.1">
          <span class="grid">New Camera. New Design. Newphoria.</span>
        </div>
        <div class="link1">
          <a href="#">Learn More &#128898;</a> <a href="#">Buy &#128898;</a>
        </div>
        <div class="image1">
          <img style="height: 500px; width: 100%" src="./image/iphone-14-pro-trade-in.jpg" alt="" />
        </div>
      </div>
    </div>
  </div>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" height="600px" src="./image/Apple_TV_The_Family_Plan_key_art_main_16_9.jpg.small_2x.jpg" First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" height="600px" src="./image/foundation-poster.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" height="600px" src="./image/Hijack_Review_Apple_TV.jpg" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" height="600px" src="./image/og-image.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <footer class="container-fluid">
    <div class="footer-wrapper">
      <div class="social-wrapper container-fluid">
        <div class="social-links">
          <ul>
            <li>
              <a href="#" title="Instagram">
                <i class="fa-brands fa-instagram fa-2xl" style="color: #ee00ff"></i>
              </a>
            </li>

            <li>
              <a href="#" title="Linkedin">
                <i class="fa-brands fa-linkedin fa-2xl"></i></a>
            </li>
            <li>
              <a href="#" title="Twitter">
                <i class="fa-brands fa-twitter fa-2xl" style="color: #005eff"></i></a>
            </li>
            <li>
              <a href="#" title="Youtube">
                <i class="fa-brands fa-youtube fa-2xl" style="color: #ff0019"></i></a>
            </li>
            <li>
              <a href="#" title="GitHub">
                <i class="fa-brands fa-github fa-2xl"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="footer-columns container-fluid">
        <div class="footer-links">
          <!-- <div class="footer-logo">
              <svg
                width="1103"
                height="996"
                viewBox="0 0 1103 996"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M410.988 255.56L0 995.337H189.802L505.141 427.427L410.988 255.56ZM1102.94 995.337L647.119 170.373L551.471 0L457.317 170.373L551.471 340.746L711.79 629.718H498.683L405.461 786.972H799.034L914.634 995.337H1102.94Z"
                  fill="#FAFBFC"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M410.988 255.56L0 995.337H189.802L505.141 427.427L410.988 255.56ZM1102.94 995.337L647.119 170.373L551.471 0L457.317 170.373L551.471 340.746L711.79 629.718H498.683L405.461 786.972H799.034L914.634 995.337H1102.94Z"
                  fill="#FAFBFC"
                />
              </svg>
            </div> -->
          <section>
            <h3><b>Shop & Learn</b></h3>
            <ul>
              <li>
                <a href="#" title="Store">Store</a>
              </li>
              <li>
                <a href="#" title="Mac">Mac</a>
              </li>
              <li>
                <a href="#" title="iPad">iPad</a>
              </li>
              <li>
                <a href="#" title="iPhone">iPhone</a>
              </li>
              <li>
                <a href="#" title="Watch">Watch</a>
              </li>
              <li>
                <a href="#" title="AirPods">AirPods</a>
              </li>
              <li>
                <a href="#" title="TV & Home">TV & Home</a>
              </li>
              <li>
                <a href="#" title="AirTag">AirTag</a>
              </li>
              <li>
                <a href="#" title="Accessories">Accessories</a>
              </li>
              <li>
                <a href="#" title="Gift Cards">Gift Cards</a>
              </li>
            </ul>
          </section>
          <section>
            <h3><b>Account</b></h3>
            <ul>
              <li>
                <a href="#" title="Mannage Your Apple Id">Mannage Id</a>
              </li>
              <li>
                <a href="#" title="Apple Store Account">Apple Account</a>
              </li>
              <li>
                <a href="#" title="iCloud.com">iCloud.com</a>
              </li>

            </ul>
          </section>
          <section>
            <h3><b>Entertainment</b></h3>
            <ul>
              <li>
                <a href="#" title="Apple One">Apple One</a>
              </li>
              <li>
                <a href="#" title="Apple TV+">Apple TV+</a>
              </li>
              <li>
                <a href="#" title="Apple Music">Apple Music</a>
              </li>
              <li>
                <a href="#" title="Apple Arcade">Apple Arcade</a>
              </li>
              <li>
                <a href="#" title="Apple Podcast">Apple Podcast</a>
              </li>
              <li>
                <a href="#" title="Apple Books">Apple Books</a>
              </li>
              <li>
                <a href="#" title="App Store">App Store</a>
              </li>
            </ul>
          </section>
          <section>
            <h3><b>Apple Store</b></h3>
            <ul>
              <li>
                <a href="#" title="Terms and services"> Terms </a>
              </li>
              <li>
                <a href="#" title="Privacy Policy"> Privacy </a>
              </li>
              <li>
                <a href="#" title="Cookies"> Cookies </a>
              </li>
              <li>
                <a href="#" title="Licenses"> Licenses </a>
              </li>
              <li>
                <a href="#" title="Cookies"> Contact </a>
              </li>
            </ul>
          </section>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="footer-description">
          <h3>Elevate your tech skills</h3>
          <p>Develop and design platforms with ease</p>
          <p></p>
        </div>

        <small>© Atheros Intelligence Ltd. <span id="year"></span>, All rights
          reserved</small>
      </div>
    </div>
  </footer>
  <script>
    document.getElementById("year").innerHTML = new Date().getFullYear();
  </script>
</body>

</html>