<html>
	<head> 
		<title>Meu primeiro site em PHP" </title>
		
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		
		<style type="text/css">
			.linha {
				font-weight: bold;
				color: green;
				padding-left: 10px;
				line-height: 50px;
			}
		</style>
		
		<button class="accordion">Sessão 1</button>
<div class="panel">
  <p>teste1...</p>
</div>

<button class="accordion">Sessão 2</button>
<div class="panel">
  <p>teste2..</p>
</div>

<button class="accordion">Sessão 3</button>
<div class="panel">
  <p>teste3...</p>
</div>

<style>
.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
</style>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
</script>
		
	</head>
	
	<body>
		<?php
			for ( $i = 0; $i < 10; $i++) {
				print ( "<span class=\"linha\">Linha número " . $i . "</span><br />");
			}
		?>
		
	</body>
	
	<script type='text/javascript">
		$(document).ready(function() {
			alert('Woohoo!");
		});
	</script>
</html>