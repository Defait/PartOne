@extends('layouts.default')

@section('content')

{{ $device->hostname }}


@foreach($device->disks as $disk)
    <li>{{ $disk->name }}</li>
@endforeach

@stop