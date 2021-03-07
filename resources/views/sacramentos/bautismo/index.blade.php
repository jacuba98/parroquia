<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bautismos') }}
        </h2>
    </x-slot>
    @include('custom.message')
    <div class="col-md-8 mx-auto">
      <div class="px-4 m-1">
        <a class="btn px-4 m-1 btn-outline-success" href="{{ route('bautismo.create') }}">Nuevo</a>

        <a class="btn px-4 m-1 btn-outline-info" href="#">Buscar</a>
			</div>
    </div>

    <div class="container">
      <div class="row">

          <h2>Bautisados</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre(s)</th>
                  <th>Apellido Paterno</th>
                  <th>Apellido Materno</th>
                  <th>Fecha</th>
                  <th>Accion</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($bautismo as $bautismos)
                <tr>
                  <td>{{ $bautismos->id}}</td>
                  <td>{{ $bautismos->name}}</td>
                  <td>{{ $bautismos->apePat}}</td>
                  <td>{{ $bautismos->apeMat}}</td>
                  <td>{{ $bautismos->fechaB}}</td>
                  <td>
                    <a class="btn btn-info" href="{{ route('bautismo.edit',$bautismos->id)}}">Ver</a>

                    <a class="btn btn-info" href="{{ route('bautismo.edit',$bautismos->id)}}">Actualizar</a>

                    <form action="{{ route('bautismo.destroy',$bautismos->id)}}" method="POST">
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
