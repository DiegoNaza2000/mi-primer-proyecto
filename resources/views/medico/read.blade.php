<div class="card-header">pagina de medicos</div>
<div>
    <div class="card-body">
        <h5 class="card-title">Nombre : {{ $medico->nombre }}</h5>
        <p class="card-text">Telefono : {{ $medico->telefono }}</p>
        <p class="card-text">Correo : {{ $medico->correo }}</p>
        <p class="card-text">Especialidad : {{ $medico->id_especialidads }}</p>
    </div>
    <hr>
</div>
