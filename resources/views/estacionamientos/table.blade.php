<div class="table-responsive">
    <table class="table" id="estacionamientos-table">
        <thead>
        <tr>
            <th>Descripcion</th>
        <th>Id Bloque</th>
        <th>Id Categoria</th>
        <th>Estado</th>
        <th>Id Tarifas</th>
        <th>Hora Entrada</th>
        <th>Hora Salida</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($estacionamientos as $estacionamiento)
            <tr>
                <td>{{ $estacionamiento->descripcion }}</td>
            <td>{{ $estacionamiento->id_bloque }}</td>
            <td>{{ $estacionamiento->id_categoria }}</td>
            <td>{{ $estacionamiento->estado }}</td>
            <td>{{ $estacionamiento->id_tarifas }}</td>
            <td>{{ $estacionamiento->hora_entrada }}</td>
            <td>{{ $estacionamiento->hora_salida }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['estacionamientos.destroy', $estacionamiento->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        @can('ver')
                        <a href="{{ route('estacionamientos.show', [$estacionamiento->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i></a>
                        @endcan
                        @can('editar')
                        <a href="{{ route('estacionamientos.edit', [$estacionamiento->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i></a>
                        @endcan
                        @can('eliminar')
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        @endcan
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
