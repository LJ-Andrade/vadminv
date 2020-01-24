@extends('vadmin.layouts.main')

@section('header')
	@section('title', 'Vadmin | Tags')
	@section('header_title', 'Listado de Tags') 
	@section('options')
		<div class="actions">
			<a href="{{ url('vadmin/tags/create') }}" class="btn btnSm buttonOther">Nuevo Tag</a>
			<button class="OpenFilters btnSm buttonOther pull-right"><i class="ion-ios-search"></i></button>
		</div>	
	@endsection
@endsection

@section('styles')
	
@endsection

@section('content')
    <div class="container">
		@include('vadmin.blog.tags.searcher')
		
		<div class="col-md-12 animated fadeIn main-list">

			@foreach($tags as $item)
			<div id="Id{{ $item->id }}" class="Item-Row Select-Row-Trigger row item-row simple-list">
				{{-- Column --}}
				<div class="img">
			
				</div>

				<div class="content">
					{{-- Column --}}
					<div class="col-xs-6 col-sm-4 col-md-4 inner">
						<span><b>{{ $item->name }}</b></span><br>
					</div>
					{{-- Column --}}
					<div class="col-xs-6 col-sm-3 col-md-4 mobile-hide inner-tags">
					</div>
					
				</div>
				{{-- Batch Delete --}} 
				<div class="batch-delete-checkbox">
					<input type="checkbox" class="BatchDelete" data-id="{{ $item->id }}">
				</div>
				{{-- Hidden Action Buttons --}}
				<div class="List-Actions lists-actions Hidden">
					<a href="{{ url('vadmin/tags/' . $item->id . '/edit') }}" class="ShowEditBtn btnSmall buttonOk" data-id="{{ $item->id }}">
						<i class="ion-ios-compose-outline"></i>
					</a>
					<a target="_blank" class="btnSmall buttonOther">
						<i class="ion-ios-search"></i>
					</a>
					<button class="Delete btnSmall buttonCancel" data-id="{!! $item->id !!}">
						<i class="ion-ios-trash-outline"></i>
					</button>
					<a class="Close-Actions-Btn btn btn-danger btn-close">
						<i class="ion-ios-close-empty"></i>
					</a>
				</div>

			</div>

			@endforeach





			{{-- If there is no articles published shows this --}}
			@if(! count($tags))
			<div class="Item-Row item-row empty-row">
				No se han encontrado tags
			</div>
			@endif
		</div>
		{!! $tags->render(); !!}
		<br>

		<button id="BatchDeleteBtn" class="button buttonCancel batchDeleteBtn Hidden"><i class="ion-ios-trash-outline"></i> Eliminar seleccionados</button>
	</div>  
	<div id="Error"></div>
@endsection


@section('scripts')
	
@endsection

{{-- CUSTOM JS SCRIPTS--}}
@section('custom_js')

	<script type="text/javascript">

	$(document).on('click', '.Delete', function(e){
		e.preventDefault();
		var id    = $(this).data('id');
		var route = "{{ url('vadmin/ajax_delete_tag') }}/"+id+"";
		
		singleDelete(id, route, 'Cuidado!','Está seguro?');

	});


	$(document).on('click', '#BatchDeleteBtn', function(e) { 

		var rowsToDelete = [];  
		$(".BatchDelete:checked").each(function() {  
			rowsToDelete.push($(this).attr('data-id'));
		});

		var id = rowsToDelete;
		confirm_batch_delete(id,'Cuidado!','Está seguro que desea eliminar los usuarios?');
		
	});

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
				location.reload();;
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