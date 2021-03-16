<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <style>
         #sortable-1 { list-style-type: none; margin: 0; 
            padding: 0; width: 25%; }
         #sortable-1 li { margin: 0 3px 3px 3px; padding: 0.4em; 
            padding-left: 1.5em; font-size: 17px; height: 16px; }
         .default {
            background: #cedc98;
            border: 1px solid #DDDDDD;
            color: #333333;
         }
    </style>
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
                        <a class="btn btn-outline-success" href="{{route('faqs.create')}}">Add FAQ</a>
                      

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Orderable FAQs
                        </button>

                        <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Manage FAQs order Sequence</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <ul id="sortable">
                                @foreach($FAQ as $title)
                                    <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>{{$title->title}}</li>
                                
                                @endforeach
                            </ul>
                            

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Update Sequence</button>
                        </div>
                        </div>
                    </div>
                    </div>
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
                        <th>Time</th>
                        <th>Action</th>
                    </tr>
                    @foreach($users as $data)
                    <tr>
                        
                        <td><a href="{{route('users',$data->id)}}">{{$data->name}}</a></td>
                        <td><a href="mailto:{{$data->email}}">{{$data->email}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->created_at}}</td>
                        <td>@if($data->status)
                        Active @else InActive @endif</td>
                        <td>{{ time() }}</td>
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

    <script>
    $(document).ready(function(){
        $( "#sortable" ).sortable();
    });
    function refresh()
    {
        location.reload();
    }
    </script>
</x-app-layout>
