<!-- errors -->
@if($errors->has())
	<div class="red-text text-darken-3 center-align center-block">
		{{--<i class="mdi-alert-error"></i>--}}
		<ul class="list-unstyled">
			@foreach($errors->all() as $error)
				<li><span>{{ $error }}</span></li>
			@endforeach
		</ul>
	</div>
@endif
<!-- /errors -->