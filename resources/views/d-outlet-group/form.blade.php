<div class="box box-info padding-1">
    <div class="box-body">

        {{-- <div class="form-group">
            {{ Form::label('ogrpid') }}
            {{ Form::text('ogrpid', $dOutletGroup->ogrpid, ['class' => 'form-control' . ($errors->has('ogrpid') ? ' is-invalid' : ''), 'placeholder' => 'Ogrpid']) }}
            {!! $errors->first('ogrpid', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $dOutletGroup->name, ['class' => 'form-control mt-2' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mt-2">
            {{ Form::label('city') }}
            {{ Form::text('city', $dOutletGroup->city, ['class' => 'form-control mt-2' . ($errors->has('city') ? ' is-invalid' : ''), 'placeholder' => 'City']) }}
            {!! $errors->first('city', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary mt-4">{{ __('Submit') }}</button>
    </div>
</div>
