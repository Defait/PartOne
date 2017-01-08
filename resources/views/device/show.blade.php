@extends('layouts.default')

@section('content')

<p>Device: {{ $device->hostname }}</p>
<p>Vendor: {{ $vendorName }}</p>

@foreach($device->disks as $disk)
    <li>{{ $disk->name }}</li>
@endforeach

@stop