<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('qrcode') }}
            {{ Form::text('qrcode', $dQrCode->qrcode, ['class' => 'form-control' . ($errors->has('qrcode') ? ' is-invalid' : ''), 'placeholder' => 'Qrcode']) }}
            {!! $errors->first('qrcode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('qrid') }}
            {{ Form::text('qrid', $dQrCode->qrid, ['class' => 'form-control' . ($errors->has('qrid') ? ' is-invalid' : ''), 'placeholder' => 'Qrid']) }}
            {!! $errors->first('qrid', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('qrcode_name') }}
            {{ Form::text('qrcode_name', $dQrCode->qrcode_name, ['class' => 'form-control' . ($errors->has('qrcode_name') ? ' is-invalid' : ''), 'placeholder' => 'Qrcode Name']) }}
            {!! $errors->first('qrcode_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>