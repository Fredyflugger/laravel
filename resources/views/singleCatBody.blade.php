<?php
$catID = array_search($cat, $newsCategory);
?>

<div class="col-md-8 blog-main">
@foreach ($newsData as $value)
@if ($catID === $value['category'])
<a href="{{ url()->current() }}/{{ $value['title'] }}">{{ $value['title'] }} {{$catID}}</a>
@endif
@endforeach
</div>
