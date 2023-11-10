<div class="box box-info padding-1">
    <div class="box-body">

        {{-- <div class="form-group">
            {{ Form::label('prodid') }}
            {{ Form::text('prodid', $mProduct->prodid, ['class' => 'form-control' . ($errors->has('prodid') ? ' is-invalid' : ''), 'placeholder' => 'Prodid']) }}
            {!! $errors->first('prodid', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            {{ Form::label('Product Name') }}
            {{ Form::text('name', $mProduct->name, ['class' => 'form-control mt-2' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary mt-3">{{ __('Submit') }}</button>
    </div>
</div>
