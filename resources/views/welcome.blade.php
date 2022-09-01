@extends('layout.app')


@section('content')
    @include('partials.navigation')
    @include('partials.header')
    @include('partials.services')
    @include('partials.portfolio')

    @include('partials.about')
    @include('partials.team')
    @include('partials.clients')
    @include('partials.contact')

    @include('partials.footer')

    @include('partials.modals.modal1')
    @include('partials.modals.modal2')
    @include('partials.modals.modal3')
    @include('partials.modals.modal4')
    @include('partials.modals.modal5')
    @include('partials.modals.modal6')
    
@endsection