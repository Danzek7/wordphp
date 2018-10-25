<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			$a=$_POST['nombre'];
			$b=$_POST['titulo'];
			//$c=$_POST['texto'];

			$area=$_POST['textArea'];

			mkdir("$a"); //Sin mkdir no se crearía carpeta
			$archivo="$a/$a.html"; //Si no hay mkdir, en vez de 'nombre/nombre.txt' sería sólo 'nombre.txt'

			$textof = nl2br($area);
			$textoMin = strtolower($area);
			$textoMax = strtoupper($area);
			$textoT = ucfirst($area);
			$textoT = ucwords($area);
			$textoMay = mb_strtoupper($area);


			$fp= fopen($archivo, "a");

			$texto1="<html>
					<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
					<head>
						<title>13-4-2018</title>
					</head>
					<style type='text/css'>
						body
						{
							background:#fff;
							margin: 0 auto;
						}
						h1{
							font-size:28px;
							margin:0px 2px 0px 2px;
							color:#000000;
						}
						h2{
							font-size:18px;
							padding: 5px 5px 0px 5px;
							color:#000000;
							text-align:justify;
						}


						#header{
							background:#eeeeee;
							width:1024px;
							height:200px;
							border-top:1px solid #999;
							border-right:1px solid #999;
							border-bottom:1px solid #999;
							border-left:1px solid #999;
						}
						#menu{
							background:#ccffcc;
							width:1024px;
							height:40px;
							border-top:0px solid #999;
							border-right:1px solid #999;
							border-bottom:1px solid #999;
							border-left:1px solid #999;
						}
						#main{

							width:1024px;
							height:1000px;
							border-top:0px solid #999;
							border-right:1px solid #999;
							border-bottom:1px solid #999;
							border-left:1px solid #999;
						}
						#footer{
							background:#cccccc;
							width:1024px;
							height:200px;
							border-top:0px solid #999;
							border-right:1px solid #999;
							border-bottom:1px solid #999;
							border-left:1px solid #999;
						}
					</style>
					<body>
						<center>
							<div id='header'>
								<h1>$b</h1>
							</div>
							<div id='menu'>

							</div>
							<div id='main'>

								<div id='c1'>
									<p id='esteT'>$textoMay<p>
								</div>
								<hr/>
								<div id='c2'>
									<p>$textoT</p>
								</div>
								<hr/>
								<div id='c3'>
									<p>$textof</p>
								</div>
								<div id='c4'>
								</div>
							</div>
							<div id='footer'></div>
						</center>
					</body>
				</html>";
			//n12br
			//strtolower
			//strtoupper
			//ucfirst
			//ucwords
			//mb_strtoupper

			$fp= fopen($archivo, "a");
			/*fputs nos permite escribir en el archivo texto.txt la primera parte del texto a agregar (?*/
			fputs($fp,$texto1);
			//Como siempre se cierra el puntero y el comando fopen
			fclose($fp);
		?>
	</body>
</html>