<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            <form action="{{ Route('productstore') }}" method="POST">
                @csrf
                <div class="form-group">
                <label for="">Product Name:-</label>
            <input class="form-control"  type="text" name="pname">
            </div>
            <div class="form-group">
                <label for="">Product Description:-</label>
            <input class="form-control"  type="text" name="pdes">
            </div>
            <div class="form-group">
                <label for="">Catagory:-</label>
            <input class="form-control"  type="text" name="cat">
            </div>
            <div class="form-group">
                <label for="">Sub Catagory:-</label>
            <input class="form-control"  type="text" name="scat">
            </div>
            <div class="form-group">
                <label for="">Price:-</label>
            <input class="form-control"  type="number" name="price">
            </div>
            <div class="form-group">
                <label for="">Status:-</label>
            <select class="form-control" name="status">
                <option value="1">-----------------Status--------------</option>
                <option value="1">Active</option>
                <option value="2">Inactive</option>
            </select>
            </div>
            <button class="btn btn-success form-control">Save</button>

            </form>
            
        </div>
    </div>




    {{-- bootstrap----  --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>