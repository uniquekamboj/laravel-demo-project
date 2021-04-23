<!DOCTYPE html>
<html>
<head>
	 <link href="/css/app.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<center><h2>Registration Form</h2></center>
	
<br>
<div class="panel panel-primary">
    <form name="RegForm" method="POST" action="/register" onsubmit="return registervalid()" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control"  size="50" id="name" name="name">
        </div>
        </br>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
		</br>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
    	</br>
    	<div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="Number" class="form-control" id="phone" name="phone">
     	</div>
       	</br>
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>  
<script>
	function registervalid()
	{
		var name = document.forms["RegForm"]["name"];
        var email = document.forms["RegForm"]["email"];
        var password = document.forms["RegForm"]["password"];
        var phone = document.forms["RegForm"]["phone"];
         if (name.value == "") {
            window.alert("Please enter your name.");
            name.focus();
            return false;
        }
  
        if (email.value == "") {
            window.alert(
              "Please enter a valid e-mail address.");
            email.focus();
            return false;
        }
  
        if (password.value == "") {
            window.alert("Please enter your password");
            password.focus();
            return false;
        }
        if (phone.value == "") {
            window.alert(
              "Please enter your telephone number.");
            phone.focus();
            return false;
        }
         return true;
	}


</script>
<script src="/js/app.js"></script>  
</body>
</html>