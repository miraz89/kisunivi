<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <title>All Users</title>
</head>
<body>
@include('backend.layouts._alert')

<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">All User</h5>
        <div class="header-elements">
            <div class="list-icons">
                @canany(['user.create'])
                    <a class="btn btn-info" href="{{ route('users.create') }}">New User</a>
                @endcanany

            </div>
        </div>
    </div>

    <div class="card-body">  </div>

    @if(!empty($users))
        <table class="table datatable-button-print-columns">
            <thead>
            <tr>
                <th>Serial</th>
                <th>User Name</th>
                <th>Email</th>
                <th style="width: 20%;">Roles</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $key => $user)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ ucwords($user->name) }}</td>
                    <td>{{ $user->email }}</td>
                    <td style="width:30%;">
                        @foreach($user->roles as $role)
                            {{--  to hide super admin role name from others--}}
                            @cannot(['role.show'])
                                @if($role->name == \App\Models\User::ROLE_SUPER_ADMIN)
                                    <span class="badge badge-info mr-2">
                                            Admin
                                            </span>
                                @else
                                    <span class="badge badge-info mr-2">
                                            {{ ucwords($role->name) }}
                                            </span>
                                @endif
                            @endcannot
                            {{--  generally sow for super admin --}}
                            @canany(['role.show'])
                                <span class="badge badge-info mr-2">
                                            {{ ucwords($role->name) }}
                                            </span>
                            @endcanany

                        @endforeach
                    </td>
                    <td>
                        @canany(['user.update'])
                            <a href="{{ route('users.edit',$user->id) }}" class="btn btn-info"><i class="icon-pen"></i></a>
                        @endcanany
                        @canany(['user.delete'])
                            <a href="{{ route('users.destroy',$user->id) }}" class="btn btn-danger" onclick="event.preventDefault();
                                document.getElementById('delete-form-{{ $user->id }}').submit();"><i class="icon-trash"></i></a>
                            <form action="{{ route('users.destroy',$user->id) }}" id="delete-form-{{ $user->id }}" method="post" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        @endcanany
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    @else
        No User Found!!
    @endif

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
