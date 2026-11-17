<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Карта</title>
</head>
<body>
    <h2>{{$card ? "Карта № ".$card->card_number : 'Карта не найдена'}}</h2>
    @if($card)
        <h3>Тип карты: {{$card->card_type}}</h3>
        <h3>Привязанные счета:</h3>
        <table border="1">
            <tr><td>id счета</td><td>Валюта</td><td>Владелец</td></tr>
            @foreach ($card->accounts as $account)
                <tr>
                    <td><a href="/account/{{$account->id}}">{{$account->id}}</a></td>
                    <td>{{$account->currency}}</td>
                    <td>{{$account->user ? $account->user->name : 'Не указан'}}</td>
                </tr>
            @endforeach
        </table>
    @endif
</body>
</html>