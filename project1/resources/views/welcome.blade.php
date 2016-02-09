@extends ('layout')

@section ('content')

@foreach ($cards as $card)

        	{{$card->title}}



@endforeach

@stop