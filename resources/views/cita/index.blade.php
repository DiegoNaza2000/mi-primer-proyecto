@section('content')
    <div class="container">
        <div class="row" style="margin: 20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>tabla de citas</h2>
                    </div>
                    <div class="card-body">
                        <a href="cita/create" class="btn btn-success btn-sm" title="add new empleado">nuevo paciente</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Medico</th>
                                        <th>Paciente</th>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $cita as $cit )
                                    <tr>
                                        <td>{{ $cit->id }}</td>
                                        <td>{{ $cit->id_medicos }}</td>
                                        <td>{{ $cit->id_pacientes }}</td>
                                        <td>{{ $cit->fecha }}</td>
                                        <td>{{ $cit->hora }}</td>


                                        <td><!--las url de la vista, edicion, borrado tienen que coincidir con los mismos nombres de las carpetas -->
                                            <a href="{{ url('/cita',$cit->id) }}" title="view cita"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/cita',$cit->id . '/edit') }}" title="editar cita"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                  <!--adentrando ala carpeta empleado con el metodo $emplead->id y empleamos la informacion edit que se mostrara el formulario-->
                                            <form method="POST" action="{{ url('/cita'. '/' . $cit->id) }}" accept-charset="UTF-8" style="display: inline">
                                                {{ method_field('DELETE') }}
                                                <!--medtodo 'delete' sera borrado por el id que se envie al borrado para ser aceptado-->
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="delet cita" onclick="return confirm('confirmar delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i>Delet</button>
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
