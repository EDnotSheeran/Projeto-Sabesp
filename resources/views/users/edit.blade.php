<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuários</title>
</head>
<body>
    <h1>Página de edição de usuário</h1>

    <form action="{{ route('users.update', $user->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div>
            <label>Nome</label>
            <input type="text" name="name" value="{{ $user->name }}">
        </div>

        <div>
            <label>E-mail</label>
            <input type="email" name="email" value="{{ $user->email }}">
        </div>

        <div>
            <label>Papel do usuário</label>
            <select name="role">
                <option {{ $user->role == 'Administrador' ? 'selected' : '' }}>Administrador</option>
                <option {{ $user->role == 'Gerente' ? 'selected' : '' }}>Gerente</option>
                <option {{ $user->role == 'Operador' ? 'selected' : '' }}>Operador</option>
            </select>
        </div>

        <div>
            <label>Senha</label>
            <input type="password" name="password">
        </div>

        <div>
            <button type="submit">Atualizar</button>
        </div>
    </form>
</body>
</html>