@extends('layouts.plantilla')
@section('title', 'Create')    

@section('content')
<form action="">
    <label for="">
        Nombre Division:
        <br>
        <input type="text" name="name" id="">
    </label>
    <br>
    <label for="">
        Division Superior:
        <br>
        <input type="text" name="divsup" id="">
    </label>
    <br>
    <label for="">
        Colaboradores:
        <br>
        <input type="number" name="colab" id="">
    </label>
    <br>
    <label for="">
        Nivel:
        <br>
        <input type="number" name="level" id=""> 
    </label>
    <br>
    <label for="">
        Embajador:
        <br>
        <input type="text" name="embajador" id=""> 
    </label>
</form>
    
@endsection