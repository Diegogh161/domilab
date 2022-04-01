@extends('layouts.layou')

    @section('contenido')
	<section id="contact">
	    <div class="container">
	    	<div class="row">
	    		<div class="col-md-12">
	    			<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>DOMILAB</span> LABORATORIOS</h2>
                </div>
                <div>
                    <form action="{{ route('buscar')}}" method="GET" name="buscar">
                        {{ csrf_field() }}
                        <div class="col-md-4">
                            <h3 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>Nombre</span></h3>
                            <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" placeholder="Busqueda por nombre">
                        </div>
                        <div class="col-md-4">
                            <h3 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">Clave<span></span></h3>
                            <input type="text" class="form-control" name="clave" value="{{ old('clave') }}" placeholder="Busqueda por clave">
                        </div>
                        <div class="col-md-6">
                        <input type="submit" value="Buscar" class="form-control">
                        </div>

                    </form>
                </div>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" style="border: 2px solid #28a7e9">Clave</th>
                            <th scope="col" style="border: 2px solid #28a7e9">Imagen</th>
                            <th scope="col" style="border: 2px solid #28a7e9">Nombre</th>
                            <th scope="col" style="border: 2px solid #28a7e9">Acciones</th>
                        </tr>
                    </thead>
                    @foreach($prods as $prod)
                    <tbody>
                        <tr>
                            <th scope="row" style="border: 2px solid #28a7e9"><h3>{{$prod->clave}}</h3></th>
                            <td style="border: 2px solid #28a7e9">
                                @if($prod->img == null)
                                    <img src="{{ asset('images/no-image.png') }}" alt="img"  width="100">
                                @else
                                    <img src="{{ asset('images/'.$prod->img) }}" alt="{{ $prod->img }}"  width="100">
                                @endif
                            </td>
                            <td style="border: 2px solid #28a7e9"><h3>{{$prod->nombre}}</h3></td>
                            <td style="border: 2px solid #28a7e9"><h4>
                                <form action="{{ route('detalle', ['id' => $prod->id_producto]) }}" method="GET" name="editar">
					                <input type="submit" class="form-control" value="Detalle">
				                </form>
                                <form action="{{ route('editarpr', ['id' => $prod->id_producto]) }}" method="GET" name="editar">
					                <input type="submit" class="form-control" value="Editar">
				                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
	    	</div>
	    </div>
	</section>
    @endsection