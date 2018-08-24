<h1>Criar Disciplina</h1>

<form action="{{ route('disciplinas.store') }}" method="POST">

    @csrf

    <p>
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo">
    </p>

    <p>
        <label for="ementa">Ementa:</label>
        <textarea name="ementa" id="ementa" cols="30" rows="10"></textarea>
    </p>

    <button type="submit">Enviar</button>

</form>