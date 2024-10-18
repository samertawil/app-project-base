$('#region_id').on('change', function() {

    $('#city_id').find('option').remove().end().append('<option value=""></option>').val('');
    $('#neighbourhood_id').find('option').remove().end().append('<option value=""></option>').val('');

})

$('#city_id').on('change', function() {

    $('#neighbourhood_id').find('option').remove().end().append('<option value=""></option>').val('');

})


$(document).ready(function() {
    let routeName = $('#regionDivId').data('url');

    $('.js-select2-address').on('change', function(event) {

        let fieldName = $(this).attr('name');
        
        let idName = $(this).attr('id');

        blockItem($('#address-cont')); 
      
        $.ajax({
            type: 'get',
            url: routeName + '/' + event.target.value + '/' + fieldName,

            success: function(res) {

                if (fieldName === 'region_id') {
                    res.forEach(element => {
                    
                        var card =
                            `<option value="${element.city_id}">${element.city_name}</option>`
                        $('#city_id').append(card);

                    });

                } else if (fieldName === 'city_id') {

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