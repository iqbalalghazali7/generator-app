<div class="box box-info padding-1">
    <div class="box-body">

        {{-- <div class="form-group">
            {{ Form::label('packid') }}
            {{ Form::text('packid', $mPackage->packid, ['class' => 'form-control' . ($errors->has('packid') ? ' is-invalid' : ''), 'placeholder' => 'Packid']) }}
            {!! $errors->first('packid', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            {{ Form::label('Package Name') }}
            {{ Form::text('name', $mPackage->name, ['class' => 'form-control mt-2' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary mt-3">{{ __('Submit') }}</button>
    </div>
</div>
