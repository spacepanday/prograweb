@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Libros</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('libro.create') }}" class="btn btn-info" >Añadir Libro</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>titulo</th>
               <th>imagen</th>
               <th>idautor</th>
               <th>ideditorial</th>
               <th>idcategoria</th>
               <th>idestadolibro</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($libro->count())  
              @foreach($libro as $libro)  
              <tr>
                <td>{{$libro->titulo}}</td>
                <td>{{$libro->imagen}}</td>
                <td>{{$libro->idautor}}</td>
                <td>{{$libro->idcategoria}}</td>
                <td>{{$libro->idestadolibro}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('LibroController@edit', $libro->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('LibroController@destroy', $libro->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>
 
          </table>
        </div>
      </div>
      {{ $libro->links() }}
    </div>
  </div>
</section>
 
@endsection