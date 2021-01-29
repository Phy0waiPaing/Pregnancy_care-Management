@include('layout.head')

<body id="page-top">
    @include('layout.navbar')
    <div class="container-fluid">
        <h3> Nurses </h3>
        <p>
            <a href="/register">Create New</a>
        </p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Nurses List</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Number</th>
                                <th>Area</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Number</th>
                                <th>Area</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($nurses as $key => $nurse)
                                <tr>
                                    <td>{{$nurse->name}}</td>
                                    <td>{{$nurse->address}}</td>
                                    <td>{{$nurse->number}}</td>
                                    <td>{{$nurse->area}}</td>
                                    <td><a href="/nurses/{{$nurse->id}}/edit">Edit</a></td>
                                    <td><a href="#">Delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@include('layout.footer')
