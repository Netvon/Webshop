<li class="list-group-item" data-specid="{{ $spec_id }}">
    <div class="row">
        <div class="col-md-6">
            <label for="spec[{{ $spec_id }}][name]">Naam</label>
            <input class="form-control" name="spec[{{ $spec_id }}][name]" type="text" value="{{ $spec_name }}">
        </div>
        <div class="col-md-6">
            <label for="spec[{{ $spec_id }}][value]">Waarde</label>
            <input class="form-control col-md-6" name="spec[{{ $spec_id }}][value]" type="text" value="{{ $spec_val }}">
        </div>
    </div>
</li>