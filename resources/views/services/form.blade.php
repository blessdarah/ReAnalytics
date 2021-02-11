<div class="form-group">
    <label for="name">Service name</label>
    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
        placeholder="Service name" value="{{ old('name') ?? ($service->name ?? '') }}">
</div>

<div class="form-group">
    <label for="image">Service cover image</label>
    <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" id="image"
        placeholder="service cover image">
</div>

<div class="form-group">
    <label for="detail">Service detail</label>
    <textarea class="form-control @error('detail') is-invalid @enderror" class="editor" name="detail" id="detail"
        rows="5">{{ old('detail') ?? ($service->detail ?? '') }}</textarea>
</div>
