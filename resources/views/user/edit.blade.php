<html>
    <head></head>
    <body>
        <h1>Editar usuario</h1>
        <form method='POST' action="{{route('user.update', ['user' => $user])}}">
            @csrf
            @method('put')
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <label>Nome:</label>
            <input type='text' name='name' placeholder='nome' value="{{$user->name}}">

            <label>email:</label>
            <input type='text' name='email' placeholder='email' value="{{$user->email}}">

            <label>Senha:</label>
            <input type='password' name='password' placeholder='senha' value="{{$user->password}}">

            <input type="submit">
        </form>
    </body>
</html>