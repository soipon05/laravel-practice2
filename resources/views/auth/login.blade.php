<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>ログインフォーム</h1>
    @isset($message)
        <p style="color: red;">{{ $message }}</p>
    @endisset
    <form action="/auth/login" method="post" name="loginform">
        {{ csrf_field() }}
        メールアドレス: <input type="text" name="email" value="{{ old('email') }}" size="30"><br />
        パスワード: <input type="password" name="password" size="30"><br />
        <button type="submit" name="action" value="send">ログイン</button>
    </form>
</body>
</html>