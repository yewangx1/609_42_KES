<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавление счета</title>
    <style> .is-invalid { color: red; } </style>
</head>
<body>
    <h2>Добавление счета</h2>
    <form method="post" action="{{url('account')}}">
        @csrf
        <label>Валюта (например, RUB)</label><br>
        <input type="text" name="currency" value="{{ old('currency') }}"/>
        @error('currency')
            <div class="is-invalid">{{ $message }}</div>
        @enderror
        <br><br>

        <label>Владелец счета:</label><br>
        <select name="user_id">
            <option style="display:none">
            @foreach ($users as $user)
                <option value="{{$user->id}}"
                    @if(old('user_id') == $user->id) selected @endif
                >{{$user->name}}</option>
            @endforeach
        </select>
        @error('user_id')
            <div class="is-invalid">{{ $message }}</div>
        @enderror
        <br><br>

        <input type="submit" value="Отправить">
    </form>
</body>
</html>