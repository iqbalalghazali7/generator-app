<div class="box box-info padding-1">
    <div class="box-body">

        {{-- <div class="form-group">
            {{ Form::label('batchid') }}
            {{ Form::text('batchid', $mBatch->batchid, ['class' => 'form-control' . ($errors->has('batchid') ? ' is-invalid' : ''), 'placeholder' => 'Batchid']) }}
            {!! $errors->first('batchid', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            <label for="devtid" class="form-label">Grammage</label>
            <select class="form-control" id="grammid" name="grammid">
                <option value="">-- Choice Grammage --</option>
                @foreach ($mProductGrammages as $mProductGrammage)
                <option value="{{ $mProductGrammage->grammid }}">{{ $mProductGrammage->grammid }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-2">
            {{ Form::label('man_dt') }}
            {{ Form::date('man_dt', $mBatch->man_dt, ['class' => 'form-control mt-2' . ($errors->has('man_dt') ? ' is-invalid' : ''), 'placeholder' => 'Man Dt']) }}
            {!! $errors->first('man_dt', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mt-2">
            {{ Form::label('exp_dt') }}
            {{ Form::date('exp_dt', $mBatch->exp_dt, ['class' => 'form-control mt-2' . ($errors->has('exp_dt') ? ' is-invalid' : ''), 'placeholder' => 'Exp Dt']) }}
            {!! $errors->first('exp_dt', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        {{-- Penambahan elemen untuk menampilkan data yang diterima dari pilihan dropdown --}}
        <div class="form-group mt-2">
            <label for="prodid">Prodid:</label>
            <span id="prodid"></span>
        </div>
        <div class="form-group mt-2">
            <label for="fl_id">Fl_id:</label>
            <span id="fl_id"></span>
        </div>
        <div class="form-group mt-2">
            <label for="packid">Packid:</label>
            <span id="packid"></span>
        </div>
        <div class="form-group mt-2">
            <label for="gram">Gram:</label>
            <span id="gram"></span>
        </div>
        {{-- ... --}}

    </div>
    <div class="box-footer mt20">
        <a class="btn btn-danger mt-4" href="{{route('m-batch.index')}}">Cancel</a>
        <button type="submit" class="btn btn-primary mt-4">{{ __('Submit') }}</button>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#grammid').change(function() {
            var selectedGrammid = $(this).val();

            $.ajax({
                type: 'GET',
                url: '/get-data/' + selectedGrammid,
                success: function(response) {
                    // Menyimpan data yang diterima dari respons ke dalam variabel
                    var prodid = response.prodid;
                    var fl_id = response.fl_id;
                    var packid = response.packid;
                    var gram = response.gram;

                    // Memasukkan data ke dalam elemen HTML
                    $('#prodid').text(prodid);
                    $('#fl_id').text(fl_id);
                    $('#packid').text(packid);
                    $('#gram').text(gram);
                },
                error: function(xhr, status, error) {
                    console.log(error); // Menampilkan pesan error jika ada kesalahan
                }
            });
        });
    });
</script>
