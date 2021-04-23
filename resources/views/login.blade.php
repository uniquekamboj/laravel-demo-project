 <link href="/css/app.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<h1>User Login</h1>
<form name="RegForm" action="user-login" method="get" onsubmit="return registervalid()">
<div class="feild-group">
	<label for="user">Username:</label>
	<input type="text" name="user" class="form-control" placeholder="enter usename or emailId">
<br><br>
	<label for="password">Password</label>
	<input type="password" class="form-control" name="password" placeholder="enter password"><br><br>
	<center><button type="submit" class="btn-success">Login</button></center>
</div>	
</form>
<!--<script>
	function registervalid()
	{
        var email = document.forms["RegForm"]["user"];
        var password = document.forms["RegForm"]["password"];
       
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
         return true;
	}


</script>-->