<h1>
Registration Page
</h1> <br>
<!-- The username and password will be stored into a databse table in future milestone. The login page will then use the stored username and password to authorize the user. -->
<body>
Username:

</body>
<!-- User inputs the username they would like to use. -->
<input type="text" id="username" name="username"> <br> <br>
<body>
Password:

</body>
<!-- User inputs the password they would like to use. -->
<input type="text" id="password" name="password"> <br> <br>
<body>
Confirm Password:

</body>
<!-- User re-enters the password they just enterred (comparison checking not currently functional). -->
<input type="text" id="password" name="password"> <br> <br>
<!-- Button links to the regitration confirmation page -->
<button onclick="window.location.href='http://localhost/milestone1/resources/views/registrationConfirmation.php';">
      Register
</button>

