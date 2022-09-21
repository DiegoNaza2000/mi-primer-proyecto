<form action="{{ url('receta/' .$receta->id) }}" method="post">
    {!! csrf_field() !!}
    @method('PATCH')
    <!--usando el metodo PATCH que estamos usando en el formulario estamos enviando al controlador update-->
    <input type="text" name="name" id="name" value="{{ $receta->id }}" id="id">
    <br>
    <label>Paciente</label>
    <br>
    <input type="text" name="paciente" id="paciente" value="{{ $receta->paciente }}" class="form-control">
    <br>
    <label>Medico</label>
    <input type="text" name="medico" id="medico" value="{{ $receta->medico }}" class="form-control">
    <br>
    <label>Enfermedad</label>
    <input type="text" name="enfermedad" id="enfermedad" value="{{ $receta->enfermedad }}" class="form-control">
    <br>
    <label>medicamento</label>
    <input type="text" name="medicamento" id="medicamento" value="{{ $receta->medicamento }}" class="form-control">
    <br>

    <input type="submit" value="update" class="btn btn-success"><!--cuando presionemos el boton de guardado se modificaran los datos-->
    <br>

</form>
