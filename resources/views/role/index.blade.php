<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Role') }}
        </h2>
    </x-slot>
    <div class="container">
  <div class="row justify-content-center">
    <main class="py-4">
      <div class="container-fluid">
        <div class="card shadow mb-4">
          <div class="card-header py-3"><h2>List of Roles</h2></div>

                <div class="card-body">
                @can('haveaccess','role.create')
                    <a href="{{route('role.create')}}" class="btn btn-primary float-right">Create</a>
                    <br><br>
                @endcan

                    @include('custom.message')
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Description</th>
                            <th scope="col">Full access</th>
                            <th colspan="3"></th>
                          </tr>
                        </thead>
                        <tbody>


                            @foreach ($roles as $role)
                            <tr>
                                <th scope="row">{{ $role->id}}</th>
                                <td>{{ $role->name}}</td>
                                <td>{{ $role->slug}}</td>
                                <td>{{ $role->description}}</td>
                                <td>{{ $role['full-access']}}</td>
                                <td>
                                @can('haveaccess','role.show')
                                  <a class="btn btn-info" href="{{ route('role.show',$role->id)}}">Show</a>
                                @endcan
                                </td>
                                <td>
                                @can('haveaccess','role.edit')
                                  <a class="btn btn-success" href="{{ route('role.edit',$role->id)}}">Edit</a>
                                @endcan
                                </td>

                                <td>
                                @can('haveaccess','role.destroy')
                                  <form action="{{ route('role.destroy',$role->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                  </form>
                                @endcan

                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                      </table>
                      {{ $roles->links() }}

          </div>
        </div>
      </div>
    </main>
  </div>
</div>
</x-app-layout>
