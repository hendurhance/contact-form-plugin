<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="form" class="container">
         <h2>Contact</h2>
         <div class="break"></div>
        <form action="register.php" method="post">
            <div class="input-form">
              <input name="fullname" type="text" name="" placeholder="Full Name">
            </div>
            <div class="input-form">
              <input name="username" type="text" name="" placeholder="Username">
            </div>
            <div class="input-form">
              <input name="email" type="text" name="" placeholder="Email">
            </div>
            <div class="input-form">
              <input name="password" type="password" name="" placeholder="Password">
            </div>
            <div class="input-form">
              <input name="confirmpassword" type="password" name="" placeholder="Confirm Password">
            </div>
            <div class="input-form">
              <button type="submit" name="submitreg">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>

