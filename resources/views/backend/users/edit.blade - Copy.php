<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <title>Hello, world!</title>
</head>
<body>
@include('backend.layouts._alert')

<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header"> </div>

            <div class="card-body">
                <form action="{{ route('users.update',$user->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Update User</h5>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>User Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ old('name',isset($user->name)?$user->name:null) }}" placeholder="e.g: Masrul Alam">
                                    </div>
                                    @error('name')
                                    <div class="text-danger mb-3">{{ $message }}</div>
                                    @enderror
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control" value="{{ old('email',isset($user->email)?$user->email:null) }}" placeholder="e.g: abc@gmail.com">
                                    </div>
                                    @error('email')
                                    <div class="text-danger mb-3">{{ $message }}</div>
                                    @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="e.g: ******">
                                    </div>
                                    @error('password')
                                    <div class="text-danger mb-3">{{ $message }}</div>
                                    @enderror
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="e.g: ******">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select multiple="multiple" name="roles[]" data-placeholder="Select Role" class="form-control form-control-select2">
                                            @foreach($roles as $role)
                                                <option value="{{ $role->name }}" {{ $user->hasRole($role->name)? 'selected':'' }}>{{ ucwords($role->name) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Update User <i class="icon-arrow-right14 position-right"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.form-control-select2').select2();
    });
</script>
</body>
</html>
