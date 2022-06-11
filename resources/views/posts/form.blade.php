<div class="form-group">
    <label for="title">Post title</label>
    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Post Title" value="{{ old('title') ?? ($post->title ?? '') }}">
</div>
<div class="form-group">
    <label for="slug">Slug (this is automatic)</label>
    <input type="text" name="slug" id="slug" class="form-control" placeholder="Post slug" value="{{ old('slug') ?? ($post->slug ?? '') }}" disabled>
</div>

<div class="form-group">
    <label for="image">Post cover image</label>
    <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" id="image" placeholder="Post cover image">
</div>

<div class="form-group">
    <label for="summary">Summary</label>
    <textarea class="form-control @error('summary') is-invalid @enderror" name="summary" id="summary" rows="3">{{ old('summary') ?? ($post->summary ?? '') }}</textarea>
</div>

<div class="form-group">
    <label for="content">Post content</label>
    <div id="editor"></div>
    <input type="hidden" name="content" id="content" value={{old('content') ?? $post->content ?? ''}}>
</div>

<div class="form-group">
    <p>Choose publication status</p>
    <div class="form-check form-check-inline">
        <label class="form-check-label mr-4">
            <input class="form-check-input" type="radio" name="is_published" id="publish-true" value="1">
            Yes
            publish immediately
        </label>
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="is_published" id="publish-false" checked value="0">
            I'll publish later
        </label>
    </div>
</div>

{{-- publication date --}}
<div class="form-group">
    <label for="published_on">Post cover image</label>
    <input type="date" class="form-control @error('published_on') is-invalid @enderror" name="published_on" id="published_on" placeholder="dd/mm/yy" value="{{ old('published_on') ?? ($post->published_on ?? '') }}">
</div>
