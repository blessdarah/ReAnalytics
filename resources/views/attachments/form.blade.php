<div class="form-group">
    <label for="name">Attachment name</label>
    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
        placeholder="Attachment name" value="{{ old('name') ?? ($attachment->name ?? '') }}">
</div>

<div class="form-group">
    <label for="file">Upload file</label>
    <input type="file" class="form-control-file @error('file') is-invalid @enderror" name="file" id="file"
        placeholder="Attachment file">
</div>
