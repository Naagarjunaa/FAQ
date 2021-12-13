@extends('layouts.app')
    @section('content')
    <div class="card">
        <div class="card-header">
            @if (isset($faq))
            <h1>Update FAQ</h1>
            @else
            <h1>Create FAQ</h1>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <div class="card-body">
            @if (isset($faq))
            <form action="{{ url('faqs/' . $faq->id) }}" method="POST">
                {{ method_field('PUT') }}

                @else
                <form action="{{ url('faqs') }}" method="POST">

                    @endif
                    @csrf

                    <div class="form-group" class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <input type="text" class="form-control" name="category" id="category"
                            value="{{ old('category') ?? (isset($faq) ? $faq->category : '') }}">
                    </div>
                    <div class="form-group" class="mb-3">
                        <label for="question" class="form-label">Question</label>
                        <input type="text" class="form-control" name="question" id="question"
                            value="{{ old('question') ?? (isset($faq) ? $faq->question : '') }}">
                    </div>
                    <div class="form-group" class="mb-3">
                        <label for="answer" class="form-label">Answer</label>
                        <textarea class="form-control" name="answer"
                            id="answer">{{ old('answer') ?? (isset($faq) ? $faq->answer : '') }}</textarea>
                    </div>
                    <div class="form-group" class="mb-3">
                        <label for="priority" class="form-label">Priority</label>
                        <input type="text" class="form-control" name="priority" id="priority"
                            value="{{ old('priority') ?? (isset($faq) ? $faq->priority : '') }}">
                    </div>

                    <input type="hidden" id="created_by" name="created_by">
                    <input type="hidden" id="updated_by" name="updated_by">

                    <input class="btn btn-primary" type="submit" value="Submit">
                </form>
        </div>
    </div>
@endsection
