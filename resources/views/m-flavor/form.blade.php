<div class="box box-info padding-1">
    <div class="box-body">

        {{-- <div class="form-group">
            {{ Form::label('fl_id') }}
            {{ Form::text('fl_id', $mFlavor->fl_id, ['class' => 'form-control' . ($errors->has('fl_id') ? ' is-invalid' : ''), 'placeholder' => 'Fl Id']) }}
            {!! $errors->first('fl_id', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $mFlavor->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary mt-3">{{ __('Submit') }}</button>
    </div>
</div>
