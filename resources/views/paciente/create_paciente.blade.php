

<form action="{{ url('paciente') }}" method="post">
    {!! csrf_field() !!}
    <label>Nombre</label>
    <br>
    <input type="text" name="nombre" id="nombre">
    <br>
    <label>Apellido</label>
    <input type="text" name="apellido" id="apellido">
    <br>
    <label>Edad</label>
    <input type="text" name="edad" id="edad">
    <br>
    <label>Telefono</label>
    <input type="text" name="telefono" id="telefono">
    <br>
    <label>Correo</label>
    <input type="text" name="correo" id="correo">
    <br>
    <label>Sexo</label>
    <input type="text" name="sexo" id="sexo">
    <br>

    <input type="submit" value="save" class="btn btn-success">
    <br>

</form>
