@section('content')
    <div class="container">
        <div class="row" style="margin: 20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>tabla de medicos</h2>
                    </div>
                    <div class="card-body">
                        <a href="receta/create" class="btn btn-success btn-sm" title="add new empleado">nuevo receta</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Paciente</th>
                                        <th>Medico</th>
                                        <th>Enfermedad</th>
                                        <th>Medicamento</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $receta as $recet )
                                    <tr>
                                        <td>{{ $recet->id }}</td>
                                        <td>{{ $recet->id_pacientes }}</td>
                                        <td>{{ $recet->id_medicos }}</td>
                                        <td>{{ $recet->enfermedad }}</td>
                                        <td>{{ $recet->medicamento }}</td>

                                        <td><!--las url de la vista, edicion, borrado tienen que coincidir con los mismos nombres de las carpetas -->
                                            <a href="{{ url('/receta',$recet->id) }}" title="view receta"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/receta',$recet->id . '/edit') }}" title="edit receta"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                  <!--adentrando ala carpeta empleado con el metodo $emplead->id y empleamos la informacion edit que se mostrara el formulario-->
                                            <form method="POST" action="{{ url('/receta'. '/' . $recet->id) }}" accept-charset="UTF-8" style="display: inline">
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
