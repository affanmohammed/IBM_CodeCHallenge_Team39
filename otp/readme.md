This part is done by Affan and Aqueel

Here we need to either create a new account or login to existing account

Database is created in mysql

we can connect database to php using:
  $con = mysqli_connect("localhost","uname","password","dbname");
  
if registeration is selected, details like email id, username,password are submitted and otp will be generated and send to the mail id given

Running home.php while keeping all the php files in same page should generate a successful otp sent on your email.
  upon entering this otp a successfull login should occur
  
if login is selected, you can enter your registered email id and password and then login to your account.
