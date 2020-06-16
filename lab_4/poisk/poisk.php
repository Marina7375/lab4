<?php 
session_start();
require_once '../class/class.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <link rel="stylesheet"  href="../css/style.css">
    <script src="jquery.min.js" type="text/javascript" >
	</script>

	
</head>
<body>
    <div class="menu">
        <button class="link"> <a href="../user_page/1.php"><?php echo lang::trans('Client_page'); ?></a></button>
        <button class="link"> <a href="../user_page/3.php"><?php echo lang::trans('Admin_page'); ?></a></button>
        <button class="link"> <a href="../user_page/2.php"><?php echo lang::trans('Manager_page'); ?></a></button></div>

<form  id="search"  >
			<p>POISK</p>
			<input type="text" id="name" placeholder="Имя" autocomplete="off"><br/>
			<input type="text" id="lastname" placeholder="Фамилия" autocomplete="off" ><br/>

			<input type="text" id="lang" placeholder="Язык:ru, en, ua " autocomplete="off"><br/>
			<input type="submit"  >
		</form>
		<h2>Result</h2>
		<div id="resul"></div>
	<script >
		let form=$("#search");
		form.on("submit",function(ev){
			ev.preventDefault();
			let name = $("#name").val();
			let lastname = $("#lastname").val();
			let lang = $("#lang").val();

		$.ajax({		
			type:"POST",
			 url: "ajax.php",
			data:{name: name,lastname:lastname,lang:lang},
			 async: true,
		
			 success: function(data){
			 	alert("зашло в аякс")
			 	$("#resul").html(data);
			  }
		});

		});
		

	</script>

    </body>

    </html>
