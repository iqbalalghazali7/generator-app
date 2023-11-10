<div class="box box-info padding-1">
    <div class="box-body">

        {{-- <div class="form-group">
            {{ Form::label('locid') }}
            {{ Form::text('locid', $dOutletLocation->locid, ['class' => 'form-control' . ($errors->has('locid') ? ' is-invalid' : ''), 'placeholder' => 'Locid']) }}
            {!! $errors->first('locid', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            <label for="devtid" class="form-label">Outlet Group</label>
            <select class="form-control" name="ogrpid">
                <option value="">-- Choice Outlet Group --</option>
                @foreach ($dOutletGroups as $dOutletGroup)
                <option value="{{ $dOutletGroup->ogrpid }}">{{ $dOutletGroup->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-2">
            {{ Form::label('name') }}
            {{ Form::text('name', $dOutletLocation->name, ['class' => 'form-control mt-2' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mt-2">
            {{ Form::label('address') }}
            {{ Form::textarea('address', $dOutletLocation->address, ['class' => 'form-control mt-2' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary mt-4">{{ __('Submit') }}</button>
    </div>
</div>
