<?php
if (isset($_POST['loginEmail'])) {
  include'../php/logUser.php';
}else if(isset($_POST['emailAddress'])){
  include'../php/registerUser.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/loginRegister.css">
    <script
			  src="https://code.jquery.com/jquery-3.5.1.js"
			  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
			  crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>


<div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Doain Erregistratu</h1>
          
          <form action="test.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Izena<span class="req">*</span>
              </label>
              <input type="text"  name="firstName" required  autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Abizena<span class="req">*</span>
              </label>
              <input type="text" name="lastName" required  autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Helbidea<span class="req">*</span>
            </label>
            <input type="email" name="emailAddress" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Pasahitza ezarri<span class="req">*</span>
            </label>
            <input type="password" name="password" required  autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Erregistratu</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Ongi Etorria!</h1>
          
          <form action="test.php" method="post">
          
            <div class="field-wrap">
            <label>
              Email Helbidea<span class="req">*</span>
            </label>
            <input type="email" name="loginEmail" required  autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Pasahitza<span class="req">*</span>
            </label>
            <input type="password" name="loginPassword" required autocomplete="off"/>
          </div>
          
          <button class="button button-block"/>Kautotu</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<script src="../js/loginRegister.js"></script>
</body>
</html>