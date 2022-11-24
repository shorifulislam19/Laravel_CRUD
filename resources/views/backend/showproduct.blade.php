<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- fontawsome  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
 <div class="container">
    <div class="row py-5">
        <div class="col-md-6 offset-md-2">
            <a class="btn btn-success" href="{{ Route('addproduct' ) }}">Add Product</a>
            <table class="table table-striped">
                <tr>
                    <th>SI No</th>
                    <th>Product Name</th>
                    <th>Product Describe</th>
                    <th>Catagory</th>
                    <th>Sub-Catagory</th>
                    <th>Product Price</th>
                    <th>Status</th>
                    <th colspan="2">Action</th>
                </tr>
                <?php $Sl=1; ?>
                @foreach ($products as $data )
                    <tr>
                    <td>{{ $Sl}}</td>
                    <td>{{ $data->pname }}</td>
                    <td>{{ $data->pdes }}</td>
                    <td>{{ $data->cat }}</td>
                    <td>{{ $data->scat }}</td>
                    <td>{{ $data->price }}</td>
                    <td>
                        @if ($data->status==1)
                        <a href="{{ Route('status' , $data->id) }}" class="btn btn-success btn-sm"><i class="fa-solid fa-check"></i></a>
                        @else
                        <a href="{{ Route('status' , $data->id) }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-check"></i></a>
                        @endif
                    </td>
                    <td>
                        <a href="{{ Route('editproduct' , $data->id ) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                    </td>
                    <td>
                        <button href="" class="btn btn-danger btn-sm" data-toggle="Modal" data-target="#deletefromModal{{ $data->id }}"><i class="fa fa-trash"></i></button>

                    </td>
                </tr>
                <?php $Sl++; ?>
<!-- Modal -->
<div class="modal fade" id="deletefromModal{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Massage</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You sure want to delete this item?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="{{ Route('delete' , $data->id ) }}" type="button" class="btn btn-primary">Save changes</a>
      </div>
    </div>
  </div>
</div>
                @endforeach
            </table>
        </div>
    </div>
 </div>




    {{-- bootstrap----  --}}
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>