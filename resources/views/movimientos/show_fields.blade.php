<!-- Descripcion Field -->
<div class="col-sm-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $movimientos->descripcion }}</p>
</div>

<!-- Hora Entrada Field -->
<div class="col-sm-12">
    {!! Form::label('hora_entrada', 'Hora Entrada:') !!}
    <p>{{ $movimientos->hora_entrada }}</p>
</div>

<!-- Hora Salida Field -->
<div class="col-sm-12">
    {!! Form::label('hora_salida', 'Hora Salida:') !!}
    <p>{{ $movimientos->hora_salida }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $movimientos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $movimientos->updated_at }}</p>
</div>

