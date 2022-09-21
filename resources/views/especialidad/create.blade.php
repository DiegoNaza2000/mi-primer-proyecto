
        <form action="{{ url('especialidad') }}" method="post">
            {!! csrf_field() !!}
            <label>Nombre</label>
            <br>
            <input type="text" name="nombre" id="nombre">
            <br>

            <input type="submit" value="save" class="btn btn-success">
            <br>

        </form>
