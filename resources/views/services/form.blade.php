<div class="row">
    <div class="col-md-8">
        <div class="form-group mb-4">
            <label for="name">Service name</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Service name" value="{{ old('name') ?? ($service->name ?? '') }}">
        </div>

        <div class="form-group mb-4">
            <label for="description">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Short description">{!! old('description') ?? $service->description ?? ''!!}</textarea>
        </div>

        <div class="form-group mb-4">
            <label for="detail">Service detail (optional)</label>
            <input type="hidden" name="detail" id="detail">
            <div name="detail" id="editor" rows="5">{{ old('detail') ?? ($service->detail ?? '') }}</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group mb-4 position-sticky top-25">
            <label for="image">Service cover image</label>
            @if(isset($service->image))
            <img src="{{asset($service->image) ?? ''}}" class="img-fluid img-thumbnail mb-3" alt="Preview of uploaded image">
            <input type="file" class="form-control form-control-custom @error('image') is-invalid @enderror" name="image" id="image" value="{{$service->image}}">
            @else
            <img src="https://via.placeholder.com/728x390.png?text=Upload+Cover+Image" class="img-fluid img-thumbnail mb-3" alt="Preview of uploaded image" id="file-preview">
            <input type="file" class="form-control form-control-custom @error('image') is-invalid @enderror" name="image" id="image" placeholder="service cover image">
            @endif
        </div>
    </div>
</div>

<!-- Preview -->
