<div class="box box-info padding-1">
    <div class="box-body">

        {{-- <div class="form-group">
            {{ Form::label('grammid') }}
            {{ Form::text('grammid', $mProductGrammage->grammid, ['class' => 'form-control' . ($errors->has('grammid') ? ' is-invalid' : ''), 'placeholder' => 'Grammid']) }}
            {!! $errors->first('grammid', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            <label for="devtid" class="form-label">Product</label>
            <select class="form-control" name="prodid">
                <option value="">-- Choice Product --</option>
                @foreach ($mproducts as $mproduct)
                <option value="{{ $mproduct->prodid }}">{{ $mproduct->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-2">
            <label for="devtid" class="form-label">Flavor</label>
            <select class="form-control" name="fl_id">
                <option value="">-- Choice Flavor --</option>
                @foreach ($mflavors as $mflavor)
                <option value="{{ $mflavor->fl_id }}">{{ $mflavor->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-2">
            <label for="devtid" class="form-label">Packages</label>
            <select class="form-control" name="packid">
                <option value="">-- Choice Packages --</option>
                @foreach ($mpackages as $mpackage)
                <option value="{{ $mpackage->packid }}">{{ $mpackage->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-2">
            {{ Form::label('Grammage') }}
            {{ Form::text('gram', $mProductGrammage->gram, ['class' => 'form-control mt-2' . ($errors->has('gram') ? ' is-invalid' : ''), 'placeholder' => 'Gram']) }}
            {!! $errors->first('gram', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary mt-4">{{ __('Submit') }}</button>
    </div>
</div>
