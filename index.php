<html>
	
	<head>
		<title>Meu primeiro site em PHP</title>
		
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		
		<style type="text/css">
			.linha {
				font-weight: bold;
				color: green;
				padding-left: 10px;
				line-height: 50px;
			}
		</style>
	</head>
	
	<body>
		<h1>Testando funcionalidades no PHP</h1>
		<h2>Uso de tags</h2>
		<h3>Headings</h3>
		O uso das headings é semelhante ao HTML. As tags vão do h1 ao h6.
		
		<h3>Texto</h3>
		O texto pode ir diretamente no body, sem a necessidade de uma tag como a <<p>> por exemplo.  
		
		</br>
		<?php
			for ( $i = 0 ; $i < 10 ; $i++) {
				print("<span class=\"linha\">Linha número " . $i . "</span><br />");
			}
		?>	
		
	</body>
	
	<script type="text/javascript">
	$(document).ready(function() {
		alert("Uhuuuuuuu!!!!11!!");
		});
	</script>
	
</html>

