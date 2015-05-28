<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>


<div class="container">

    @include('menu')

    @if ($errors->all())
        <ul>
        @foreach($errors->all() as $error)
            <li>{!! $error !!}</li>
        @endforeach
        </ul>
    @endif

    @yield('content')

</div>

</body>
</html>

