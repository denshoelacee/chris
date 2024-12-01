<!DOCTYPE html>
<html>
<head>
    <!--KAPOYG UKAY CSS :>> 
    IF TERNARY OPERATOR IS TRUE THE ACTIVE CLASS WILL TAKE EFFECT -->
    <style>
        .active {
            background-color: rgb(226 232 240);
            font-weight: bold;
            color:#5A6ACF;
        }
    </style>
</head>
<body>
    <!-- <img src="{{ asset('/img/logo-removedbg.png') }}" alt="Inventory Management" class=""> -->
    <br>
    <br>
    <hr>
    <nav>    
        <ul class="p-1">
            <p class="text-[13px] ml-5">MENU</p>
            <!-- IF THE ROUTE IS DASHBOARD THEN IT AUTOMATICALLY ADD CLASS THAT CONTAINS COLOR TO BE ACTIVE, IF NOT IT RETURNS EMPTY-->
            <!--IT USES TERNARY OPERATOR -->
            <li class="m-2 p-1 hover:bg-blue-200 rounded-lg {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class='bx bx-home text-xl m-1'></i>
                <a class="text-sm" href="#">Dashboard</a>
            </li>
            <!-- IF THE ROUTE IS INVENTORY THEN IT AUTOMATICALLY ADD CLASS THAT CONTAINS COLOR TO BE ACTIVE, IF NOT IT RETURNS EMPTY-->
            <!--IT USES TERNARY OPERATOR -->
            <li class="m-2 p-1 hover:bg-blue-200 rounded-lg {{ request()->routeIs('inventory') ? 'active' : '' }}"> 
                <i class='bx bx-cart text-xl m-1'></i>
                <a class="text-sm" href="#">Inventory</a>
            </li>
            <li class="m-2 p-1 hover:bg-blue-200 rounded-lg">
                <i class='bx bx-package text-xl m-1'></i>
                <a class="text-sm" href="">Order</a>
            </li>
            <li class="m-2 p-1 hover:bg-blue-200 rounded-lg">
                <i class='bx bx-user text-xl m-1'></i>
                <a class="text-sm" href="">Supplier</a>
            </li>
            @if(auth()->user()->role == 'Admin')
                <li class="m-2 p-1 hover:bg-blue-200 rounded-lg">
                    <i class='bx bx-user-circle text-xl m-1'></i>
                    <a class="text-sm" href="{{ route('admin.users') }}">Users</a>
                </li>
                <li>
                    <a href="{{ route('manageRole') }}"><span class="fa fa-role mr-3"></span> Manage Role</a>
                </li>
            @endif
            <br>
            <p class="text-[13px] ml-5">OTHERS</p>
            <li class="m-2 p-1 hover:bg-blue-200 rounded-lg">
                <i class='bx bx-cog text-xl m-1'></i>
                <a class="text-sm" href="">Settings</a>
            </li>
            <li class="m-2 p-1 hover:bg-blue-200 rounded-lg">
                <i class='bx bxs-user text-xl m-1'></i>
                <a class="text-sm" href="">Accounts</a>
            </li>
            <li class="m-2 p-1 hover:bg-blue-200 rounded-lg">
                <i class='bx bxs-help-circle text-xl m-1'></i> 
                <a class="text-sm" href="">Help</a>
            </li>
        </ul>
    </nav>
</body>
</html>
