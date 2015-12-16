<h2>Projects</h2>
 
@if ( !$tractors->count() )
	You have no tractors
@else
	<ul>
		@foreach( $tractors as $tractor )
			<li><a href="{{ route('tractors.show', $tractor->slug) }}">{{ $tractor->placas }}</a></li>
		@endforeach
	</ul>
@endif