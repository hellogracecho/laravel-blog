<x-layout>
  <article>
        <a href="/">Go back to home</a>
        <h1>{{ $post->title }}</h1>
        <div>
            {!! $post->body !!}
        </div>
    </article>
</x-layout>