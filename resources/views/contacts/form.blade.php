<div class="form-group">
    <label for="name">Link name</label>
    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
        placeholder="E.g: facebook" value="{{ old('name') ?? ($contact->name ?? '') }}" required>
</div>

<div class="form-group">
    <label for="icon">Link icon</label>
    <input type="text" name="icon" id="icon" class="form-control @error('icon') is-invalid @enderror"
        placeholder="Event icon" value="{{ old('icon') ?? ($contact->icon ?? '') }}" required>
</div>

<div class="form-group">
    <label for="link">Add URL</label>
    <input type="url" class="form-control @error('link') is-invalid @enderror" name="link" id="link"
        placeholder="Link url" value="{{ old('link') ?? ($contact->link ?? '') }}" required>
</div>

<div class="form-group mt-4">
    <p class="text-dark">Choose where to show link</p>
    <div class="p-2 border d-inline-block bg-light">
        <div class="form-check d-inline-block mr-4">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="show" id="show" value="1"
                    {{ isset($contact) && $contact->show === 1 ? 'checked' : '' }}>
                Show on site
            </label>
        </div>
        <div class="form-check d-inline-block">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="show" id="show" value="0"
                    {{ isset($contact) && $contact->show === 0 ? 'checked' : '' }}>
                Hide for now
            </label>
        </div>
    </div>
</div>
