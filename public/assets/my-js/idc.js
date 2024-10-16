$.ajaxSetup({
  headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
$('.getCitzenName').on('change', function() {
    let idcvalue = $(this).val();
    let idp = $(this).attr('id');
    
      // let route = "{{ route('api.get.idc') }}";
      let route=$(this).data('url');
      // alert(route);

    $.ajax({
        type: 'post',
        url: route + '/' + idcvalue,
        // url:'/api/api-idc/'+idcvalue,
        success: function(res) {

            let card = `<p class="text-sm mr-2 text-muted">` + res['CI_FIRST_ARB'] + ' ' + res[
                    'CI_FATHER_ARB'] +
                ' ' +
                res['CI_GRAND_FATHER_ARB'] + ' ' + res['CI_FAMILY_ARB'] + `</p>`;

            
          $(`#${idp} + p` ).append(card);
        }
    })

})


