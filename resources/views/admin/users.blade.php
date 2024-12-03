@extends('layout/admin')

@section('contents')

    <h2 class="text-2xl font-semibold mb-4 mt-5 ml-5">User Approval</h2>
    <div class="p-5">
    <div class="p-5 border-solid border-2 border-lg shadow-md">
    <table class="min-w-full table-auto bg-white rounded-lg">
        <div class="flex justify-between">
            <div>
                <p class="text-xl mb-5 ml-4 ">For Approval</p>
            </div>
            <div>
                <form class="w-3/6 relative">
                    <input type="text" class="w-full py-2  pr-10 pl-4 bg-slate-100 border border-gray-300 rounded-md shadow-sm focus:outline-none" placeholder="Search"/>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                      <button onclick="performSearch()" class="focus:outline-none">
                      </button>
                    </div>
                  </form>
            </div>
        </div>
        <div>
            <thead>
                <tr class=" text-left">
                    <th class="px-4 py-2 border-b">Username</th>
                    <th class="px-4 py-2 border-b">Email</th>
                    <th class="px-4 py-2 border-b">Role</th>
                    <th>Approval Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2">{{ $user->name }}</td>
                        <td class="px-4 py-2">{{ $user->email }}</td>
                        <td class="px-4 py-2">{{ $user->role ?? 'User' }}</td>
                        <td>
                            <form action="{{ route('users.approve', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="w-20 p-1 rounded-lg bg-[#00E03C]">Approve</button>
                            </form>
                            <form action="{{ route('users.reject', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="w-20 p-1 rounded-lg bg-[#FF0000]">Reject</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </div>
    </table>
    <div class="flex justify-between items-center px-4 py-2">
        <div class="text-sm text-gray-600">
            Showing {{ $users->count() }} of {{ $users->total() }} results
        </div>
        <div class="pagination-links">
            {{ $users->links('vendor.pagination.tailwind') }}
        </div>
    </div>
</div>
</div>
@endsection
