@extends('vadmin.layouts.main')

@section('title', 'Vadmin | portfolio')

@section('header')
	@section('header_title', 'Items del Portfolio') 
	@section('header_subtitle', '')
	@section('options')
		<div class="actions">
			<a href="{{ route('portfolio.create') }}"><button type="button" class=" animated fadeIn btnSm buttonOther">Nuevo Item</button></a>
			<button class="OpenFilters btnSm buttonOther pull-right"><i class="ion-ios-search"></i></button>
		</div>	
	@endsection
@endsection

@section('styles')
	{!! Html::style('plugins/chosen/chosen.min.css') !!}
	{!! Html::style('plugins/validation/parsley.css') !!}
@endsection

@section('content')
	@include('vadmin.portfolio.searcher')
	@component('vadmin.components.mainloader')
		@slot('text','Cargando...')
	@endcomponent
    <div class="container">
		@include('vadmin.portfolio.list')
		<br>
		<button id="BatchDeleteBtn" class="button buttonCancel batchDeleteBtn Hidden"><i class="ion-ios-trash-outline"></i> Eliminar seleccionados</button>
	</div>  
	<div id="Error"></div>
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
		var route = "{{ url('vadmin/ajax_delete_port_article') }}/"+id+"";
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

		var route = "{{ url('vadmin/ajax_batch_delete_port_articles') }}/"+id+"";

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

	// ------ Update Article Status ------ //
	$(document).on('click', '.UpdateStatusBtn', function(e) { 

		var id           = $(this).data('id');
		var newStatus    = $(this).data('switchstatus');
		var route        = "{{ url('/vadmin/updatePortItemStatus') }}/"+id+"";
		console.log(newStatus);
		console.log(id);
		
		$.ajax({
			url: route,
			method: 'POST',             
			dataType: 'JSON',
			data: { id: id, status: newStatus },
			beforeSend: function(){
				$('#Main-Loader').removeClass('Hidden');
			},
			success: function(data){
				alert_ok('Ok!');
				location.reload();
			},
			complete: function(data)
			{				
				$('#Main-Loader').addClass('Hidden');
			},
			error: function(data)
			{
				$('#Error').html(data.responseText);
				console.log(data.responseText);
			},
		});
	});

	</script>

@endsection