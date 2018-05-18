<html >
    <head>
        <title>Ajax Tutorials </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<style>
		    #box{ width: 528px;background: gray;color: white;margin: 70px auto;padding: 77px; text-align: -webkit-center; }
		</style>
		<script>
		    $(document).ready(function(){
				$("#sub").click(function(){
					var name  = $("#name").val();
				    var email = $("#email").val();
				    var phone = $("#phone").val();
					$.post("back.php",{name:name,email:email,phone:phone},function(data){
					   $("#result").html(data);
				    });	
				});
			});
		</script>
    </head>
<body>
    <div id="box" >
		<h1>New User Register with Ajax</h1><br>
		<input name="name" id="name" type="text" placeholder="Enter Name .. " />
		<input name="email" id="email" type="text" placeholder="Enter Email .. " />
		<input name="phone" id="phone" type="text" placeholder="Enter Phone Number .. " /><br><br>
		<input name="sub" id="sub" type="submit" value="submit" /> <br><br><br>
		<div id="result" ></div>
	</div>
	
	
</body>
</html>