<!-- Descripcion Field -->
<div class="col-sm-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $estacionamiento->descripcion }}</p>
</div>

<!-- Id Bloque Field -->
<div class="col-sm-12">
    {!! Form::label('id_bloque', 'Id Bloque:') !!}
    <p>{{ $estacionamiento->id_bloque }}</p>
</div>

<!-- Id Categoria Field -->
<div class="col-sm-12">
    {!! Form::label('id_categoria', 'Id Categoria:') !!}
    <p>{{ $estacionamiento->id_categoria }}</p>
</div>

<!-- Estado Field -->
<div class="col-sm-12">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{{ $estacionamiento->estado }}</p>
</div>

<!-- Id Tarifas Field -->
<div class="col-sm-12">
    {!! Form::label('id_tarifas', 'Id Tarifas:') !!}
    <p>{{ $estacionamiento->id_tarifas }}</p>
</div>

<!-- Hora Entrada Field -->
<div class="col-sm-12">
    {!! Form::label('hora_entrada', 'Hora Entrada:') !!}
    <p>{{ $estacionamiento->hora_entrada }}</p>
</div>

<!-- Hora Salida Field -->
<div class="col-sm-12">
    {!! Form::label('hora_salida', 'Hora Salida:') !!}
    <p>{{ $estacionamiento->hora_salida }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $estacionamiento->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $estacionamiento->updated_at }}</p>
</div>

