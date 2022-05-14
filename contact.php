<!DOCTYPE html>
<html lang="en">
  <head>
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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link rel="stylesheet" type="text/css" href="testing.css" />
    <script>
      function ValidateContactForm() {
        var name = document.ContactForm.name;
        var email = document.ContactForm.email;
        var number = document.ContactForm.number;
        var query=document.ContactForm.query;

         if (name.value == "") {
          alert("Please enter your name");
          
          return false;
        }


        if (email.value == "") {
          alert("Please enter  your email id");
          // email.focus();
          return false;
        }
               if (email.value.indexOf("@", 0) < 0) {
          alert("Please enter a valid e-mail address.");
          //email.focus();
          return false;
        }
        if (email.value.indexOf(".", 0) < 0) {
          alert("Please enter a valid e-mail address.");
          //email.focus();
          return false;
        }
         if (number.value == "") {
          alert("Please enter your number");
          
          return false;
        }
         if (query.value == "") {
          alert("Please enter your Query");
      
          return false;
        }


        return true;
      }

    </script>
    <style>
      table {
        /* border: 1px solid; */
        padding: 20px 20px 20px 20px;
        align: center;
      }

      td {
        height: 100px;
        vertical-align: center;
        text-align: center;
      }
    </style>
  </head>
  <header>
    <div class="banner">
      <div class="navbar1">
        <span class="logo" src="mainpage.html"
          ><a href="mainpage.html"
            ><h1 style="font-size: 25px">Sneak-A-Peek</h1></a
          ></span
        >
        <div class="dropdown">
          <ul>
            <li>
              <a href="#">Categories</a>
              <ul class="dropdown">
                <li><a href="men.html">Men</a></li>
                <li><a href="women.html">Women</a></li>
                <li><a href="kids.html">Kids</a></li>
              </ul>
            </li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <body class="contact">
     
    <br /><br /><br />
    <center>
      <fieldset>
        <br />
        <h1 class="h1contact">Need Help? Contact Us</h1>
        
      </fieldset>
      
      <fieldset>
        <form action="dbconnection.php" method="get" align="center"  onsubmit= "return ValidateContactForm()"
      name="ContactForm">
      <table align="center">
        <tr>
          <td><b>Name:&nbsp;&nbsp;&nbsp;</b></td>
          <td>
            <input
              type="text"
              name="name"
              placeholder="Enter your Name here"
              size="22"
            />
          </td>
          <br />
        </tr>
        <tr>
          <td><b>Email ID:&nbsp;&nbsp;&nbsp; </b></td>
          <td>
            <input
              type="text"
              name="email"
              placeholder="Enter your Email ID Here"
              size="22"
            />
          </td>
        </tr>
        <tr>
          <td><b>Mobile Number:&nbsp;&nbsp;&nbsp; </b></td>
          <td>
            <input
              type="tel"
              name="number"
              placeholder="Enter your Mobile Form Here"
              size="22"
            />
          </td>
        </tr>
        <tr>
          <td><b>Your Concern:&nbsp;&nbsp;&nbsp; </b></td>
          <td>
            <input
              type="text"
              name="query"
              placeholder="Enter your Query Here"
              size="22"
            />
          </td>
        </tr>
        <tr>
          <td>
            <input id="submit" type="submit" value="Submit" />
            &nbsp;&nbsp;&nbsp;
          </td>
          <td><input id="reset" type="reset" value="Cancel" /></td>
        </tr>
      </table>
    </form>
      </fieldset>
    </center>
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
            <a href="men.html">Men's Sneakers</a>
          </li>
          <li>
            <a href="women.html">Women's Sneakers</a>
          </li>
          <li>
            <a href="kids.html">Kid's Sneakers</a>
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
            <a href="mainpage.html">Home</a>
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
