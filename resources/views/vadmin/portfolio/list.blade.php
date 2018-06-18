
<div class="col-md-12 animated fadeIn main-list">
	@foreach($articles as $item)
	
	@if($item->status == 'paused')
		<div id="Id{{ $item->id }}" class="Select-Row-Trigger Item-Row row item-row paused-item {{ $item->status }}">
	@else
		<div id="Id{{ $item->id }}" class="Select-Row-Trigger Item-Row row item-row {{ $item->status }}">
	@endif
		{{-- Column --}}
		<div class="img">
			@if(count($item->thumb != ''))
			<img class="thumb" src="{{ asset('webimages/portfolio/'.$item->thumb)   }}">
			@else
			<img class="thumb" src="{{ asset('webimages/gen/genlogo.jpg') }}">
			@endif
		</div>

		<div class="content">
			{{-- Column --}}
			<div class="col-xs-6 col-sm-4 col-md-4 inner">
				<span><b>{{ $item->title }}</b></span><br>
				<span class="small">{{ $item->category->name }}</span>
			</div>
			{{-- Column --}}
			<div class="col-xs-6 col-sm-3 col-md-4 mobile-hide inner-tags">

			</div>
		</div>
		
		{{-- Batch Delete --}} 
		<div class="batch-delete-checkbox">
			<input type="checkbox" class="BatchDelete" data-id="{{ $item->id }}">
		</div>
		{{-- Actions --}}
		<div class="List-Actions lists-actions Hidden">
			{{-- Edit --}}
			<a href="{{ route('portfolio.edit', $item->id) }}" class="btnSmall buttonOk">
				<i class="ion-ios-compose-outline"></i>
			</a>
			{{-- Show --}}
			<a href="{!! route('portfolio.show', $item->id ) !!}" target="_blank" class="btnSmall buttonOther">
				<i class="ion-ios-search"></i>
			</a>
			{{-- Update Status --}}
			<div class="btnSmall buttonOther">
				@if ($item->status == 'active')
					<div class="UpdateStatusBtn" data-switchstatus="paused" data-id="{{ $item->id }}"><i class="ion-ios-pause"></i></div>
				@elseif ($item->status == 'paused')
					<div class="UpdateStatusBtn" data-switchstatus="active" data-id="{{ $item->id }}"><i class="ion-ios-play"></i></div>
				@endif
			</div>
			{{-- Delete --}}
			<button class="Delete btnSmall buttonCancel" data-id="{!! $item->id !!}">
				<i class="ion-ios-trash-outline"></i>
			</button>
			{{-- Close Actions --}}
			<a class="Close-Actions-Btn btn btn-danger btn-close">
				<i class="ion-ios-close-empty"></i>
			</a>
		</div>
		{{-- /Actions --}}
	</div>

	@endforeach





	{{-- If there is no articles published shows this --}}
	@if(! count($articles))
	<div class="item-row empty-row">
		No se han encontrado Items
	</div>
	@endif
</div>
{!! $articles->render(); !!}
<br>


