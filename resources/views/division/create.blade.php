@extends('layouts.plantillas')
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
    <label for="">
        Colaboradores:
        <br>
        <input type="number" name="colab" id="">
    </label>
    <label for="">
        Nivel:
        <br>
        <input type="number" name="level" id=""> 
    </label>
    <label for="">
        Embajador:
        <br>
        <input type="text" name="embajador" id=""> 
    </label>
</form>
    
@endsection