<div class="card-header">pagina de pacientes</div>
<div>
    <div class="card-body">
        <h5 class="card-title">Nombre : {{ $paciente->nombre }}</h5>
        <p class="card-text">Apellido : {{ $paciente->apellido }}</p>
        <p class="card-text">Edad : {{ $paciente->edad }}</p>
        <p class="card-text">Telefono : {{ $paciente->telefono }}</p>
        <p class="card-text">Correo : {{ $paciente->correo }}</p>
        <p class="card-text">Sexo : {{ $paciente->sexo }}</p>
    </div>
    <hr>
</div>
