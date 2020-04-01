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
        <form action="inc/sendemail.php" method="post">
            <div class="input-form">
              <input name="fullname" type="text" name="" placeholder="Full Name">
            </div>
            <div class="input-form">
              <input name="email" type="text" name="" placeholder="Email">
            </div>
            <div class="input-form">
              <input name="phone" type="text" name="" placeholder="Phone Number">
            </div>
            <div class="input-form">
              <input name="subject" type="text" name="" placeholder="Subject">
            </div>
            <div class="input-form">
              <input name="address" type="text" name="" placeholder="Address">
            </div>
            <div class="input-form">
              <input name="website" type="text" name="" placeholder="Website">
            </div>
            <div class="input-form">
              <input name="message" type="text" name="" placeholder="Message">
            </div>
            <div class="input-form">
              <button type="submit" name="submitreg">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>

