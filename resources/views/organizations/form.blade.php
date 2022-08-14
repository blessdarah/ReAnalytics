<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="name">Organization name</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Sample name" value="{{ old('name') ?? ($organization->name ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="short_description">Description</label>
            <textarea name="short_description" id="short_description" class="form-control @error('short_description') is-invalid @enderror" placeholder="Short description" required>{{ old('short_description') ?? ($organization->short_description ?? '') }}</textarea>
        </div>

        <div class="form-group">
            <label for="focal_point_name">Focal point name</label>
            <input type="text" class="form-control @error('focal_point_name') is-invalid @enderror" name="focal_point_name" id="focal_point_name" placeholder="John doe" value="{{ old('focal_point_name') ?? ($organization->focal_point_name ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="focal_point_email">Focal point email</label>
            <input type="email" name="focal_point_email" class="form-control @error('focal_point_email') is-invalid @enderror" email="focal_point_email" id="focal_point_email" placeholder="johndoe@gmail.com" value="{{ old('focal_point_email') ?? ($organization->focal_point_email ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="focal_point_tel">Focal point contact</label>
            <input type="tel" name="focal_point_tel" class="form-control @error('focal_point_tel') is-invalid @enderror" tel="focal_point_tel" id="focal_point_tel" placeholder="673..." value="{{ old('focal_point_tel') ?? ($organization->focal_point_tel ?? '') }}" required>
        </div>
    </div>
</div>
<div class="row">
