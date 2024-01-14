<html>
    <head></head>
    <body>
        <table border='1'>
            <h1>Usuarios:</h1>{{$teste}}
            <a href="{{route('user.create')}}"><h3>Novo Usuario</h3></a>

            <tr>
                <td>nome</td>
                <td>email</td>
                <td>senha</td>
                <td>criado em</td>
                <td>edit</td>
                <td>delete</td>
            </tr>

            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->created_at}}</td>
                <td>
                    <a href="{{route('user.edit', ['user' => $user])}}">edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('user.delete', ['user' => $user])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </body>
</html>