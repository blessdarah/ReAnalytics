<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="body">Message content</label>
            <div id="editor"></div>
            <input type="hidden" name="body" id="body" value={{old('body') ?? $presidentsMessage->body ?? ''}}>
        </div>
    </div>
    <input type="hidden" name="author" value={{$presidentsMessage->author}}>

    <div class="col-md-4">
        <div class="form-group">
            <label for="image">Profile image</label>
            @if(isset($presidentsMessage->image))
            <img src="{{asset($presidentsMessage->image) ?? ''}}" class="img-fluid img-thumbnail mb-3" alt="Preview of uploaded image">
            <input type="file" class="form-control form-control-custom @error('image') is-invalid @enderror" name="image" id="image" placeholder="service cover image">
            @else
            <img src="https://via.placeholder.com/728x390.png?text=Upload+Cover+Image" class="img-fluid img-thumbnail mb-3" alt="Preview of uploaded image" id="file-preview">
            <input type="file" class="form-control form-control-custom @error('image') is-invalid @enderror" name="image" id="image" placeholder="service cover image">
            @endif
        </div>
    </div>
</div>
