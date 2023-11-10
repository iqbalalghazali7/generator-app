<div class="box box-info padding-1">
    <div class="box-body">

        {{-- <div class="form-group">
            {{ Form::label('qrid') }}
            {{ Form::text('qrid', $dQr->qrid, ['class' => 'form-control' . ($errors->has('qrid') ? ' is-invalid' : ''), 'placeholder' => 'Qrid']) }}
            {!! $errors->first('qrid', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            <label for="devtid" class="form-label">Batch ID</label>
            <select class="form-control" id="batchid" name="batchid">
                <option value="">-- Choice Batch ID --</option>
                @foreach ($mBatches as $mBatche)
                <option value="{{ $mBatche->batchid }}">{{ $mBatche->batchid }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-2">
            {{ Form::label('total') }}
            {{ Form::number('total', $dQr->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mt-2">
            {{ Form::label('ua') }}
            {{ Form::text('ua', $dQr->ua, ['class' => 'form-control' . ($errors->has('ua') ? ' is-invalid' : ''), 'placeholder' => 'Ua']) }}
            {!! $errors->first('ua', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mt-2">
            {{ Form::label('date') }}
            {{ Form::date('date', $dQr->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Date']) }}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        {{-- <div class="form-group mt-2">
            {{ Form::label('ip') }}
            {{ Form::text('ip', $dQr->ip, ['class' => 'form-control' . ($errors->has('ip') ? ' is-invalid' : ''), 'placeholder' => 'Ip']) }}
            {!! $errors->first('ip', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        {{-- <div class="form-group mt-2">
            {{ Form::label('kode_unik') }}
            {{ Form::text('kode_unik', $dQr->kode_unik, ['class' => 'form-control' . ($errors->has('kode_unik') ? ' is-invalid' : ''), 'placeholder' => 'Kode Unik']) }}
            {!! $errors->first('kode_unik', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}

    </div>
    <div class="box-footer mt20 text-center">
        <button type="submit" class="btn btn-primary mt-3">{{ __('Generate UniqCode') }}</button>
    </div>
</div>
