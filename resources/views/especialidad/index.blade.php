@section('content')
    <div class="container">
        <div class="row" style="margin: 20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>tabla de medicos</h2>
                    </div>
                    <div class="card-body">
                        <a href="especialidad/create" class="btn btn-success btn-sm" title="add new empleado">nueva especialidad</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $especialidad as $especialida )
                                    <tr>
                                        <td>{{ $especialida->id }}</td>
                                        <td>{{ $especialida->nombre }}</td>


                                        <td><!--las url de la vista, edicion, borrado tienen que coincidir con los mismos nombres de las carpetas -->
                                            <a href="{{ url('/especialidad',$especialida->id) }}" title="view especialidad"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/especialidad',$especialida->id . '/edit') }}" title="edit especialidad"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                  <!--adentrando ala carpeta empleado con el metodo $emplead->id y empleamos la informacion edit que se mostrara el formulario-->
                                            <form method="POST" action="{{ url('/especialidad'. '/' . $especialida->id) }}" accept-charset="UTF-8" style="display: inline">
                                                {{ method_field('DELETE') }}
                                                <!--medtodo 'delete' sera borrado por el id que se envie al borrado para ser aceptado-->
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="delet medico" onclick="return confirm('confirmar delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i>Delet</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
