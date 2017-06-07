@extends('vadmin.layouts.main')

@section('header')
	@section('title', 'Vadmin | Tags')
	@section('header_title', 'Listado de Tags') 
	@section('options')
		<div class="actions">
			<button type="button" class="ShowNewBtn animated fadeIn btnSm buttonOther">Nuevo Tag</button>
			<button type="button" class="ShowListBtn animated fadeIn btnSm buttonOther Hidden">Listado</button>
		</div>	
	@endsection
@endsection

@section('styles')
	
@endsection

@section('content')
    <div class="container">
		@include('vadmin.blog.tags.searcher')
		<div class="row">		
			@include('vadmin.blog.tags.forms')
			<div id="List"></div>
			<br>
		</div>
		<button id="BatchDeleteBtn" class="button buttonCancel batchDeleteBtn Hidden"><i class="ion-ios-trash-outline"></i> Eliminar seleccionados</button>
	</div>  
	<div id="Error"></div>

	
@endsection


@section('scripts')
	
@endsection

{{-- CUSTOM JS SCRIPTS--}}
@section('custom_js')

	<script type="text/javascript">

	/////////////////////////////////////////////////
    //                     DELETE                  //
    /////////////////////////////////////////////////

	// -------------- Single Delete -------------- //
	// --------------------------------------------//
	$(document).on('click', '.Delete', function(e){
		e.preventDefault();
		var id    = $(this).data('id');
		var route = "{{ url('vadmin/ajax_delete_tag') }}/"+id+"";
		
		singleDelete(id, route, 'Cuidado!','Está seguro?');

	});


	// -------------- Batch Deletex -------------- //
	// --------------------------------------------//

	// ---- Batch Confirm Deletion ---- //
	$(document).on('click', '#BatchDeleteBtn', function(e) { 

		var rowsToDelete = [];  
		$(".BatchDelete:checked").each(function() {  
			rowsToDelete.push($(this).attr('data-id'));
		});

		var id = rowsToDelete;
		confirm_batch_delete(id,'Cuidado!','Está seguro que desea eliminar los usuarios?');
		
	});

	// ---- Delete ---- //
	function batch_delete_item(id) {

		var route = "{{ url('vadmin/ajax_batch_delete_tags') }}/"+id+"";

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
				ajax_list();
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