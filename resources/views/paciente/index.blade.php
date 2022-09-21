@section('content')
    <div class="container">
        <div class="row" style="margin: 20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>tabla de pacientes</h2>
                    </div>
                    <div class="card-body">
                        <a href="paciente/create" class="btn btn-success btn-sm" title="add new empleado">nuevo paciente</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Edad</th>
                                        <th>Telefono</th>
                                        <th>Correo</th>
                                        <th>Sexo</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $paciente as $pacient )
                                    <tr>
                                        <td>{{ $pacient->id }}</td>
                                        <td>{{ $pacient->nombre }}</td>
                                        <td>{{ $pacient->apellido }}</td>
                                        <td>{{ $pacient->edad }}</td>
                                        <td>{{ $pacient->telefono }}</td>
                                        <td>{{ $pacient->correo }}</td>
                                        <td>{{ $pacient->sexo }}</td>

                                        <td><!--las url de la vista, edicion, borrado tienen que coincidir con los mismos nombres de las carpetas -->
                                            <a href="{{ url('/paciente',$pacient->id) }}" title="view paciente"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/paciente',$pacient->id . '/edit') }}" title="editar paciente"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                  <!--adentrando ala carpeta empleado con el metodo $emplead->id y empleamos la informacion edit que se mostrara el formulario-->
                                            <form method="POST" action="{{ url('/paciente'. '/' . $pacient->id) }}" accept-charset="UTF-8" style="display: inline">
                                                {{ method_field('DELETE') }}
                                                <!--medtodo 'delete' sera borrado por el id que se envie al borrado para ser aceptado-->
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="delet paciente" onclick="return confirm('confirmar delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i>Delet</button>
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
