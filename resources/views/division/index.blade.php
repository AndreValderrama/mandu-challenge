@extends('layouts.plantilla')
@section('title', 'Home')

@section('content')
<h1>Bienvenidos a la division</h1>
<table>
  <tr>
      <th>Division</th>
      <th>Division superior</th>
      <th>Colaboradores</th>      
      <th>Nivel</th>
      <th>Sudivisiones</th>
      <th>Embajadores</th>
  </tr>
    
    @foreach ($divisions as $division)
    <tr>
        <td>{{$division->name}}</td>
        <td>{{$division->divsup}}</td>
        <td>{{$division->colab}}</td>
        <td>{{$division->level}}</td>
        <td>{{$division->numdiv}}</td>
        <td>{{$division->embajador}}</td>
    </tr>
    @endforeach
   
</table>
{{$divisions->links()}}

@endsection()