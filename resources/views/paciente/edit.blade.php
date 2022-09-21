<form action="{{ url('paciente/' .$paciente->id) }}" method="post">
    {!! csrf_field() !!}
    @method('PATCH')
    <!--usando el metodo PATCH que estamos usando en el formulario estamos enviando al controlador update-->
    <input type="text" name="name" id="name" value="{{ $paciente->id }}" id="id">
    <br>
    <label>Nombre</label>
    <br>
    <input type="text" name="nombre" id="nombre" value="{{ $paciente->nombre }}" class="form-control">
    <br>
    <label>Apellido</label>
    <input type="text" name="apellido" id="apellido" value="{{ $paciente->apellido }}" class="form-control">
    <br>
    <label>Edad</label>
    <input type="text" name="edad" id="edad" value="{{ $paciente->edad }}" class="form-control">
    <br>
    <label>Telefono</label>
    <input type="text" name="telefono" id="telefono" value="{{ $paciente->telefono }}" class="form-control">
    <br>

    <input type="submit" value="update" class="btn btn-success"><!--cuando presionemos el boton de guardado se modificaran los datos-->
    <br>

</form>
