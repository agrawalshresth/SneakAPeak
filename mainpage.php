<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"
    /> -->
    <!-- Latest compiled and minified CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous"
    />

    <!-- Optional theme -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
      integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
      crossorigin="anonymous"
    />

    <!-- Latest compiled and minified JavaScript -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
      integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="testing.css" />
    <style></style>
  </head>

  <header>
    <!-- <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Sneak-A-Peek</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"
              >Page 1 <span class="caret"></span
            ></a>
            <ul class="dropdown-menu">
              <li><a href="#">Page 1-1</a></li>
              <li><a href="#">Page 1-2</a></li>
              <li><a href="#">Page 1-3</a></li>
            </ul>
          </li>
          <li><a href="#">Page 2</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#"
              ><span class="glyphicon glyphicon-user"></span> Sign Up</a
            >
          </li>
          <li>
            <a href="#"
              ><span class="glyphicon glyphicon-log-in"></span> Login</a
            >
          </li>
        </ul>
      </div>
    </nav> -->
  </header>
  <body>
    <div class="banner">
      <div class="navbar1">
        <span class="logo" src="mainpage.php"
          ><a href="mainpage.php"
            ><h1 style="font-size: 25px">Sneak-A-Peek</h1></a
          ></span
        >
        <div class="dropdown">
          <ul>
            <li>
              <a href="#">Categories</a>
              <ul class="dropdown">
                <li><a href="men.php">Men</a></li>
                <li><a href="women.php">Women</a></li>
                <li><a href="kids.php">Kids</a></li>
              </ul>
            </li>
            <li><a href="#">About us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="sneaker-main" align="center">
        <h1><br><br>Sneak-A-Peek</h1>
        <h2>The Sneaker Store</h2>
        <h2>Select from the Categories Below!</h2>
      </div>
      <table
        class="table-responsive table-borderless table-condensed"
        align="center"
      >
        <tbody>
          <tr>
            <td rowspan="2" style="padding: 2px">
              <img src="images/left-banner-image.jpg" />
            </td>
            <td style="padding: 2px">
              <a href="#"><img src="images/baner-right-image-02.jpg" class="img2" /></a>
            </td>
          </tr>
          <tr>
            <td style="padding: 2px">
              <a href="#"><img src="images/baner-right-image-03.jpg" /></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <img
            src="https://mdbcdn.b-cdn.net/img/new/standard/city/044.webp"
            class="card-img-top"
            alt="Skyscrapers"
          />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              This is a wider card with supporting text below as a natural
              lead-in to additional content. This content is a little bit
              longer.
            </p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img
            src="https://mdbcdn.b-cdn.net/img/new/standard/city/043.webp"
            class="card-img-top"
            alt="Los Angeles Skyscrapers"
          />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              This card has supporting text below as a natural lead-in to
              additional content.
            </p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img
            src="https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp"
            class="card-img-top"
            alt="Palm Springs Road"
          />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              This is a wider card with supporting text below as a natural
              lead-in to additional content. This card has even longer content
              than the first to show that equal height action.
            </p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
    </div> -->

    <div class="footer">
       <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Sneak-A-Peek</h5>

        <ul class="list-unstyled">
          <li>
            <a href="men.php">Men's Sneakers</a>
          </li>
          <li>
            <a href="women.php">Women's Sneakers</a>
          </li>
          <li>
            <a href="kids.php">Kid's Sneakers</a>
          </li>
        
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Important Links
        </h5>

        <ul class="list-unstyled">
          <li>
            <a href="mainpage.php">Home</a>
          </li>
          <li>
            <a href="#!">About Us</a>
          </li>
          <li>
            <a href="#!">Categories</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">
      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Need Help?</h5>

        <ul class="list-unstyled">
          <li>
            <a href="contact.php">Contact Us</a>
          </li>
          <li>
            <a href="#!">Instagram</a>
          </li>
          <li>
            <a href="#!">Mail to us</a>
          </li>
          <li>
            <a href="#!">Mob No. 9876543210</a>
          </li>
        </ul>

      </div>
    </div>
  </body>
</html>