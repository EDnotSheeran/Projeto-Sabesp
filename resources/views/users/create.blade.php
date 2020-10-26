<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuários</title>
</head>
<body>
    <h1>Página de cadastro de usuários</h1>

    <form action="{{ url('users') }}" method="POST">

        @csrf

        <div>
            <label>Nome</label>
            <input type="text" name="name">
        </div>

        <div>
            <label>E-mail</label>
            <input type="email" name="email">
        </div>

        <div>
            <label>Papel do usuário</label>
            <select name="role">
                <option>Administrador</option>
                <option>Gerente</option>
                <option>Operador</option>
            </select>
        </div>

        <div>
            <label>Senha</label>
            <input type="password" name="password">
        </div>

        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>
</html>