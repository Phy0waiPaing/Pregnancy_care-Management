@include('layout.head')

<body id="page-top">
    @include('layout.navbar')
    <div class="container-fluid">
        <h1>Create</h1>
        <h4>Nurse</h4>
        <hr />
        <div class="row">
            <div class="col-md-4">
                <form asp-action="Create">
                    <div asp-validation-summary="ModelOnly" class="text-danger"></div>
                    <div class="form-group">
                        <label asp-for="Name" class="control-label">Name</label>
                        <input asp-for="Name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label asp-for="Description" class="control-label">Address</label>
                        <input asp-for="Description" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label asp-for="Description" class="control-label">Phone Number</label>
                        <input asp-for="Description" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label asp-for="Description" class="control-label">Area</label>
                        <input asp-for="Description" class="form-control" />
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