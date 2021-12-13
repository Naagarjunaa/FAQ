@extends('layouts.app')
    @section('content')
    <div class="container">
        <h1>Showing FAQ Number: {{ $faq->id }}</h1>
        <div class="jumbotron text-center">
            <h2><strong>{{ $faq->question }}</strong></h2>
            <p>{{ $faq->answer }}<br></p>
            <p><strong>CATEGORY:</strong>{{ $faq->category }}<br></p>
            <p><strong>PRIORITY:</strong>{{ $faq->priority }}<br></p>
        </div>
    </div>
    @endsection
