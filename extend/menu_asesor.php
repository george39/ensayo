<nav class="black">
	<a href="" data-activates="menu" class="button-collpase"><i class="material-icons">menu</i></a>
</nav>

<ul id="menu" class="side-nav fixed"> 
	<li>
		<div class="userView">
			<div class="background">
				<img src="https://i.ytimg.com/vi/FuHcna7q15U/maxresdefault.jpg">
			</div> 
			<a href="" ><img src="../usuarios/<?php echo $_SESSION['foto'] ?>" class="circle" alt=""></a>
			<a href="" class="white-text"><?php echo $_SESSION['nombre'] ?></a> <br> <!--aqui nos traemos los datos de la bd del usuario -->
			<a href="" class="white-text"><?php echo $_SESSION['correo'] ?></a>
		</div>
	</li>
	<li><a href="../inicio"><i class="material-icons">home</i>Inicio</a></li>	
	<li><div class="divider"></div></li>

	<!--aqui el linck a los usuarios porque es solo para el administrador -->
	<li><a href="../login/salir.php"><i class="material-icons">power_settings_new</i>Salir</a></li>	
	<li><div class="divider"></div></li>
</ul>