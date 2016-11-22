@extends('layouts.default')

@section('content')

{{ $device->hostname }}


@foreach($device->parts as $part)
    <li>{{ $part->name }}</li>
@endforeach

@stop