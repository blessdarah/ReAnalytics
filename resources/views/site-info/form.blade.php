<div class="row">
    <div class="col-md-8">
        <div class="form-group"> <label for="address">Address</label>
            <textarea id="address" name="address" class="form-control">{{old('address') ?? $siteInfo->address ?? ''}}</textarea>
        </div>
        <div class="form-group"> <label for="email">Email</label>
            <textarea id="email" name="email" class="form-control">{{old('email') ?? $siteInfo->email ?? ''}}</textarea>
        </div>
        <div class="form-group"> <label for="about">About</label>
            <textarea id="about" name="about" class="form-control" rows="10">{{old('about') ?? $siteInfo->about ?? ''}}</textarea>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group"> <label for="logo">Site logo</label>
            @if(isset($siteInfo->logo)) <img src="{{asset($siteInfo->logo)
                ?? ''}}" class="img-fluid img-thumbnail mb-3" alt="Preview of
                uploaded logo"> <input type="file" class="form-control
                form-control-custom @error('logo') is-invalid @enderror" name="logo" id="logo" placeholder="service cover logo">
            @else <img src="https://via.placeholder.com/728x390.png?text=Upload+Cover+logo" class="img-fluid img-thumbnail mb-3" alt="Preview of uploaded
                logo" id="file-preview"> <input type="file" class="form-control form-control-custom @error('logo')
    is-invalid @enderror" name="logo" id="logo" placeholder="service cover
    logo"> @endif </div>
    </div>
</div>
