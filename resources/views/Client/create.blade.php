@extends('layouts.new')

@section('content')
<div class="container">
    <div class="card-header">Nuevo</div>
            <div class="booking-form">
				<div class="col-md-6">			 
					<form action="{{Route('client.store')}}" method="POST">
                    @csrf
                        <h5>Nombre</h5>
						<input type="text" name="name" value="">
						<h5>Telefono</h5>
						<input type="text" name="phone" value="">
                        <h5>Email</h5>
                        <input type="text" name="email" value="">
                        <input type="submit" value="Crear" class = "btn btn-primary">
					</form>
				</div>
            </div>
    
</div>
@endsection