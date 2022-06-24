<div class="row">
    <div class="col-md-8">

        <div class="form-group">
            <label for="name">Event name</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Event name" value="{{ old('name') ?? ($event->name ?? '') }}">
        </div>

        <div class="form-group">
            <label for="venue">Venue of the event</label>
            <input type="text" name="venue" id="venue" class="form-control @error('venue') is-invalid @enderror" placeholder="Event venue" value="{{ old('venue') ?? ($event->venue ?? '') }}">
        </div>

        <div class="row">

            {{-- publication date --}}
            <div class="form-group col-md-6">
                <label for="start_date">Event start date</label>
                <input type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date" id="start_date" placeholder="dd/mm/yy" value="{{ old('start_date') ?? ($event->start_date ?? '') }}">
            </div>

            <div class="form-group col-md-6">
                <label for="end_date">Event end date</label>
                <input type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date" id="end_date" placeholder="dd/mm/yy" value="{{ old('start_date') ?? ($event->end_date ?? '') }}">
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="hidden" name="description" id="description" value={{old('description') ?? $event->description ?? ''}}>
            <div id="editor"></div>
        </div>
    </div>


    <div class="col-md-4">


        <div class="form-group">
            <label for="flyer">Event cover flyer or image</label>
            @if(isset($post->image))
            <img src="{{asset($event->flyer) ?? ''}}" class="img-fluid img-thumbnail mb-3" alt="Preview of uploaded image">
            <input type="file" class="form-control form-control-custom @error('flyer') is-invalid @enderror" name="flyer" id="flyer" value="{{$event->flyer}}">
            @else
            <img src="https://via.placeholder.com/728x390.png?text=Upload+Cover+Image" class="img-fluid img-thumbnail mb-3" alt="Preview of uploaded flyer" id="file-preview">
            <input type="file" class="form-control form-control-custom @error('flyer') is-invalid @enderror" name="flyer" id="flyer" placeholder="Event flye/cover image">
            @endif
        </div>



    </div>
</div>
