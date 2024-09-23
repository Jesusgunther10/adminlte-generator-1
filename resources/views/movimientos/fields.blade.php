<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Hora Entrada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora_entrada', 'Hora Entrada:') !!}
    {!! Form::text('hora_entrada', null, ['class' => 'form-control']) !!}
</div>

<!-- Hora Salida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora_salida', 'Hora Salida:') !!}
    {!! Form::text('hora_salida', null, ['class' => 'form-control']) !!}
</div>