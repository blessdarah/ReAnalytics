<form method="{{$method}}" action="{{$action}}" {{$attributes}}>
    @csrf
    @if(!in_array($method, ['GET', 'POST']))
    @method($method)
    @endif

    {{$slot}}

    <button class="btn btn-primary my-2">
        <i class="bx bx-save"></i>
        {{$buttonText ?? 'Save'}}
    </button>
</form>
