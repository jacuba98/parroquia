<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Confirmacion') }}
        </h2>
    </x-slot>

    @include('custom.message')
    <div class="container">
      <div class="row">
          <h2><br>Confirmaciones</h2>
          <div class="table-responsive">


            <div class="col-md-8 mx-auto">
              <div class="px-4 m-1">
                <div class="row mb-5">
                <div class="col-md-8">
                  <div class="input-group">
                    <div class="input-group-prepend input-group-pill input-icon-bg-transparent">
                      <span class="input-group-text" id="basic-addon1"><span class="icon-search"></span></span>
                    </div>
                    <input type="text" class="form-control pl-0 border-left-0 form-pill" placeholder="Buscar..." aria-label="buscar" aria-describedby="basic-addon1">
                  </div>
                </div>
                <a class="btn btn-primary px-4 m-1 btn-pill " href="{{ route('confirmacion.create') }}"><span class="icon-plus mr-2"></span>Nuevo</a>
        			</div>
            </div>
            </div>


            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th>Nombre(s)</th>
                  <th>Apellido Paterno</th>
                  <th>Apellido Materno</th>
                  <th>Fecha</th>
                  <th colspan="3"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($confirmaciones as $confirmacion)
                <tr>
                  <td>{{ $confirmacion->id}}</td>
                  <td>{{ $confirmacion->name}}</td>
                  <td>{{ $confirmacion->apePat}}</td>
                  <td>{{ $confirmacion->apeMat}}</td>
                  <td>{{ $confirmacion->fechaC}}</td>
                  <td>
                    <a class="btn btn-info" href="{{ route('confirmacion.show',$confirmacion->id)}}">Show</a>
                  </td>

                  <td>
                    <a class="btn btn-success" href="{{ route('confirmacion.edit',$confirmacion->id)}}">Edit</a>
                  </td>
                  <td>
                    <form action="{{ route('confirmacion.destroy',$confirmacion->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                      <button class="btn btn-danger">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
      </div>
    </div>

</x-app-layout>
