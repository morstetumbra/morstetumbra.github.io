<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
    <div class="container">
       <b> <h1>Contacto</h1> </b>
        <div class="contact-info">
			<p><strong>Quejas o Sugerencias: "adminato@gahotmail.com"</strong></p>
            <p><strong>Teléfono:</strong> 5566432244</p>
            <p><strong>Correo Electrónico:</strong> BenessereFarmas@Gmail.com </p>
            <p><strong>Dirección:</strong> A.V Totchtli 29984, Colonia Ixtacalpa</p>
        </div>
        <div class="location">
           <b> <h2>Ubicación</h2> </b>
            <img src="images/mapa.png" alt="Ubicación">
        </div>
    </div>
</body>
</html>