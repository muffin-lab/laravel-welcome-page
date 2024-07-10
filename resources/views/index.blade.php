<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>PharmaCo. - Home</title>
    <link rel="icon" href="img/favicon.ico" type="image/png" />

    <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css" />

    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!--================ Header Menu Area start =================-->
    <header class="header_area">
      <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container box_1620">
            <a class="navbar-brand logo_h" href="/"
              ><img src="img/logo.png" alt=""
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav justify-content-end">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>

              <div class="nav-right text-center text-lg-right py-4 py-lg-0">
                <a class="button button-outline button-small" href="#">Login</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================ Banner Section start =================-->
    <section class="hero-banner text-center">
      <div class="container">
        <h1>Welcome to PharmaCo.</h1>
        <p class="hero-subtitle">
          Your health is our priority. We provide top-notch pharmaceutical
          products to enhance your well-being.
        </p>
        <a class="button button-outline" href="#">Learn More</a>
      </div>
    </section>
    <!--================ Banner Section end =================-->

    <!-- ================ start footer Area ================= -->
    <footer class="footer-area">
      <div class="">
        <div class="footer-bottom align-items-center text-center">
          <p class="footer-text m-0">
            Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script>
            All rights reserved |
            <i class="ti-heart" aria-hidden="true"></i> by
            <a href="index.html" target="">PharmaCo.</a>
          </p>
        </div>
      </div>
    </footer>
    <!-- ================ End footer Area ================= -->

    <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
