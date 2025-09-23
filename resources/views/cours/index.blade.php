{{dd($listeCours)}}

@if(session('success'))
    <p>
    {{session('success')}}
    </p>
@endif

<a href="{{route('cours.index')}}"> Annuler </a>
<form action ="{{}}" method="post">
    @method('DELETE')
</form>
