 
 
 
 <link rel="stylesheet" href="{{asset('assets/my-css/dataTables.dataTables.min.css')}}">

@section('js')

<script src="{{asset('assets/my-js/dataTables.js')}}"></script>
 
<script>
 
    let table = new DataTable('#mytable', {
        order: [ 'desc'],
        "bProcessing": true,
        "sAutoWidth": false,
    "bDestroy":true,
           
        
});
</script>

@endsection
