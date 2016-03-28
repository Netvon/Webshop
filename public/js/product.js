/**
 * Created by Tom on 28-3-2016.
 */
$(document).ready(function(){
    $('#tags_list').select2();
    $('#categories_list').select2();

    $('#product-spec-add').click(function(){
        var specList = $('#product-spec-list');

        var newSpecid = 0;

        console.log($('#product-spec-list .list-group-item:last-child'));

        if($('#product-spec-list .list-group-item:last-child').length > 0)
            newSpecid = $('#product-spec-list .list-group-item:last-child').data('specid') + 1;

        $('<li class="list-group-item" data-specid="'+newSpecid+'">' +
            '<div class="row">' +
            '<div class="col-md-6">' +
            '<label for="spec['+newSpecid+'][name]">Naam</label>' +
            '<input class="form-control" name="spec['+newSpecid+'][name]" type="text">' +
            '</div>' +
            '<div class="col-md-6">' +
            '<label for="spec['+newSpecid+'][value]">Waarde</label>' +
            '<input class="form-control col-md-6" name="spec['+newSpecid+'][value]" type="text">' +
            '</div>' +
            '</div>' +
            '</li>').appendTo(specList);
    });
});
