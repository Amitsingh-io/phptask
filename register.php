<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
<br><br>
<div class="row">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">User Name</label>
  <div class="col-sm-10">
    <input type="text" class="form-control form-control-lg" id="user_name" required placeholder="User Name">
  </div>
</div>
<br>
<div class="row">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">E-mail</label>
  <div class="col-sm-10">
    <input type="email" class="form-control form-control-lg" id="email" required placeholder="E-mail">
  </div>
</div>
<br>
<div class="row">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Phone Number</label>
  <div class="col-sm-10">
    <input type="text" class="form-control form-control-lg" id="phone_number" required placeholder="Phone number">
  </div>
</div>
<br>
<div class="row">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Password</label>
  <div class="col-sm-10">
    <input type="password" class="form-control form-control-lg" id="password" required placeholder="Password">
  </div>
</div>
<br>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button class="btn btn-primary" id="create_account" type="button">Create account</button>
</div>
</div>
</body>

<script>
 $("#create_account").click(function(e)  //modal login button
       {
        //alert("click on login");
        e.preventDefault();
        let email=$("#email").val();
        let password=$("#password").val();
        let username=$("#user_name").val();
        let phone_number=$("#phone_number").val();
        $.ajax(
            { 
              url:"registerphp.php",
              type:"post",
              dataType:"json",
              data:{email:email,password:password,username:username,phone_number:phone_number},
              success:function(data)
              {
                alert(data);

                if(data=='0')
                {
                 alert("User already register");
                }
                else //if(data=='1')
                {
                  //
                  //alert("user created");
                  window.location.href = "homepage.php";
                }
            }
          }
        ); 
        
       });
</script>
</html>