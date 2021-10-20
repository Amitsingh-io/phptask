<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  <nav>
  <br>
  &nbsp;
  <br>
  &nbsp;    
</nav>
<div class="container">

<div class="row">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
  <div class="col-sm-10">
    <input type="text" class="form-control form-control-lg" id="email" placeholder="Email">
  </div>
</div>
<br>
<div class="row">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Password</label>
  <div class="col-sm-10">
    <input type="password" class="form-control form-control-lg" id="password" placeholder="Password">
  </div>
</div>
<br>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button class="btn btn-primary" id="login_button" type="button">Login</button>
</div>
</div>
</body>

<script>
   $("#login_button").click(function(e)  //modal login button
       {
        //alert("click on login");
        e.preventDefault();
        var email=$("#email").val();
        var password=$("#password").val();
        $.ajax(
            { 
              url:"loginphp.php",
              type:"post",
              dataType:"json",
              data:{email:email,password:password},
            //check for check login or signup
            //1 for login 0 for signup 2 for logout for check cookies
              success:function(data)
              {
                //alert(data);
                if(data=='0')
                {
                 alert("wrong email or password");
                }
                else //if(data=='1')
                {
              
                  window.location.href = "http://www.omdbapi.com/";
                }
            }
          }
        ); 
        
       });
</script>
</html>