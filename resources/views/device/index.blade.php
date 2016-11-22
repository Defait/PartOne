@extends('layouts.default')

@section('content')

@foreach($devices as $device)
    <a href="devices/{{$device->id}}">{{ $device->hostname }}</a>
@endforeach

@stop