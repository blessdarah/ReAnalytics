<div class="row">
    <div class="col-md-8">

        <div class="form-group">
            <label for="name">Member's full name</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Member full name" value="{{ old('name') ?? ($member->name ?? '') }}">
        </div>

        {{-- Member position --}}
        <div class="form-group">
            <label for="position">Current job title (position)</label>
            <input type="text" name="position" id="position" class="form-control @error('position') is-invalid @enderror" placeholder="Member position" value="{{ old('position') ?? ($member->position ?? '') }}">
        </div>

        <div class="form-group">
            <label for="company">Works at?</label>
            <input type="text" name="company" id="company" class="form-control @error('company') is-invalid @enderror" placeholder="Company or organization name" value="{{ old('company') ?? ($member->company ?? '') }}">
        </div>

        <div class="form-group">
            <label for="profile">Member profile information</label>
            <textarea class="form-control @error('profile') is-invalid @enderror" class="editor" name="profile" id="profile" rows="5">{{ old('profile') ?? ($member->profile ?? '') }}</textarea>
        </div>

    </div>
    <div class="col-md-4">

        <div class="form-group">
            <label for="image">Provide a profile image for this member</label>
            <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" id="image" placeholder="Member cover image">
        </div>
    </div>
</div>
