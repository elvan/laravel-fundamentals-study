<p>
    @foreach ($tags as $tag)
        <a href="{{ route('posts.tags.index', ['id' => $tag->id]) }}"
            class="badge badge-success">{{ $tag->name }}</a>
    @endforeach
</p>
