<!DOCTYPE html>
<html>
<head>
    <title>First Laravel Page</title>
</head>
<body>

<h1>Welcome to Laravel</h1>
<p>This is a paragraph.</p>
<br>
<a href="{{route('test', ['id' => 12, 'name' => 'Ahmet'])}}">Test Sayfası</a>

</body>
</html>
