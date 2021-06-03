<x-layout>
  <article>
        <a href="/">Go back to home</a>
        <h1>{!! $post->title !!}</h1>
        <p>
            by <a href="#">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>
        <div>
            {!! $post->body !!}
        </div>
    </article>
</x-layout>