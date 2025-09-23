
<form method="post" action="{{route('cours.update' , $cours->id)}}">
    @csrf
    @method('PUT')
    <label> titre</label>

    <input type="text" name="titre" id="titre" value="{{old('titre', $cours->titre)}}">

    <label> description </label>

    <textarea type="text" name="description" id="description">
        {{old('description', $cours->description)}}
    </textarea>
    <label> durée</label>

    <input type="text" name="duree" id="duree" value="{{old('duree', $cours->duree)}}">
    <button type="submit"> update</button>
</form>
