
@extends('layouts.nav4')
@section('title')
Map 
@endsection
@section('content')




@foreach(App\Map::all() as $map)
<embed id="zoom_01" height="600px" width="100%"  type="application/pdf" data-zoom-image="large/storage/cover_images/{{$map->map}}" src="/storage/cover_images/{{$map->map}}" />
            


@endforeach




@endsection


@section('scripts')
<script>
$(document).ready(function() {
$('#data').DataTable();
} );
</script>
<script>
$('#delete').on('show.bs.model',function(event{
var  button=$(event.relatedTarget)
var user_id=button.data('userid')
var modal=$(this)
modal.find('.modal-body #user_id').val(user_id)




}));

@endsection