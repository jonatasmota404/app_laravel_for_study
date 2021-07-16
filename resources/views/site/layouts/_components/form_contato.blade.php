{{$slot}}
<form action="{{route('site.contact')}}" method="post">
    @csrf
    <input type="text" name="nome" placeholder="Nome" class="{{$borda}}">
    <br>
    <input type="text" name="telefone" placeholder="Telefone" class="{{$borda}}">
    <br>
    <input type="text" name="email" placeholder="E-mail" class="{{$borda}}">
    <br>
    <select class="{{$borda}}">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="{{$borda}}">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="{{$borda}}">ENVIAR</button>
</form>
