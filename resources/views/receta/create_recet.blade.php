

<form action="{{ url('receta') }}" method="post">
    {!! csrf_field() !!}
    <label>Paciente</label>
    <br>
    <input type="text" name="id_pacientes" id="id_pacientes">
    <br>
    <label>Medico</label>
    <input type="text" name="id_medicos" id="id_medicos">
    <br>
    <label>Enfermedad</label>
    <input type="text" name="enfermedad" id="enfermedad">
    <br>
    <label>Medicamento</label>
    <input type="text" name="medicamento" id="medicamento">
    <br>

    <input type="submit" value="save" class="btn btn-success">
    <br>

</form>
