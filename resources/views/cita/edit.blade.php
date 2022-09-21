<form action="{{ url('cita/' .$cita->id) }}" method="post">
    {!! csrf_field() !!}
    @method('PATCH')
    <!--usando el metodo PATCH que estamos usando en el formulario estamos enviando al controlador update-->
    <input type="text" name="name" id="name" value="{{ $cita->id }}" id="id">
    <br>
    <label>Medico</label>
    <br>
    <input type="text" name="id_medicos" id="id_medicos" value="{{ $cita->id_medicos }}" class="form-control">
    <br>
    <label>Paciente</label>
    <input type="text" name="id_pacientes" id="id_pacientes" value="{{ $cita->id_pacientes }}" class="form-control">
    <br>
    <label>Fecha</label>
    <input type="text" name="fecha" id="fecha" value="{{ $cita->fecha }}" class="form-control">
    <br>
    <label>Hora</label>
    <input type="text" name="hora" id="hora" value="{{ $cita->hora }}" class="form-control">
    <br>

    <input type="submit" value="update" class="btn btn-success"><!--cuando presionemos el boton de guardado se modificaran los datos-->
    <br>

</form>
