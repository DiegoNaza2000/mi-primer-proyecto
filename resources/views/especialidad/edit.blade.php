<form action="{{ url('especialidad/' .$especialidad->id) }}" method="post">
    {!! csrf_field() !!}
    @method('PATCH')
    <!--usando el metodo PATCH que estamos usando en el formulario estamos enviando al controlador update-->
    <input type="text" name="name" id="name" value="{{ $especialidad->id }}" id="id">
    <br>
    <label>Nombre</label>
    <br>
    <input type="text" name="nombre" id="nombre" value="{{ $especialidad->nombre }}" class="form-control">
    <br>

    <input type="submit" value="update" class="btn btn-success"><!--cuando presionemos el boton de guardado se modificaran los datos-->
    <br>

</form>
