@if ($errors->any())
<div>
    @foreach ($errors->all() as $error)
        <ul>{{$error}}</ul>
    @endforeach
</div>                
@endif