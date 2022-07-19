<div class="row">
    <div class="col-md-8">

        <div class="form-group">
            <label for="name">Project name</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Project name" value="{{ old('name') ?? ($project->name ?? '') }}">
        </div>
        <div class="form-group">
            <label for="summary">Project summary</label>
            <textarea class="form-control @error('summary') is-invalid @enderror" class="editor" name="summary" id="summary" rows="3">{{ old('summary') ?? ($project->summary ?? '') }}</textarea>
        </div>
        <div class="form-group">
            <label for="detail">Project detail</label>
            <div id="editor"></div>
            <input type="hidden" name="detail" id="detail" value={{old('detail') ?? $post->detail ?? ''}}>
        </div>
    </div>


    {{-- right section --}}
    <div class="col-md-4">
        <div class="form-group">
            <label for="image">Project image</label>
            @if(isset($project->image))
            <img src="{{asset($project->image) ?? ''}}" class="img-fluid img-thumbnail mb-3" alt="Preview of uploaded image">
            <input type="file" class="form-control form-control-custom @error('image') is-invalid @enderror" name="image" id="image" placeholder="service cover image">
            @else
            <img src="https://via.placeholder.com/728x390.png?text=Upload+Cover+Image" class="img-fluid img-thumbnail mb-3" alt="Preview of uploaded image" id="file-preview">
            <input type="file" class="form-control form-control-custom @error('image') is-invalid @enderror" name="image" id="image" placeholder="service cover image">
            @endif
        </div>
        <div class="form-group">
            <label for="status">Project status</label>
            <select class="form-control form-select" name="status">
                <option selected value="currently active">Currently active</option>
                <option value="completed">Completed</option>
                <option value="programmed">Programed</option>
            </select>
        </div>
        <div class="form-group">
            <label for="start_date">Start date</label>
            <input type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date" id="start_date" placeholder="dd/mm/yy" value="{{ old('start_date') ?? ($project->start_date ?? '') }}">
        </div>

        <div class="form-group">
            <label for="end_date">End date</label>
            <input type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date" id="end_date" placeholder="dd/mm/yy" value="{{ old('start_date') ?? ($project->end_date ?? '') }}">
        </div>
    </div>
</div>
