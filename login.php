<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN PAGE</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!--JavaScript Bundle with Popper-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&display=swap" rel="stylesheet">
        <style>
            body{
                background-color:#070129;
            }
            .new{
                padding-top:270px;
            }
            .right{
                width: 33%;
                height: 713px;
                background-image: url("https://media.istockphoto.com/id/1095527130/vector/binary-city.jpg?s=612x612&w=0&k=20&c=Mw-b8N9STJNDTWBQIrLoyZA9HwuylsMcOquzqu1sSh8=");
                background-size: 100% 713px;
                background-repeat: no-repeat;
            }
            @media screen and (max-width:1000px) {
                .right{
                    width: 100%;
                    height: 460px;
                    background-image: url("https://media.istockphoto.com/id/1095527130/vector/binary-city.jpg?s=612x612&w=0&k=20&c=Mw-b8N9STJNDTWBQIrLoyZA9HwuylsMcOquzqu1sSh8=");
                    background-size: 100% 460px;
                    background-repeat: no-repeat;
                }
                button{
                    margin-bottom: 20px;
                }
                .new{
                    padding-top:150px;
                }
            }
            input{
                width: 70%;
                border: none;
                background-color: #EFF5F5;
                border-radius: 20px;
                padding: 15px;
                padding-left: 30px;
            }
            input:focus{
                outline: none;
            }
        
        </style>
        <script>
var attempt = 3; 
var pass=5;
function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
var passw  = /^[a-zA-Z0-9!@#$%^&*]{6,16}$/;
if(username==" " || password==" ")
    {
        alert("enter password and username");
}
if ( username.match(pattern))
{
    if(password.match(passw))
    {

alert ("Login successfully");
window.location = "google.com"; 
return false;
}
else
{
    pass--;
    alert(" you have left with "+pass+" enter correct password");
    if(pass==0)
    {
        document.getElementById("password").disabled=true;
        document.getElementById("submit").disabled=true;
    }
}
}
else{
attempt --;
alert("you have left "+attempt+" attempt please enter correct credentials");
if( attempt == 0){
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
}
        </script>
    </head>
    <body style="margin-left: 0px;margin-right: 0px;">
        <section>
            <div class="text-center" style="margin-left: 0px;margin-right: 0px;">
                <div class="row" style="margin-left: 0px;margin-right: 0px;">
                    <div class="col-lg-8 col-md-12 left" style="margin-left: 0px;margin-right: 0px;">
                        <div style="position:absolute;">
                            <p style="display:inline;font-family: 'La Belle Aurore', cursive;font-size: 30px;padding-top: 20px;">C O d E Z</p>
                        </div>
                        <h1 style="padding-top: 200px;color:white">Login to Your Account</h1>
                        <p style="color:white">Login using social networks</p>
                        <i class="fa-brands fa-facebook" style="font-size:40px;color: #6D67E4;margin-right: 10px;"></i>
                        <i class="fa-brands fa-google-plus" style="font-size:40px;color: red;margin-right: 10px;"></i>
                        <i class="fa-brands fa-linkedin" style="font-size:40px;color: #6D67E4;"></i>
                        <div style="display:flex;flex-direction: row;margin-left: 13%;">
                            <hr style="width:40%;">
                            <p style="margin-left: 20px;margin-right: 20px;">or</p>
                            <hr style="width:40%;">
                        </div>
		<form action="insert.php" method="post">
        // Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email']//

                        <input type="text" placeholder="user name" id="username" name="first_name"><br><br>
                        <input type="password" placeholder="password" id="password"  name="last_name"><br><br>
                        <input type="text" placeholder="gender"  name="gender"><br><br>
                        <input type="text" placeholder="adress" name="adress"><br><br>
                        <input type="text" placeholder="email"  name="email"><br><br>
                        

                         <button onclick="validate()"  id="submit"style="border-radius:25px;border:0;padding:10px 65px;background-color: #45936a;color: white;">login in</button>
                    </div>
                    <div class="col-lg-4 col-md-12 right" style="margin-left: 0px;margin-right: 0px;">
                        <h1 style="color:white;" class="new">NEW HERE ?</h1>
                        <p style="color:white;padding-top:10px;font-size: 19px;">Sign&nbsp;&nbsp;up&nbsp;&nbsp;and&nbsp;&nbsp;discover&nbsp;&nbsp;a&nbsp;&nbsp;great <br>amount&nbsp;&nbsp;of&nbsp;&nbsp;new&nbsp;&nbsp;coding&nbsp;&nbsp;experience!</p>
                        <button style="border-radius:25px;border:0;padding:10px 65px;">Sign up</button>
                    
		</form>
</div>
                </div>
            </div>
        </section>
    </body>
</html>