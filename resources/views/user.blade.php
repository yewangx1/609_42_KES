<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Клиент</title>
</head>
<body>
    <h2>{{$user ? "Клиент: ".$user->name : 'Клиент не найден'}}</h2>
    @if($user)
        <h3>Счета клиента:</h3>
        <table border="1">
            <tr>
                <td>id счета</td>
                <td>Валюта</td>
            </tr>
            @foreach ($user->accounts as $account)
                <tr>
                    <td><a href="/account/{{$account->id}}">{{$account->id}}</a></td>
                    <td>{{$account->currency}}</td>
                </tr>
            @endforeach
        </table>
    @endif
</body>
</html>