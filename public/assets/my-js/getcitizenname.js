 
         $('#idc').on('change', function() {
            let idcvalue = $('#idc').val();
            let route = "{{ route('api.get.idc') }}";

            $.ajax({
                type: 'get',
                url: route + '/' + idcvalue,
                success: function(res) {

                    let card = `<p>  صاحب الهوية: ` + res['CI_FIRST_ARB'] + ' ' + res['CI_FATHER_ARB'] + ' ' +
                        res['CI_GRAND_FATHER_ARB'] + ' ' + res['CI_FAMILY_ARB'] + `</p>`;

                    $('#citzenname').append(card);

                }
            })

        })
 