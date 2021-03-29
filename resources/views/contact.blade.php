<?php
@if(count($peoples))
<ul>
@foreach($peoples as $person)
 
<li>{{$person}}</li>
 

@endforeach
</ul>

@endif

?>
