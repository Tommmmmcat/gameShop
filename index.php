<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>GAMESHOP</title>
        <link href="css/loginstyle.css" rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="App Loction Form,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
        <script type="application/x-javascript"> 
            addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    </script>
    <!--webfonts-->
    <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
</head>
<aside>
    <div id="logGet">
        <div class="app-location">
            <h2>Welcome to GAME STOP</h2>
            <div class="line"><span></span></div>
            <div class="location"><img src="img/logo.jpg" class="img-responsive" alt="logo" /></div>
            <form action="controller/login.php" method="post" id='submitform'>
                <input id="login_input"type="text" name="account" value="EMAIL ADDRESS " required="required"/>
                <input id="login_input" type="password" name="password" value="Password" required="required"/>
                <div class="submit">
                    <input type="submit" value="Sign in" ></div>
                <div class="clear"></div>
                <div class="new">
                    <h4><a href="view/register.php">New here ? Sign Up</a></h4>
                    <div class="clear"></div>
                </div>
                <script type="text/javascript" language="javascript">
                    $("#submitform").on("submit", function (ev) {
                        $.ajax({
                            ......
                        });
                        //阻止submit表单提交  
                        ev.preventDefault();
                        //或者return false  
                        //return false;  
                    });
                </script>
            </form>
        </div>   
    </div>
    <form action="../view/register.php" >
        <input type="submit" value="register" ></div>
    </form>


</aside>
</body>
</html>


