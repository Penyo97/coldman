@extends('layout.master')
@section('title')
<title>Main</title>
@endsection
@section('content')
@if(session('bgcolor') && session('color'))
@php
 $bg = session('bgcolor');
 $color = session('color')
@endphp
<x-main :bg="$bg" :color="$color" />
@else
<x-main bg="CAF0F8" color="0077B6"/>
@endif
@endsection
