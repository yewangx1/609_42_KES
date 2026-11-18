<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Редактирование счета</title>
    <style> .is-invalid { color: red; } </style>
</head>
<body>
    <h2>Редактирование счета № {{$account->id}}</h2>
    <form method="post" action="{{url('account/update/'.$account->id)}}">
        @csrf
        <label>Валюта</label><br>
        <input type="text" name="currency" value="@if(old('currency')){{old('currency')}}@else{{$account->currency}}@endif"/>
        @error('currency')
            <div class="is-invalid">{{ $message }}</div>
        @enderror
        <br><br>

        <label>Владелец счета:</label><br>
        <select name="user_id">
            <option style="display:none">
            @foreach ($users as $user)
                <option value="{{$user->id}}"
                    @if(old('user_id'))
                        @if(old('user_id') == $user->id) selected @endif
                    @else
                        @if($account->user_id == $user->id) selected @endif
                    @endif
                >{{$user->name}}</option>
            @endforeach
        </select>
        @error('user_id')
            <div class="is-invalid">{{ $message }}</div>
        @enderror
        <br><br>

        <input type="submit" value="Сохранить">
    </form>
</body>
</html>