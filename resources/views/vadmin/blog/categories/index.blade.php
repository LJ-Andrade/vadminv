
@extends('vadmin.layouts.main')

{{-- PAGE TITLE--}}
@section('title', 'Vadmin | Categorias')

{{-- HEAD--}}
@section('header')
	@section('header_title', 'Listado de Categorias') 
	@section('options')
		<div class="actions">
            <a href="{{ url('vadmin/categories/create') }}" class="btn btnSm buttonOther">Nueva Categoría</a>
			<button class="OpenFilters btnSm buttonOther pull-right"><i class="ion-ios-search"></i></button>
		</div>	
	@endsection
@endsection

{{-- STYLES--}}
@section('styles')
	{{-- Include Styles Here --}}
@endsection


{{-- CONTENT --}}
@section('content')
	@include('vadmin.blog.categories.searcher')
    <div class="container">
		<div class="row">		
            <div class="col-md-12 animated fadeIn main-list">
                @foreach($categories as $item)
                <div id="Id{{ $item->id }}" class="Item-Row Select-Row-Trigger row item-row simple-list">
                    {{-- Column / Image --}}
                    <div class=""></div>

                    <div class="content">
                        {{-- Column --}}
                        <div class="col-xs-6 col-sm-4 col-md-4 inner">
                            <span><b>{{ $item->name }}</b></span>
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
                        <a href="{{ url('vadmin/categories/' . $item->id . '/edit') }}" class="ShowEditBtn btnSmall buttonOk" data-id="{{ $item->id }}">
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

                {{-- If there is no published categories shows this --}}
				@if(! count($categories))
				<div class="Item-Row item-row empty-row">
					No se han encontrado categorias
				</div>
				@endif

   
            </div>
            {!! $categories->render(); !!}
            <br>

		</div>
		<button id="BatchDeleteBtn" class="button buttonCancel batchDeleteBtn Hidden"><i class="ion-ios-trash-outline"></i> Eliminar seleccionados</button>
	</div>  
	<div id="Error"></div>
	
@endsection

@section('scripts')
	{{-- Include Scripts Here --}}
@endsection

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
		var route = "{{ url('vadmin/ajax_delete_category') }}/"+id+"";
		

		singleDelete(id, route, 'Cuidado!','Si borra esta categoría se eliminarán todos los post relacionados con la misma. \n Se recomienda editar la categoría. Proceder igualmente?');
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
		confirm_batch_delete(id,'Cuidado!','Está seguro que desea eliminar?');
		
	});

	// ---- Delete ---- //
	function batch_delete_item(id) {

		var route = "{{ url('vadmin/ajax_batch_delete_categories') }}/"+id+"";
		

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



