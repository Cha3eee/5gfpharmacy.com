<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<style type="text/css">
	.password-container{
	  width: 200px;
	  position: relative;
	}
	.password-container input[type="password"],
	.password-container input[type="text"]{
	  width: 200%;
	  padding: 12px 36px 12px 12px;
	  box-sizing: border-box;
	}
	.fa-eye{
	  position: absolute;
	  top: 30%;
	  right: 10%;
	  cursor: pointer;
	  color: lightgray;
	}
</style>
<body>

	<div class="password-container">
	  <input type="password" placeholder="Password..." id="password">
	  <i class="fa-solid fa-eye" id="eye"></i>
	</div>

</body>
</html>
<script type="text/javascript">
	const passwordInput = document.querySelector("#password")
	const eye = document.querySelector("#eye")

	eye.addEventListener("click", function(){
	  this.classList.toggle("fa-eye-slash")
	  const type = passwordInput.getAttribute("type") === "password" ? "text" : "password"
	  passwordInput.setAttribute("type", type)
	})
</script>