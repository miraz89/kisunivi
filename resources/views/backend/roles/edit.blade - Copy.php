<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <title>Role Update</title>
</head>
<body>
@include('backend.layouts._alert')

<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header"> </div>

            <div class="card-body">
                <form action="{{ route('roles.update',$role->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Edit Role</h5>
                        </div>

                        <div class="panel-body">
                            <div class="form-group">
                                <label>Role Name</label>
                                <input type="text" name="name" value="{{ $role->name }}" class="form-control" placeholder="e.g: editor">
                            </div>
                            @error('name')
                            <div class="text-danger mb-3">{{ $message }}</div>
                            @enderror
                            </p>
                            @if(!empty($permissions))
                                <div class="form-group pt-15">
                                    <label class="display-block text-semibold">Permissions</label>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name=""  class="styled" value="0" id="permissionsAll">
                                            All
                                        </label>
                                    </div>
                                    <hr>
                                    @php  $i = 1; @endphp
                                    @foreach($permission_groups as $groups)
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="" id="{{ $i }}-Management" onclick="checkPermissionByGroup('role-{{ $i }}-management-checkbox',this)" class="control-primary" value="{{ $groups->name }}" >
                                                        {{ ucwords(str_replace('.',' ',$groups->name)) }}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 role-{{ $i }}-management-checkbox">
                                                @php
                                                    $permissions = \App\Models\User::getPermissionGroupName($groups->name);
                                                    $j = 1;
                                                @endphp

                                                @foreach($permissions as $permission)
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="permissions[]" {{ $role->hasPermissionTo($permission->name)?'checked':'' }}  class="control-primary" value="{{ $permission->name }}">
                                                            {{ ucwords(str_replace('.',' ',$permission->name)) }}
                                                            @php  $j++; @endphp
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>

                                        </div>
                                        @php  $i++; @endphp
                                        <hr>
                                    @endforeach

                                </div>
                            @else
                                No Permission Found!!
                            @endif


                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Update Role <i class="icon-arrow-right14 position-right"></i></button>
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
@include('backend.layouts.roles_pages_js')
<script>
    $(document).ready(function() {
        $('.form-control-select2').select2();
    });
</script>
</body>
</html>
