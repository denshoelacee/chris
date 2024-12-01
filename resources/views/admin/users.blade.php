@extends('layout/layout')

@section('space-work')

    <h2 class="mb-4">Users</h2>

    <table class="table">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Approval Status</th>
            <th>Actions</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    {{ $user->role ?? 'User' }}
                </td>
                <td>
                    <form action="{{ route('users.approve', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-success">Approve</button>
                    </form>
                    <form action="{{ route('users.reject', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger">Reject</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection