<ul>
    @foreach ($disciplinas as $disciplina)
    
        <a href="/disciplinas/{{ $disciplina->id }}">
        
            <li>{{ $disciplina->titulo }}</li>
        
        </a>        

    @endforeach
</ul>