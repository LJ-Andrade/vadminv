@extends('vadmin.layouts.main')

{{-- PAGE TITLE --}}
@section('title', 'Vadmin | Usuarios')

{{-- STYLE INCLUDES --}}
@section('styles')
	{!! Html::style('plugins/chosen/chosen.min.css') !!}
	{!! Html::style('plugins/validation/parsley.css') !!}
@endsection

{{-- HEADER --}}
@section('header')
	@section('header_title', 'Listado de Usuarios') 
	@section('options')
		<div class="actions">
			<a href="{{ route('users.create') }}"><button type="button" class=" animated fadeIn btnSm buttonOther">Nuevo Usuario</button></a>
		</div>	
	@endsection

@endsection

{{-- CONTENT --}}
@section('content')
	@include('vadmin.users.searcher')
    <div class="container">
		<div class="row">		
			@include('vadmin.users.list')
			<br>
		</div>
		<button id="BatchDeleteBtn" class="button buttonCancel batchDeleteBtn Hidden"><i class="ion-ios-trash-outline"></i> Eliminar seleccionados</button>
	</div>  
	<div id="Error"></div>	
@endsection


{{-- SCRIPT INCLUDES --}}
@section('scripts')
	{!! Html::script('plugins/jqueryfiler/jquery.filer.min.js') !!}
	{!! Html::script('plugins/chosen/chosen.jquery.min.js') !!}
@endsection

{{-- CUSTOM JS SCRIPTS--}}
@section('custom_js')

	<script type="text/javascript">


	/////////////////////////////////////////////////
    //                     DELETE                  //
    /////////////////////////////////////////////////

	// -------------- Single Delete -------------- //

	$(document).on('click', '.Delete', function(e){
		e.preventDefault();
		var id    = $(this).data('id');
		var route = "{{ url('vadmin/ajax_delete_user') }}/"+id+"";
		console.log(route);
		singleDelete(id, route, 'Cuidado!','Está seguro?');
	});

	// -------------- Batch Deletex -------------- //

	// ---- Batch Confirm Deletion ---- //
	$(document).on('click', '#BatchDeleteBtn', function(e) { 

		var rowsToDelete = [];  
		$(".BatchDelete:checked").each(function() {  
			rowsToDelete.push($(this).attr('data-id'));
		});

		var id = rowsToDelete;
		confirm_batch_delete(id,'Cuidado!','Está seguro que desea eliminar los artículos?');
		
	});

	// ---- Perform Delete ---- //
	function batch_delete_item(id) {

		var route = "{{ url('vadmin/ajax_batch_delete_users') }}/"+id+"";

		$.ajax({
			url: route,
			method: 'post',             
			dataType: "json",
			data: {id: id},
			success: function(data){
				for(i=0; i < id.length ; i++){
					$('#Id'+id[i]).hide(200);
				}
				$('#BatchDeleteBtn').addClass('Hidden');
				location.reload();
				// $('#Error').html(data.responseText);
				// console.log(data);
			},
			error: function(data)
			{
				console.log(data);
				$('#Error').html(data.responseText);
			},
		});
	}



	</script>

@endsection