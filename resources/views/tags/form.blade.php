<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="tag name" value="{{ old('name') ?? ($tag->name ?? '') }}">
</div>
