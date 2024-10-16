$('#region_id').on('change', function() {

    $('#city_id').find('option').remove().end().append('<option value=""></option>').val('');
    $('#neighbourhood_id').find('option').remove().end().append('<option value=""></option>').val('');

})

$('#city_id').on('change', function() {

    $('#neighbourhood_id').find('option').remove().end().append('<option value=""></option>').val('');

})


$(document).ready(function() {
    let routeName = $('#regionDivId').data('url');

    $('.js-select2_address').on('change', function(event) {

        let field_name = $(this).attr('name');
        
        let idName = $(this).attr('id');

        blockItem($('#address-cont')); 
      
        $.ajax({
            type: 'get',
            url: routeName + '/' + event.target.value + '/' + field_name,

            success: function(res) {

                if (field_name === 'region_id') {
                    res.forEach(element => {
                        console.log(element.city_name);
                        var card =
                            `<option value="${element.city_id}">${element.city_name}</option>`
                        $('#city_id').append(card);

                    });

                } else if (field_name === 'city_id') {

                    res.forEach(element => {

                        var card =
                            `<option value="${element.neighbourhood_id}">${element.neighbourhood_name}</option>`
                        $('#neighbourhood_id').append(card);

                    });
                }


            }
        })
        unblockItem($('#address-cont'))
    })

  

});