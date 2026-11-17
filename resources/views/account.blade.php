<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Счет</title>
</head>
<body>
    <h2>{{$account ? "Счет № ".$account->id." (".$account->currency.")" : 'Счет не найден'}}</h2>
    @if($account)
        <h3>Владелец: {{$account->user ? $account->user->name : 'Не указан'}}</h3>
        
        <h3>Приходные операции:</h3>
        <table border="1">
            <tr><td>id</td><td>Сумма</td><td>Дата</td></tr>
            @foreach ($account->incomes as $income)
                <tr>
                    <td>{{$income->id}}</td>
                    <td>{{$income->amount}}</td>
                    <td>{{$income->operation_datetime}}</td>
                </tr>
            @endforeach
        </table>

        <h3>Расходные операции:</h3>
        <table border="1">
            <tr><td>id</td><td>Сумма</td><td>Дата</td></tr>
            @foreach ($account->expenses as $expense)
                <tr>
                    <td>{{$expense->id}}</td>
                    <td>{{$expense->amount}}</td>
                    <td>{{$expense->operation_datetime}}</td>
                </tr>
            @endforeach
        </table>

        <h3>Привязанные карты:</h3>
        <table border="1">
            <tr><td>id карты</td><td>Номер</td><td>Тип</td></tr>
            @foreach ($account->cards as $card)
                <tr>
                    <td><a href="/card/{{$card->id}}">{{$card->id}}</a></td>
                    <td>{{$card->card_number}}</td>
                    <td>{{$card->card_type}}</td>
                </tr>
            @endforeach
        </table>
    @endif
</body>
</html>