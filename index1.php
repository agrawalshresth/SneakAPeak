<!DOCTYPE html>
<html>
  <head>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />

    <style>
      #rcorners3 {
        border-radius: 25px;
        background: url("images/whitesneakers-2048px-4187.jpg");
        background-position: left top;
        background-repeat: repeat;
        padding: 20px;
        width: 200px;
        height: 150px;
      }
      .top {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
        width: 100%;
        opacity: 0;
        transition: 0.5s ease;
        background-color: #be914c;
      }

      .image {
        display: block;
        width: 100%;
        height: auto;
      }

      .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
        width: 100%;
        opacity: 0;
        transition: 0.5s ease;
        background-color: #008cba;
      }
      #women:hover .top {
        opacity: 0.5;
      }

      .text {
        color: white;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">WebSiteName</a>
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
    </nav>
    <!--
    <div class="card" style="width: 500px">
      <img
        class="card-img-top"
        src="images/whitesneakers-2048px-4187.jpg"
        alt="Card image"
      />
      <div class="card-img-overlay">
        <h4 class="card-title">John Doe</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
    </div>-->

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6" id="women">
          <div class="left-content">
            <img class="image" src="images/left-banner-image.jpg" />
            <div class="top"><p class="text">Centered</p></div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-6">
              <img src="images/baner-right-image-02.jpg" />
            </div>
            <div class="col-lg-6">
              <img src="images/baner-right-image-03.jpg" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="main-banner" id="top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="left-content">
              <img class="image" src="images/left-banner-image.jpg" />
              <div class="top"><p class="text">Centered</p></div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="right-content">
              <div class="row">
                <div class="col-lg-6">
                  <div class="right-first-image">
                    <img src="images/baner-right-image-02.jpg" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="right-first-image">
                    <img src="images/baner-right-image-02.jpg" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="right-first-image">
                    <img src="images/baner-right-image-03.jpg" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="right-first-image">
                    <img src="images/baner-right-image-03.jpg" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <table class="table">
        <tbody>
          <tr>
            <td rowspan="2">
              <img class="image" src="images/left-banner-image.jpg" />
            </td>
            <td><img src="images/baner-right-image-02.jpg" /></td>
          </tr>
          <tr>
            <td><img src="images/baner-right-image-03.jpg" /></td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>
