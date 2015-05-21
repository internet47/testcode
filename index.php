<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script type="text/javascript">
			//var text = '{"name":"Trần Quốc Việt","tel":"0908532383"}';
			//var obj = JSON.parse(text);
			//var obj = $.parseJSON(text);
			//
			//
			

			$.noConflict();
			jQuery(document).ready(function($) {
				function myFunction(arr) 
				{
				    var out = "";
				    var i;
				    for(i = 0; i < arr.length; i++) 
				    		{
				        	out += '<a href="' + arr[i].Name + '">' + arr[i].Email + '</a><br>';
   							}
						   $("#data_return").append(out);
				}



				$("#getall").click(function(event) {

						$.ajax({
							url:'get.php'
						})
						.done(function(data) {
							$("#data_return").html('');
							var getData = JSON.parse(data);
								console.log(getData);
								myFunction(getData);




									// $.each(getData, function(key, val) 
									// {
									// 	var dataneed = JSON.stringify(val);//object to Json string
									// 		var real = JSON.parse(dataneed);
									// 		console.log(real.Email);
							  //         });
						})
						.fail(function() {
							console.log("error");
						})
						.always(function() {
							console.log("complete");
						});
						




						
				});//end click
			});//ready
		
			

		</script>


	</head>
	<body>
		<h1 class="text-center"></h1>
		<button id="getall">Get All</button>
		<div id="data_return">
			
		</div>


		
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>