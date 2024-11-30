

    <h1>Register</h1>

    @if($errors->any())
        @foreach($errors->all() as $error)
        <p style="color:red;">{{ $error }}</p>
        @endforeach
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf

        <input type="text" name="name" placeholder="Enter Name">
        <br><br>
        <input type="email" name="email" placeholder="Enter Email">
        <br><br>
        <input type="password" name="password" placeholder="Enter Password">
        <br><br>
        <input type="password" name="password_confirmation" placeholder="Enter Confirm Password">
        <br><br>
        <label for="user-role">Select Role:</label>
            <select id="user-role" name="role">
                <option value="Rider">Rider</option>
                <option value="Admin">Admin</option>
                <option value="Supplier">Supplier</option>
            </select>
        <input type="submit" value="Register">

    </form>

    @if(Session::has('success'))
        <p style="color:green;">{{ Session::get('success') }}</p>
    @endif
