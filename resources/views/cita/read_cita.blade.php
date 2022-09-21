<div class="card-header">pagina de citas</div>
<div>
    <div class="card-body">
        <h5 class="card-title">Medico : {{ $cita->id_medicos }}</h5>
        <p class="card-text">Paciente : {{ $cita->id_pacientes }}</p>
        <p class="card-text">Fecha : {{ $cita->fecha }}</p>
        <p class="card-text">Hora : {{ $cita->hora }}</p>
    </div>
    <hr>
</div>
