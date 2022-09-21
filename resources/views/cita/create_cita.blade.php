<form action="{{ url('cita') }}" method="post">
    {!! csrf_field() !!}
    <label>Medico</label>
    <br>
    <input type="text" name="id_medicos" id="id_medicos">
    <br>
    <label>Paciente</label>
    <input type="text" name="id_pacientes" id="id_pacientes">
    <br>
    <label>Fecha</label>
    <input type="text" name="fecha" id="fecha">
    <br>
    <label>Hora</label>
    <input type="text" name="hora" id="hora">
    <br>

    <input type="submit" value="save" class="btn btn-success">
    <br>

</form>
