@extends('layouts.app')

@section('content')
<div class="container">
   <ul>
       @foreach ($posts as $item)

            <li>{{$item->title}}</li>   
       @endforeach
   </ul>
</div>
@endsection