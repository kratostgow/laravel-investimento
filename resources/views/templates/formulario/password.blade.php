<label class="{{ $class ?? null }}">
    <span>{{ $label ?? $input ?? 'Erro: defina um nome para a label deste campo' }}</span>
    {!! Form::password($input, $attributes) !!}
</label>