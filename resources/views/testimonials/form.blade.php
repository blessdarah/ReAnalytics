<div class="form-group">
    <label for="author">Author</label>
    @error('author')
        <p class="small text-danger mb-1">{{ $message }}</p>    
    @enderror
    <input id="author" class="form-control @error('author') is-invalid @enderror" type="text" name="author" value="{{ $testimonial->author ?? old('author') ?? '' }}">
</div>

<div class="form-group">
    <label for="image">Author's image</label>
    @error('image')
        <p class="small text-danger mb-1">{{ $message }}</p>    
    @enderror
    <input id="image" class="form-control-file @error('image') is-invalid @enderror" type="file" name="image">
</div>

<div class="form-group">
    <label for="body">Testimonial content</label>
    @error('body')
        <p class="small text-danger mb-1">{{ $message }}</p>    
    @enderror
    <textarea id="body" class="form-control @error('body') is-invalid @enderror" name="body" rows="3">{!! $testimonial->body ?? old('body') ?? '' !!}</textarea>
</div>
