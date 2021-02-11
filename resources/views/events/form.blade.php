<div class="form-group">
    <label for="name">Event name</label>
    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
        placeholder="Event name" value="{{ old('name') ?? ($event->name ?? '') }}">
</div>

<div class="form-group">
    <label for="venue">Venue of the event</label>
    <input type="text" name="venue" id="venue" class="form-control @error('venue') is-invalid @enderror"
        placeholder="Event venue" value="{{ old('venue') ?? ($event->venue ?? '') }}">
</div>

<div class="form-group">
    <label for="flyer">Event cover flyer or image</label>
    <input type="file" class="form-control-file @error('flyer') is-invalid @enderror" name="flyer" id="flyer"
        placeholder="Event cover flyer">
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control @error('description') is-invalid @enderror" class="editor" name="description"
        id="description" rows="5">{{ old('description') ?? ($event->description ?? '') }}</textarea>
</div>

{{-- publication date --}}
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="start_date">Event start date</label>
        <input type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date"
            id="start_date" placeholder="dd/mm/yy" value="{{ old('start_date') ?? ($event->start_date ?? '') }}">
    </div>

    <div class="form-group col-md-6">
        <label for="end_date">Event end date</label>
        <input type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date" id="end_date"
            placeholder="dd/mm/yy" value="{{ old('start_date') ?? ($event->end_date ?? '') }}">
    </div>

</div>
