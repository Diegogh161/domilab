<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-12 col-xs-12">
				<a href="#" class="navbar-brand">DOMILAB</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" class="fa fa-home"> INICIO</a></li>
					<li><a href="{{ route('usuario') }}" class="fa fa-users"> USUARIOS</a></li>
					<li><a href="{{ route('laboratorios') }}" class="fa fa-twitter"> LABORATORIOS</a></li>
					<!-- <li><a href="#" class="fa fa-institution"> COMPRAS</a></li>
					<li><a href="{{ route('ventasg') }}" class="fa fa-laptop"> VENTAS</a></li> -->
					<!-- <li><a href="{{ route('administrador') }}" class="fa fa-user"> MI PERFIL</a></li> -->
					<li><a href="{{ route('logout') }}" class="fa fa-sign-out"> CERRAR SESIÓN</a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>