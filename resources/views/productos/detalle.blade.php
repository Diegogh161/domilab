@extends('layouts.layou')

    @section('contenido')
	<section id="contact">
	    <div class="container">
	    	<div class="row">
                <div>
                    <a href="{{ route('laboratorios')}}"><h3 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>Regresar</span></h3></a>
	    		</div>
                <div class="col-md-12">
			    	<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>Laboratorio</span>
			    	</h2>
			    </div>
                <br>
                <table class="table">
                    <tbody  style="border: 2px solid #28a7e9">
                        <tr>
                            <td class="col-md-2" style="border: 2px solid #28a7e9">
                                <img src="{{ asset('images/'.$prod->img) }}" alt="{{ $prod->img }}"  width="150">
                            </td>
                            <td class="col-md-5">
                            <h4><b>Clave: </b>{{($prod->clave)}}</h4><br>
                            <h4><b>Nombre: </b>{{($prod->nombre)}}</h4><br>
                        </tr>
                    </tbody>
                </table>
	    	</div>
	    </div>
        <br><br><br><br><br>
    </section>
    @endsection