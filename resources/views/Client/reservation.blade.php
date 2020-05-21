@extends('layouts.new')

@section('content')
<div class="container">
        <div class="card-header">
            <h1>Clientes</h1>
            <a href="{{Route('client.create')}}" class="btn btn-primary">Añadir</a>
        </div>
        <div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nombre</th>
                </tr>
            </thead>
            <tbody>
               
                    <tr>
                    <td>{{$client->name}} - {{$client->currentRoom()->name ?? 'No tiene habitacion asignada'}}</a>
                    </td>
                    <td> 
                        <form action="{{Route('client.selectRoom', $client->id)}}" method="POST">
                            @csrf
                            @method('get')
                            
                            <select class="roomname" name="id">
                                <option selected>Elige habitacion</option>
                                @foreach ($rooms as $room)
                                <option value="{{$room->id}}">{{$room->name}}</option>
                                @endforeach
                            </select> 

                            <div class = "form-group">
                                <span>Fecha de ingreso</span>
                                <label>*</label>
                                <input type="date" name= "Date_From" class = "arrival">
                            </div>
                            <div class = "form-group">
                                <span>Fecha de salida</span>
                                <label>" "</label>
                                <input type="date" name= "Date_To" class = "arrival">
                            </div>
                            <input type="submit" value="Reservar habitación" class = "btn btn-primary">
                        </form>
                    </td>
                    </tr>
           
            </tbody>
        </table>
    </div>
    <div>
</div>
@endsection
