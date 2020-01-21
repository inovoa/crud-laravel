@extends('layouts.main')
@section('content')

<!-- Default form register -->
<form class="text-center border border-light p-5" action="#!">

    <p class="h4 mb-4">Alumno</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" name= "nombre" placeholder="Nombre">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" name= "apellidos" placeholder="Apellidos">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" name="eamail" placeholder="E-mail">


    <!-- Phone number -->
    <input type="text" id="defaultRegisterPhonePassword" class="form-control" name="telefono" placeholder="Telefono" >


    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Añadir</button>



</form>
<!-- Default form register -->



@endsection 