<li class="list-group-item" data-imageid="{{ $image_id }}">
    <div class="row">
        <div class="col-md-6">
            <label for="image[{{ $image_id }}][name]">Afbeelding</label>
            <input class="form-control" name="image[{{ $image_id }}][name]" type="image" value="{{ $image_name }}">
        </div>
        <div class="col-md-6">
            <label for="image[{{ $image_id }}][value]">Bijschrift</label>
            <input class="form-control col-md-6" name="image[{{ $image_id }}][annotation]" type="text" value="{{ $image_annotation }}">
        </div>
    </div>
</li>