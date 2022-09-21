



        <form action="{{ url('medico') }}" method="post">
            {!! csrf_field() !!}
            <label>Nombre</label>
            <br>
            <input type="text" name="nombre" id="nombre">
            <br>
            <label>Telefono</label>
            <input type="text" name="telefono" id="telefono">
            <br>
            <label>Correo</label>
            <input type="text" name="correo" id="correo">
            <br>
            <label>Especialidad</label>
            <input type="text" name="id_especialidads" id="id_especialidads">
            <br>

            <input type="submit" value="save" class="btn btn-success">
            <br>

        </form>
