@extends('vadmin.layouts.main')
@section('title', 'Vadmin | V de Verde')
@section('header_title', 'NEWSLETTER')
@section('header_subtitle')
@endsection


@section('content')

	 <div class="container">
		<div class="row">
            <h1>Suscriptores</h1>
            <hr class="softhr">
            <div class="col-md-12 animated fadeIn main-list">
                @foreach($suscriptors as $item)
                <div id="Id{{ $item->id }}" class="Item-Row Select-Row-Trigger row item-row simple-list">
                    {{-- Column / Image --}}
                    <div class=""></div>

                    <div class="content">
                        {{-- Column --}}
                        <div class="col-xs-6 col-sm-4 col-md-4 inner">
                            <span>{{ $item->email }}</span>
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
				@if(! count($suscriptors))
				<div class="Item-Row item-row empty-row">
					No hay suscriptores
				</div>
				@endif

   
            </div>
            {!! $suscriptors->render(); !!}

			
		</div>
        <button id="BatchDeleteBtn" class="button buttonCancel batchDeleteBtn Hidden"><i class="ion-ios-trash-outline"></i> Eliminar seleccionados</button>
	 </div>  
     <div id="Error"></div>

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
		var route = "{{ url('vadmin/delete_suscriptors') }}/"+id+"";
		deleteRecord(id, route, 'Cuidado!','Está segur@ que desea borrar este suscriptor?');
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
		var route = "{{ url('vadmin/delete_suscriptors') }}/"+id+"";
		deleteRecord(id, route, 'Cuidado!','Está segur@ que desea borrar este suscriptor?');
		
	});

	</script>

@endsection






