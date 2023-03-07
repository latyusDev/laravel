@extends('layout.app')
@section('content')
<h1>{{__('profile.welcome')}}</h1>
    <a href="/lang/hi"> {{__('profile.about')}} </a>
    <a href="/lang/en"> {{__('profile.contact')}} </a>
    <a href="/lang/ko"> {{__('profile.list')}} </a>
@endsection