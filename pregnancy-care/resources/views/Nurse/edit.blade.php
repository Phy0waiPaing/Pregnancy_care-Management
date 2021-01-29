@include('layout.head')

<body id="page-top">
    @include('layout.navbar')
    <div class="container-fluid">
        <h1>Create</h1>
        <h4>Nurse</h4>
        <hr />
        <div class="row">
            <div class="col-md-4">
                <form action="{{ route('nurses.update', ['nurse' => $nurse->id]) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label name="name" class="control-label">Name</label>
                        <input name="name" class="form-control" value="{{$nurse->name}}" />
                    </div>
                    <div class="form-group">
                        <label name="address" class="control-label">Address</label>
                        <input name="address" class="form-control" value="{{$nurse->address}}" />
                    </div>
                    <div class="form-group">
                        <label name="numberr" class="control-label">Phone Number</label>
                        <input name="number" class="form-control" value="{{$nurse->number}}" />
                    </div>
                    <div class="form-group">
                        <label name="area" class="control-label">Area</label>
                        <input name="area" class="form-control" value="{{$nurse->area}}" />
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Create" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>
        <div>
            <a href="/nurse/index">Back to List</a>
        </div>
    </div>
@include('layout.footer')