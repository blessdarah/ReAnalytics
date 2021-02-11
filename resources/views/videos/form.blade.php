<div class="form-group">
    <label for="title">Video name</label>
    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
        placeholder="Video title" value="{{ old('title') ?? ($video->title ?? '') }}">
</div>
<div class="form-group">
    <label for="embed-url">Video embed code</label>
    <input type="text" class="form-control @error('embed_link') is-invalid @enderror" name="embed_link" id="embed-url"
        placeholder="Video embed url" value="{{ old('embed_link') ?? ($video->embed_link ?? '') }}">
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control @error('description') is-invalid @enderror" class="editor" name="description"
        id="description" rows="5">{{ old('description') ?? ($video->description ?? '') }}</textarea>
</div>
