<div class="box box-info padding-1">
    <div class="box-body">

        {{-- <div class="form-group">
            {{ Form::label('qrstid') }}
            {{ Form::text('qrstid', $mQrStatus->qrstid, ['class' => 'form-control' . ($errors->has('qrstid') ? ' is-invalid' : ''), 'placeholder' => 'Qrstid']) }}
            {!! $errors->first('qrstid', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            {{ Form::label('Status Name') }}
            {{ Form::text('name', $mQrStatus->name, ['class' => 'form-control mt-2' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary mt-4">{{ __('Submit') }}</button>
    </div>
</div>
