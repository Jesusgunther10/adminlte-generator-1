<div class="table-responsive">
    <table class="table" id="categorias-table">
        <thead>
        <tr>
            <th>Vehiculo</th>
        <th>Descripcion</th>
        <th>Estado</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categorias as $categorias)
            <tr>
                <td>{{ $categorias->vehiculo }}</td>
            <td>{{ $categorias->descripcion }}</td>
            <td>{{ $categorias->estado }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['categorias.destroy', $categorias->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        @can('ver')
                        <a href="{{ route('categorias.show', [$categorias->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i></a>
                        @endcan
                        @can('editar')
                        <a href="{{ route('categorias.edit', [$categorias->id]) }}"
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
