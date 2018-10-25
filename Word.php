<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="para2.css"/>
		<script src="quill/quill.js"></script>
		<!--<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>--> 
		<script src="nicEdit/nicEdit.js"></script>
	</head>
	<body>
		<form action="nuevaPag.php" method=post>
			<div id="toolbar" class="sc-toolbar-container toolbar">
				<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
				<script type="text/javascript">
				//<![CDATA[
				        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
				  //]]>
				 </script>
				  <!-- <div class="sc-format-group">
				  <span class="sc-bold sc-format-button"></span>
				  <span class="sc-italic sc-format-button"></span>
				  <span class="sc-strike sc-format-button"></span>
				  <span class="sc-underline sc-format-button"></span>
				  <span class="sc-format-button sc-link"></span>
				  <span class="sc-format-separator"></span>
				  </div>
				    <select class="sc-size">
				    <option value="small">Menos</option>
				    <option value="normal">Normal</option>
				    <option value="large">Mas</option>
				  </select> -->
			</div>
			<p style="margin-left: 500px">Nombre archivo: <input type="text" name="nombre" id="nombre" placeholder="ej. Daniel" /></p>
			<p style="margin-left: 500px">Título: <input type="text" name="titulo" id="titulo" placeholder="ej. Clase 1" /></p><br>
			<textarea id="textArea" name="textArea" rows="10" cols="40"></textarea>
			<!--<div id="editor">
			  

			</div>-->
			<input type="submit" name="submit" id="submit" value="enviar"/>
		</form>
	</body>
</html>