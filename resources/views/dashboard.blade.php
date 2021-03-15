<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<script>
    function refresh()
    {
        location.reload();
    }
</script>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                    <form action="{{route('dashboard')}}" method="get">
                        @csrf
                        <select name="filter" id="filter" class="btn btn-secondary dropdown-toggle">
                            <option value="">All</option>
                            <option value="1">Active</option>
                            <option value="0">InActive</option>
                        </select>
                        
                        <button type="submit" class="btn btn-outline-success">Search</button>
                        <button type="submit" onclick = "refresh()" class="btn btn-primary">Refresh</button>
                    </form>
                    <a class="btn btn-primary" href="{{route('export')}}">Export User Data</a>
                    </br>
                    <table class="table tabel-hover" border="2">
                    <tr>
                        
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Registered Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach($users as $data)
                    <tr>
                        
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->created_at}}</td>
                        <td>@if($data->status)
                        Active @else InActive @endif</td>
                        <td><button type="submit" class="btn btn-danger">Delete</button>
                        | <a href="" class="btn btn-success">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
