<div class="row">
    <div class="col-md-8">
        {{-- client name --}}
        <div class="form-group mb-4">
            <label for="name">Client name</label>
            <input type="text" name="name" id="name" 
                class="form-control @error('name') is-invalid @enderror" 
                placeholder="client name" value="{{ old('name') ?? ($client->name ?? '') }}">
        </div>

        {{-- client description --}}
        <div class="form-group mb-4">
            <label for="description">Description</label>
            <textarea name="description" id="description" 
                class="form-control @error('description') is-invalid @enderror" 
                rows="5"
                placeholder="client name">{{ old('name') ?? ($client->name ?? '') }}</textarea>
        </div>

        {{-- country --}}
        <div class="form-group mb-4">
            <label for="country">Select country</label>
            <input type="tel" name="country" id="country" 
                class="form-control @error('country') is-invalid @enderror" 
                placeholder="country" value="{{ old('country') ?? ($client->country ?? '') }}">
        </div>

        {{--  phone number --}}
        <div class="form-group mb-4">
            <label for="phone_number">Phone number</label>
            <input type="tel" name="phone_number" id="phone_number" 
                class="form-control @error('phone_number') is-invalid @enderror" 
                placeholder="+code 7823..." value="{{ old('phone_number') ?? ($client->phone_number ?? '') }}">
        </div>

        {{-- email --}}
        <div class="form-group mb-4">
            <label for="email">Email address</label>
            <input type="email" name="email" id="email" 
                class="form-control @error('email') is-invalid @enderror" 
                placeholder="emaill" value="{{ old('email') ?? ($client->email ?? '') }}">
        </div>

        {{-- address --}}
        <div class="form-group mb-4">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" 
                class="form-control @error('address') is-invalid @enderror" 
                placeholder="address" value="{{ old('address') ?? ($client->address ?? '') }}">
        </div>

        {{-- website --}}
        <div class="form-group mb-4">
            <label for="website">Website</label>
            <input type="url" name="website" id="website" 
                class="form-control @error('website') is-invalid @enderror" 
                placeholder="website url" value="{{ old('website') ?? ($client->website ?? '') }}">
        </div>
    </div>
</div>
