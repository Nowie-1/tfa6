<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title') | Corner Store POS</title>
    <style>
        body { font-family: Verdana, sans-serif; margin: 0; background: #eef5ee; color: #1b2a1b; }
        header { background: #2e6b3a; padding: 16px 28px; }
        header a { color: #f3fff3; text-decoration: none; margin-right: 22px; }
        header a:hover { text-decoration: underline; }
        .content { max-width: 920px; margin: 28px auto; background: #ffffff; padding: 24px 30px; border-top: 5px solid #2e6b3a; }
        table { width: 100%; border-collapse: collapse; margin-top: 14px; }
        th, td { border: 1px solid #bcd3bc; padding: 8px 10px; text-align: left; }
        th { background: #dcebdc; }
    </style>
</head>
<body>
    {{-- Navigation links to all four pages --}}
    <header>
        <a href="{{ route('landing') }}">Landing</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('customers.list') }}">Customer Accounts</a>
        <a href="{{ route('users.list') }}">User Accounts</a>
    </header>

    <div class="content">
        @yield('body')
    </div>
</body>
</html>
