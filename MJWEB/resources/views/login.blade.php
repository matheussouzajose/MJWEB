<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> {{ $title }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css') }}">
</head>
<body>
    <section id="conteudo-view" class="login">
        
        <h1>Sistema MJWeb</h1>
        <h3>Sistema MJWeb Automação de Processos</h3>

        {!! Form::open(['route' => 'user.login', 'method' => 'post']) !!}

        <p>Acesse o Sistema</p>

        <label>
            {!! Form::text('username', null, ['class' => 'input', 'placeholder' => 'Usuário']) !!}    
        </label>

        <label>
            {!! Form::password('password', ['placeholder' => 'Senha']) !!}    
        </label>

            {!! Form::submit('Entrar') !!}
        
        {!! Form::close() !!}

    </section>

</body>
</html>