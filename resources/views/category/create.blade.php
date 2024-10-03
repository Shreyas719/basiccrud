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
                <div class="card shadow">
                    <div class="card-header">
                        <h3>Category Form
                            <a href="{{url('category')}}"><button
                                    class="btn btn-outline-secondary float-end">Back</button></a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{url('category/store')}}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" value="{{old('name')}}">
                                @error('name')
                                <span class="text-small text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description"
                                    class="form-control">{{old('description')}}</textarea>
                                @error('description')
                                <span class="text-danger text-small">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-check">
                                <input name="status" class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Status
                                </label>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary float-end mx-3">Add Category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
