<div class="table-responsive">
    <table class="table" id="tarifas-table">
        <thead>
        <tr>
            <th>Descripcion</th>
        <th>Estado</th>
        <th>Monto</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tarifas as $tarifas)
            <tr>
                <td>{{ $tarifas->descripcion }}</td>
            <td>{{ $tarifas->estado }}</td>
            <td>{{ $tarifas->monto }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['tarifas.destroy', $tarifas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        @can('ver')
                        <a href="{{ route('tarifas.show', [$tarifas->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i></a>
                        @endcan
                        @can('ver')
                        <a href="{{ route('tarifas.edit', [$tarifas->id]) }}"
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
