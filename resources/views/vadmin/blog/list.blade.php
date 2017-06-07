
<div class="col-md-12 animated fadeIn main-list">

	@foreach($articles as $item)
	<div id="Id{{ $item->id }}" class="Select-Row-Trigger Item-Row row item-row {{ $item->status }}">
		{{-- Column --}}
		<div class="img">
			
			@if(count($item->images))
			<img class="thumb" src="{{ asset('webimages/blog/'. $item->images->first()->name ) }}">
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
				@foreach ($item->tags as $tag)
					<span class="badge">{{ $tag->name }}</span>
				@endforeach
			</div>
		</div>

		
		{{-- Batch Delete --}} 
		<div class="batch-delete-checkbox">
			<input type="checkbox" class="BatchDelete" data-id="{{ $item->id }}">
		</div>
		{{-- Actions --}}
		<div class="List-Actions lists-actions Hidden">
			{{-- Edit --}}
			<a href="{{ route('blog.edit', $item->id) }}" class="btnSmall buttonOk">
				<i class="ion-ios-compose-outline"></i>
			</a>
			{{-- Show --}}
			<a href="{!! route('web.blog.article',$item->slug ) !!}" target="_blank" class="btnSmall buttonOther">
				<i class="ion-ios-search"></i>
			</a>
			{{-- Update Status --}}
			<div class="UpdateStatusBtn btnSmall buttonOther" data-id="{!! $item->id !!}">
				@if ($item->status == 'active')
					<div id="UpdateStatusBtn{{$item->id}}" data-switchstatus="paused"><i class="ion-ios-pause"></i></div>
				@elseif ($item->status == 'paused')
					<div id="UpdateStatusBtn{{$item->id}}" data-switchstatus="active"><i class="ion-ios-play"></i></div>
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
		No se han encontrado artículos
	</div>
	@endif
</div>
{!! $articles->render(); !!}
<br>


