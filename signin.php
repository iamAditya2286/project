<!doctype html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="css/signinstyle.css">
    </head>
    <script>
        function signInValidation(){
            var a =document.forms["signin"]["email"].value;
            var b = document.forms["signin"]["password"].value;
            if(a==""||b=="")
            {
                alert("Fill all the fields");
                exit(0);
            }
            var atposition=a.indexOf("@");
            var dotposition=a.lastIndexOf(".");
            if (atposition<1 || dotposition<atposition+2 || dotposition+2>=b.length)
            {
                
                alert("Please enter a valid e-mail address");

            }

        }
    </script>
    <body>
        <center><h1>Online Quiz System</h1></center>
        <div >
            <p style="font-family:serif;padding-top:40px;text-align: center; font-size: 2em"><b>LoginPage</b></p>
            <form action="" name="signin">
                <p>Email<input type="email" name="email" placeholder="Enter Email"></p>
                <p>Password<input type="password" name="password" placeholder="Enter Password"></p>
                <button type="button" onclick="signInValidation()">Submit</button>
            </form>
            <p style="font-size: 1.2em">No Account ? <a href="signup.html">Register</a></p>
        </div>
    </body>
</html>