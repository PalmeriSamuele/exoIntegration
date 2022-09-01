@extends('layout.app')


@section('content')
    @include('partials.navigation')
    @include('partials.header')
    @include('partials.services') services
    @include('partials.portfolio')portfolio

    @include('partials.about')about
    @include('partials.team')team
    @include('partials.clients')clients
    @include('partials.contact')contact

    @include('partials.footer')footer

    @include('partiasl.modals.modal1')
    @include('partiasl.modals.modal2')
    @include('partiasl.modals.modal3')
    @include('partiasl.modals.modal4')
    @include('partiasl.modals.modal5')
    @include('partiasl.modals.modal6')
    
@endsection