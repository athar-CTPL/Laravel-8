<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                    <a href="{{route('dashboard')}}" class="btn btn-primary">Back</a>
                <div class="card-body">
                <h1>Your Details:</h1></br>
                <table>
                    
                    <tr>
                        <td><b><h2>Name:</b></h2></td>
                        <td><h2>{{$users->name}}</h2></td>
                    </tr>
                    <tr>
                        <td><b><h2>Email:</b></h2></td>
                        <td><h2><a href="mailto:{{$users->email}}">{{$users->email}}</h2></td>
                    </tr>
                    <tr>
                        <td><b><h2>Phone:</b></h2></td>
                        <td><h2>{{$users->phone}}</h2></td>
                    </tr>
                    <tr>
                        <td><b><h2>Registerd Date:</b></h2></td>
                        <td><h2>{{$users->created_at}}</h2></td>
                    </tr>
                    <tr>
                        <td><b><h2>Status:</b></h2></td>
                        <td><h2>@if($users->status)
                        Active @else InActive @endif</h2></td>
                    </tr>
                    
            
                </table>
            
                </div>
            </div>
        </div>
    </div>
</div>
  


</x-app-layout>