<!DOCTYPE html>
<html>
<head>
  <title>MetHotels.rs | Index</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
  
  <div class="container-full mh-navigation">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 brand">
          <img src="images/logo.png" class="brand-logo">
        </div>
        <div class="col-sm-6">
          <ul class="nav nav-pills">
            <li role="presentation" class="active">
              <a href="#">Register</a>
            </li>
            <li role="presentation" class="nav-pills-separator">
              or
            </li>
            <li role="presentation" class="nav-pills-btn-secondary">
              <a href="#">Sign In</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="container mh-slides">
    <div class="row">
      <div class="col-md-7 col-sm-12 about">
        <div class="about-overlay"></div>
        <div>
          <h1>MetHotels - book hotel room now!</h1>
          <p>MetHotels allows you to find the perfect place for you and your family!</p>
        </div>
      </div>
      <div class="col-md-5 col-sm-12 book">
        <form class="form">
          
          <div class="form-group">
            <label for="hotel">Choose hotel:</label> <br/>
            <select class="form-control">
              <option value="one">Hotel Supreme</option>
              <option value="two">Hotel Dubai</option>
              <option value="three">Hotel Freelabl</option>
              <option value="four">Hotel Sophy</option>
              <option value="five">Hotel Indianapolis</option>
            </select>
          </div>

          <div class="form-group">
            <label for="room">Number of rooms:</label> <br/>
            <input type="text" name="room" class="form-control">
          </div>

          <div class="form-group">
            <label for="adult">Number of adults:</label> <br/>
            <input type="text" name="adult" class="form-control">
          </div>

          <div class="form-group">
            <label for="children">Number of children:</label> <br/>
            <input type="text" name="children" class="form-control">
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="container mh-destinations">
    <div class="row">
      <div class="col-md-2 destination">
        <h2>Belgrade</h2>
        <p>From <span class="price">79,99E</span></p>
      </div>
      <div class="col-md-2 destination">
        <h2>Split</h2>
        <p>From <span class="price">$79,99E</span></p>
      </div>
      <div class="col-md-2 destination">
        <h2>Bucurest</h2>
        <p>From <span class="price">$124,22</span></p>
      </div>
      <div class="col-md-2 destination">
        <h2>Sofia</h2>
        <p>From <span class="price">$23,29</span></p>
      </div>
      <div class="col-md-2 destination">
        <h2>Bosilegrad</h2>
        <p>From <span class="price">$23,29</span></p>
      </div>
      <div class="col-md-2 destination">
        <h2>Zlatibor</h2>
        <p>From <span class="price">$13,29</span></p>
      </div>
    </div>
  </div>

  <div class="container mh-steps">
    <div class="row">
      <div class="col-md-4 step step-1">
        <div class="step-overlay"></div>
        <div>
          <h2>STEP 01</h2>
          <p>Tell us about yourself ></p>
        </div>
      </div>
      <div class="col-md-4 step step-2">
        <div class="step-overlay"></div>
        <div>
          <h2>STEP 02</h2>
          <p>Login and start exploring ></p>
        </div>
      </div>
      <div class="col-md-4 step step-3">
        <div class="step-overlay"></div>
        <div>
          <h2>STEP 03</h2>
          <p>Start booking ></p>
        </div>
      </div>
    </div>
  </div>

  <div class="container mh-footer">
    <div class="row">
      <div class="col-md-12">
        <p>MetHotels &copy; 2017 - Metropolitan University</p>
      </div>
    </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>