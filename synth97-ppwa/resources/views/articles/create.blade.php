@extends('layout')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1>New Article</h1>

        <form method="POST" action="/articles">
            @csrf

            <div class="field">
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input class="input @error('title') has-error @enderror" type="text" name="title" id="title">

                    @error ('title')
                    <p class="help has-error">{{ $errors->first('title') }}</p>
                    @enderror


                </div>
            </div>

            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>

                <div class="control">
                    <textarea class="textarea" name="excerpt" id="excerpt"></textarea>
                </div>
            </div>

            <div class="field">
                <label class="label" for="body">Body</label>

                <div class="control">
                    <textarea class="textarea" name="body" id="body"></textarea>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>



    </div>


</div>
@endsection
