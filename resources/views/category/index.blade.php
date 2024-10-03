<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container py-3">
        <div class="row">
            <div class="col-md-12">
                @if(session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('status')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="card shadow">
                    <div class="card-header">
                        <h3>Category List
                            <a href="{{url('category/create')}}"><button class="btn btn-outline-primary float-end">Add
                                    Category</button></a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->description}}</td>
                                        <td class="text-{{$item->status ? 'success':'danger'}}">{{$item->status ? 'Visible':'Hidden'}}</td>
                                        <td>
                                        <a href="{{route('category.show',$item->id)}}"><button class="btn btn-outline-info mx-2"><i class="fa-solid fa-eye"></i></button></a>
                                        <a href="{{route('category.edit',$item->id)}}"><button class="btn btn-outline-warning mx-2"><i class="fa-solid fa-pen-to-square"></i></button></a>
                                        <a href="{{route('category.destroy',$item->id)}}"><button class="btn btn-outline-danger mx-2"><i class="fa-solid fa-trash"></i></button></a>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/5558db2d16.js" crossorigin="anonymous"></script>
</body>

</html>
