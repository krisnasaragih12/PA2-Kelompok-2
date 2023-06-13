<x-admin-layout>
    @section('title', 'User')
    <div class="page-header">
        <h1 class="page-title">Users</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Users</li>
            </ol>
        </div>
    </div>

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Rental</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="table table-bordered text-nowrap border-bottom">
                            <thead class="border-top">
                                <tr>
                                    <th class="bg-transparent border-bottom-0"
                                        style="width: 5%;">ID</th>
                                    <th
                                        class="bg-transparent border-bottom-0">
                                        Username</th>
                                    <th
                                        class="bg-transparent border-bottom-0">
                                        Name</th>
                                    <th
                                        class="bg-transparent border-bottom-0">
                                        Email</th>
                                    <th
                                        class="bg-transparent border-bottom-0">
                                        Role</th>
                                    <th class="bg-transparent border-bottom-0"
                                        style="width: 5%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $u)
                                <tr class="border-bottom">
                                    <td class="text-center"><span class="mt-sm-2 d-block">{{ $u->id }}</span></td>
                                    <td class="text-center"><span class="mt-sm-2 d-block">{{ $u->username }}</span></td>
                                    <td class="text-center"><span class="mt-sm-2 d-block">{{ $u->name }}</span></td>
                                    <td class="text-center"><span class="mt-sm-2 d-block">{{ $u->email }}</span></td>
                                    <td class="text-center"><span class="mt-sm-2 d-block">
                                    @foreach ($u->roles as $role)
                                        {{ $role->name }}@if (!$loop->last), @endif
                                    @endforeach
                                    </td>
                                    <td>
                                        @can('is-admin')
                                        @if (!$u->hasRole('admin'))

                                        <div class="g-2">
                                            <div class="btn-group mt-2 mb-2">
                                                <button type="button" class="btn btn-google btn-pill dropdown-toggle" data-bs-toggle="dropdown">
                                                        <i class="fe fe-edit fs-14"></i> <span class="caret"></span>
                                                    </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li class="dropdown-plus-title">
                                                        Edit
                                                    </li>
                                                    @if ($u->hasRole('customer'))
                                                    <li>
                                                        <a href="{{ route('setStaff', $u->id) }}"
                                                        onclick="event.preventDefault(); document.getElementById('set-staff-form-{{ $u->id }}').submit();">
                                                         Set Staff
                                                     </a>
                                                     <form id="set-staff-form-{{ $u->id }}"
                                                           action="{{ route('setStaff', $u->id) }}"
                                                           method="POST"
                                                           style="display: none;">
                                                         @csrf
                                                         @method('PUT')
                                                     </form>
                                                    </li>
                                                    @endif
                                                    @if ($u->hasRole('staff'))
                                                    <li>    
                                                        <a href="{{ route('setUser', $u->id) }}"
                                                        onclick="event.preventDefault(); document.getElementById('set-user-form-{{ $u->id }}').submit();">
                                                         Set Customer
                                                     </a>
                                                     <form id="set-user-form-{{ $u->id }}"
                                                           action="{{ route('setUser', $u->id) }}"
                                                           method="POST"
                                                           style="display: none;">
                                                         @csrf
                                                         @method('PUT')
                                                     </form></li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                        @endif
                                        @endcan
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
    <!-- End Row -->
</x-admin-layout>