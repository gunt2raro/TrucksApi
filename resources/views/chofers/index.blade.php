<h2>Projects</h2>
 
@if ( !$chofers->count() )
	You have no chofers
@else
	<ul>
		@foreach( $chofers as $chofer )
			<li><a href="{{ route('chofers.show', $chofer->slug) }}">{{ $chofer->foto_url }}</a></li>
		@endforeach
	</ul>
@endif