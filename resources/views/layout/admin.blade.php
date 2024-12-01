<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_TITLE','Lorem Admin')}}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
</head>
<body>
    <div class="flex">
        <!-- ADMIN SIDEBAR -->
        <aside class="w-1/6 h-screen bg-slate-100">
            @include('components.admin-sidebar')
        </aside>

        <!-- MAIN CONTENT AREA-->
        <div class="flex-1 flex flex-col ">
            <!-- ADMIN HEADER -->
            <header class="p-2">
                @include('components.admin-header')
            </header>

            <!-- MAIN CONTENT DASHBOARD,INVENTORY,ORDER ETC. -->
            <main>
                @yield('contents')
            </main>
        </div>
    </div>
</body>
</html>
