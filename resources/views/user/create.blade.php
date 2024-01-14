<html>
    <head></head>
    <body>
        <h1>Criar usuario</h1>
        <form method='POST' action="{{route('user.store')}}">
            @csrf
            @method('post')
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <label>Nome:</label>
            <input type='text' name='name' placeholder='nome'>

            <label>email:</label>
            <input type='text' name='email' placeholder='email'>

            <label>Senha:</label>
            <input type='password' name='password' placeholder='senha'>

            <input type="submit">
        </form>
    </body>
</html>