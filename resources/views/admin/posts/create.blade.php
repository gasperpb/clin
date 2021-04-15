<h1>Cadastrar Novo Post</h1>
<form action="{{route('posts.store')}}" method="post">
    <input type="text" name="_token" value="{{csrf_token()}}">
    <input type="text" name="title" id="title" placeholder="Título">
    <textarea name="content" id="content" cols="30" rows="4" placeholder="Conteudo"></textarea>
    <button type="submit">Enviar</button>
</form>
