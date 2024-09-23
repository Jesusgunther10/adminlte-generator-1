<div class="table-responsive">
    <table class="table" id="bloques-table">
        <thead>
        <tr>
            <th>Descripcion</th>
        <th>Estado</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($bloques as $bloques)
            <tr>
                <td>{{ $bloques->descripcion }}</td>
            <td>{{ $bloques->estado }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['bloques.destroy', $bloques->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        @can('ver')
                        <a href="{{ route('bloques.show', [$bloques->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i></a>
                        @endcan
                        @can('editar')
                        <a href="{{ route('bloques.edit', [$bloques->id]) }}"
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
