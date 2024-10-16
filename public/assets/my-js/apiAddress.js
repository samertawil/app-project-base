
$('#part_id').on('change', function() {

    $('#area_id').find('option').remove().end().append('<option value=""></option>').val('');
    $('#location_id').find('option').remove().end().append('<option value=""></option>').val('');
    
    });
    
    $('#area_id').on('change', function() {
    $('#location_id').find('option').remove().end().append('<option value=""></option>').val('');
     
    
    });


    
    $('.a1').on('change', function() {

        let val = $(this).val();

        let field_name = $(this).attr('name');
       
        let route = $('#address-cont').data('url');

        blockItem($('#address-cont'));  // this function from blockui.js file 

        $.ajax({

            type: 'get',
            url:route+'/'+val+'/'+field_name,
            success: function(res) {

                if (field_name === 'part_id') {
                  
                    // Array.from(res).forEach(element => {
                        res.forEach(element => {
                      
                        var card =`<option  value="${element.id}">${element.area_name}</option>`;
                        $('#area_id').append(card);
                    });
                } else if (field_name === 'area_id') {

                     
                    res.forEach(element => {

                        var card = 
                            `<option  value="${element.id}">${element.location_name}</option>`
                        $('#location_id').append(card);
                    });
                }
            }
        });

        unblockItem($('#address-cont'))
    });