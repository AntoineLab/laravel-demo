@if ($errors->any())
<div class="mb-4">
<ul>
@foreach ($errors->all() as $error)
<li class="text-red-500">{{ $error }}</li>
@endforeach
</ul>
</div>
@endif