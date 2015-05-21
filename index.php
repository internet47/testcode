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

			$.noConflict();
			jQuery(document).ready(function($) {
				$("#getall").click(function(event) {

						$.ajax({
							url:'get.php'
						})
						.done(function(data) {
							var getData = $.parseJSON(data);

					// 		$.each(data, function(key, val) {
					//             alert('Key = '+key+' : value = '+val);
					//         });

							// $.each(getData, function(index, val) {
							// 	//console.log('Key = '+index+' : value = '+val)
							// 	//
							// 	//alert('Key = '+index+' : value = '+val);
							// 	//
							// 	var fildata = $.parseJSON(val);
							// 	console.log('Key = '+index+' : value = '+fildata)
							// });

							console.log(data);
						})
						.fail(function() {
							console.log("error");
						})
						.always(function() {
							console.log("complete");
						});
						




						// $.ajax({
						// 	url: 'get.php',
						// 	type: 'GET',
						// 	//dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
						// 	//data: {param1: 'value1'},
						// })
						// .done(function(data) {
						// 	var obj = JSON.parse(data);
						// 	alert(obj.name);
						// 	console.log(obj);
						// })
						// .fail(function(data) {
						// 	console.log("error");
						// })
						// .always(function(data) {
						// 	console.log("complete");
						// });
						
				});//end click
			});//ready
		
			

		</script>


	</head>
	<body>
		<h1 class="text-center"></h1>
		<button id="getall">Get All</button>


		
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>