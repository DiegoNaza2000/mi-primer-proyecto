<div class="card-header">pagina de receta</div>
<div>
    <div class="card-body">
        <h5 class="card-title">Paciente : {{ $receta->id_pacientes }}</h5>
        <p class="card-text">Medico : {{ $receta->id_medicos }}</p>
        <p class="card-text">Enfermedad : {{ $receta->enfermedad }}</p>
        <p class="card-text">Medicamento : {{ $receta->medicamento }}</p>

    </div>
    <hr>
</div>
