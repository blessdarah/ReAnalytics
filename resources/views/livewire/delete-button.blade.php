<form method="POST" action={{$routeName}}>
 @csrf
 @method('DELETE')

 <button type="submit" class="btn btn-sm btn-danger">{{$buttonText ?? 'delete'}}</button>
</form>
