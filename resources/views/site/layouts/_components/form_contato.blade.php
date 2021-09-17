{{ $slot }}
<form action={{ route('site.contato') }} method="POST">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $borda }}">
    <br>
    <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone" class="{{ $borda }}">
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="{{ $borda }}">
    <br>
    <select name="motivo_contato" class="{{ $borda }}">
        <option value="">Qual o motivo do contato?</option>
        @foreach($motivo_contato as $key => $value)
            <option value="{{ $key }}" {{old('motivo_contato' == $key) ? 'selected' : ''}}>{{$value}}</option>
        @endforeach
    </select>
    <br>
    <textarea name="mensagem" class="{{ $borda }}">{{ (old('mensagem') != '') ?  old('mensagem') : 'Preencha aqui a sua mensagem' }} </textarea>
    <br>
    <button type="submit" class="{{ $borda }}">ENVIAR</button>
</form>
<div style="position:absolute; top:0px; left:0px; width:100%; background:red" >
    <pre>
    {{ print_r($errors) }}
    </pre>
</div>