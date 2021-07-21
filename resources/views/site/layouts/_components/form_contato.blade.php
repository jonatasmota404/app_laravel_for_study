{{$slot}}
<form action="{{route('site.contact')}}" method="post">
    @csrf
    <input type="text" value="{{old('nome')}}" name="nome" placeholder="Nome" class="{{$borda}}">
    @if($errors->has('nome'))
        {{$errors->first('nome')}}
    @endif
    <br>
    <input type="text" name="telefone" value="{{old('telefone')}}" placeholder="Telefone" class="{{$borda}}">
    @if($errors->has('telefone'))
        {{$errors->first('telefone')}}
    @endif
    <br>
    <input type="text" name="email" value="{{old('email')}}" placeholder="E-mail" class="{{$borda}}">
    @if($errors->has('email'))
        {{$errors->first('email')}}
    @endif
    <br>
    <select name="motivo_contato_id" class="{{$borda}}">
        <option value="">Qual o motivo do contato?</option>
        @foreach($motivo_contato as $key => $value)
            <option value="{{$value->id}}" {{old('motivo_contato_id') == $value->id ? 'selected' : ''}}>{{$value->motivo_contato}}</option>
        @endforeach
    </select>
    @if($errors->has('motivo_contato_id'))
        {{$errors->first('motivo_contato_id')}}
    @endif
    <br>
    <textarea name="mensagem"  class="{{$borda}}">{{(!is_null(old('mensagem')))?old('mensagem'):'Preencha aqui sua mensagem'}}</textarea>
    @if($errors->has('mensagem'))
        {{$errors->first('mensagem')}}
    @endif
    <br>
    <button type="submit" class="{{$borda}}">ENVIAR</button>
</form>
{{--@if($errors->any())
    @foreach($errors->all() as $error)
        {{$error}}
        <br>
    @endforeach
@endif--}}
