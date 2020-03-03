@extends('layouts.app')
@section('content')
    <div class="wrapper">
    @include('includes.nav')
        <div id="content">
            @include('includes.header')
            <main role="main">
                @include('main.jumbotron')
                <div class="container-fluid text-center">
                   @include('main.work')
                </div>
                @include('main.services')
                @include('main.portofolio')
                @include('main.about')
                @include('main.articles')
                @include('main.contact')
            </main>
        </div>
    </div>
@stop
