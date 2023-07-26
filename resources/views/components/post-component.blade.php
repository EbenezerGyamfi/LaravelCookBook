<div>

    @if ($post->exists)
        <form method="POST" action="{{ route('post.update', $post->id) }}">
            @method('PUT')
        @else
            <form method="POST" action="/post">
    @endif
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" value="{{ $post->title }}" class="form-control mb-3" id="title" aria-describedby="title"
            name="title" placeholder="Enter Title">
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control mb-3" id="content" name="content" rows="3">{{ $post->content }}</textarea>
    </div>

    @if ($post->exists)
        <button type="submit" class="btn btn-primary">Update Post</button>
    @else
        <button type="submit" class="btn btn-primary">Add Post</button>
    @endif
    </form>
</div>
