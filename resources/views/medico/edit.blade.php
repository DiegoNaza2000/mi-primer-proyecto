<form action="{{ url('medico/' .$medico->id) }}" method="post">
    {!! csrf_field() !!}
    @method('PATCH')
    <!--usando el metodo PATCH que estamos usando en el formulario estamos enviando al controlador update-->
    <input type="text" name="name" id="name" value="{{ $medico->id }}" id="id">
    <br>
    <label>Nombre</label>
    <br>
    <input type="text" name="nombre" id="nombre" value="{{ $medico->nombre }}" class="form-control">
    <br>
    <label>Telefono</label>
    <input type="text" name="telefono" id="telefono" value="{{ $medico->telefono }}" class="form-control">
    <br>
    <label>Correo</label>
    <input type="text" name="correo" id="correo" value="{{ $medico->correo }}" class="form-control">
    <br>
    <label>Especialidad</label>
    <input type="text" name="id_especialidads" id="id_especialidads" value="{{ $medico->id_especialidads }}" class="form-control">
    <br>

    <input type="submit" value="update" class="btn btn-success"><!--cuando presionemos el boton de guardado se modificaran los datos-->
    <br>

</form>
