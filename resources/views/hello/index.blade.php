<html>
<body>
<h1>Blade/Index</h1>
@if ($msg != '')
    <p>こんにちは、{{ $msg }}さん。</p>
@else
    <p>なにか書いてください</p>
@endif
<form method="POST" action="/hello">
    {{ csrf_field() }}
    <input type="text" name="msg">
    <input type="submit">
</form>
</body>
</html>
