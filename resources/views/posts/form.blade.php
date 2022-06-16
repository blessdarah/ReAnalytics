<div class="row">
    {{-- left section --}}
    <div class="col-md-8">

        <div class="form-group">
            <label for="title">Post title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Post Title" value="{{ old('title') ?? ($post->title ?? '') }}">
        </div>
        <div class="form-group">
            <label for="slug">Slug (this is automatic)</label>
            <input type="text" name="slug" id="slug" class="form-control" placeholder="Post slug" value="{{ old('slug') ?? ($post->slug ?? '') }}" disabled>
        </div>
        <div class="form-group">
            <label for="summary">Summary</label>
            <textarea class="form-control @error('summary') is-invalid @enderror" name="summary" id="summary" rows="3">{{ old('summary') ?? ($post->summary ?? '') }}</textarea>
        </div>

        <div class="form-group">
            <label for="content">Post content</label>
            <div id="editor"></div>
            <input type="hidden" name="content" id="content" value={{old('content') ?? $post->content ?? ''}}>
        </div>
    </div> {{-- end left section --}}

    {{-- right section --}}
    <div class="col-md-4">
        <div class="form-group mb-4">
            @if(isset($post->image))
            <img src="{{asset($post->image) ?? ''}}" class="img-fluid img-thumbnail mb-3" alt="Preview of uploaded image">
            <input type="file" class="form-control form-control-custom @error('image') is-invalid @enderror" name="image" id="image" value="{{$post->image}}">
            @else
            <img src="https://via.placeholder.com/728x390.png?text=Upload+Cover+Image" class="img-fluid img-thumbnail mb-3" alt="Preview of uploaded image" id="file-preview">
            <input type="file" class="form-control form-control-custom @error('image') is-invalid @enderror" name="image" id="image" placeholder="service cover image">
            @endif
        </div>

        <div class="form-group">
            <label for="postStatus">Change status</label>
            <select id="postStatus" class="form-control" name="status" value="{{$post->status ?? ''}}">
                @foreach($post->statusTypes() as $key => $value)
                    @if(isset($post) && $key === $post->status)
                        <option value="{{$key}}" selected>{{$value}}</option>
                    @else
                        <option value="{{$key}}">{{$value}}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select id="category" class="form-control" name="category_id">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

    </div>

</div>
