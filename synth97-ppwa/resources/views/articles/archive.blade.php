@extends ('layout')

@section ('content')
  <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                @foreach ($allArticles as $article)
                    <div class="article">
                        <h3><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h3>
                        <p>{{ $article->excerpt }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
