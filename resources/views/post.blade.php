<x-layout>
  <article>
        <a href="/">Go back to home</a>
        <h1>{!! $post->title !!}</h1>
        <p>
            <a href="#">{{ $post->category->name }}</a>
        </p>
        <div>
            {!! $post->body !!}
        </div>
    </article>
</x-layout>