
<div class="col-md-12 animated fadeIn main-list">
	@foreach($users as $item)
	
	@if($item->status == 'paused')
		<div id="Id{{ $item->id }}" class="Select-Row-Trigger Item-Row row item-row paused-item {{ $item->status }}">
	@else
		<div id="Id{{ $item->id }}" class="Select-Row-Trigger Item-Row row item-row {{ $item->status }}">
	@endif
		{{-- Column --}}
		<div class="img">
			@if($item->avatar != '')
			<img class="thumb" src="{{ asset('images/users/'.$item->avatar)   }}">
			@else
			<img class="thumb" src="{{ asset('images/gen/user-gen.jpg') }}">
			@endif
		</div>

		<div class="content">
			{{-- Column --}}
			<div class="col-xs-6 col-sm-4 col-md-4 inner">
				<span><b>{{ $item->name }}</b></span><br>
				<span class="small">{{ $item->email }}</span>
			</div>
			{{-- Column --}}
			<div class="col-xs-6 col-sm-3 col-md-4 mobile-hide inner-tags">
				<span class="custom-badge btnGreen"> {{ roleTrd($item->role) }}</span> <br>
				<span class="custom-badge btnBlue"> {{ groupsTrd($item->groups) }}</span>
			</div>
		</div>
		
		{{-- Batch Delete --}} 
		<div class="batch-delete-checkbox">
			<input type="checkbox" class="BatchDelete" data-id="{{ $item->id }}">
		</div>
		{{-- Actions --}}
		<div class="List-Actions lists-actions Hidden">
			{{-- Edit --}}
			<a href="{{ route('users.edit', $item->id) }}" class="btnSmall buttonOk">
				<i class="ion-ios-compose-outline"></i>
			</a>
			{{-- Show --}}
			{{--  <a href="{!! route('users.show', $item->id ) !!}" target="_blank" class="btnSmall buttonOther">
				<i class="ion-ios-search"></i>
			</a>  --}}
			{{-- Delete --}}
			@if($item->id == 1 || Auth::user()->id == $item->id)
				
			@else
			<button class="Delete btnSmall btnRed" data-id="{!! $item->id !!}">
				<i class="ion-ios-trash-outline"></i>
			</button>
			@endif
			{{-- Close Actions --}}
			<a class="Close-Actions-Btn btn btn-danger btn-close">
				<i class="ion-ios-close-empty"></i>
			</a>
		</div>
		{{-- /Actions --}}
	</div>
	@endforeach


	{{-- If there is no articles published shows this --}}
	@if(! count($users))
	<div class="item-row empty-row">
		No se han encontrado usuarios
	</div>
	@endif
</div>
{!! $users->render(); !!}
<br>


