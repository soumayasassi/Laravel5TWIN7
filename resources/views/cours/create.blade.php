
<form method="post" action="{{route('cours.store')}}">
    @csrf
    <label> titre</label>

    <input type="text" name="titre" id="titre">

    <label> description </label>

    <textarea type="text" name="description" id="description"></textarea>
    <label> durée</label>

    <input type="text" name="duree" id="duree">
<button type="submit"> Créer</button>
</form>
