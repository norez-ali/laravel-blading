<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Admin dashboard</h1>

    <div class="dropdown-inner">
        <ul class="link-list">
            <li><a href="{{ route('logout') }}" class="dropdown-item notify-item"
                    onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><em
                        class="icon ni ni-signout"></em><span>Sign
                        out</span></a></li>
        </ul>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</body>

</html>h
