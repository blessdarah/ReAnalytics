<div class="form-group">
    <label for="name">Category name</label>
    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
        placeholder="E.g: facebook" value="{{ old('name') ?? ($category->name ?? '') }}" required>
</div>

<div class="form-group">
    <label for="description">Description</label>
    <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror"
        placeholder="Event description" value="{{ old('description') ?? ($category->description ?? '') }}" required>
</div>

