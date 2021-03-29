<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nueva Boleta de Comunion') }}
        </h2>
    </x-slot>

<div class="container">
  <main class="py-4">

<!-- Brand Buttons -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <form method="POST" action="{{ route('comunion.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="row">

         <!-- Name (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Nombre(S):
             <input name="name" type="text" class="form-control" value="{{ old('name')}}" placeholder="Nombre(s)...">
           </div>
         </div>
         <!-- Name (Finish) -->

         <!-- Apellido Paterno (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Apellido Paterno:
             <input name="apePat" type="text" class="form-control" value="{{ old('apePat')}}" placeholder="Apellido Paterno...">
           </div>
         </div>
         <!-- Apellido Paterno (Finish) -->

         <!-- Apellido Materno (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Apellido Materno:
             <input name="apeMat" type="text" class="form-control" value="{{ old('apeMat')}}" placeholder="Apellido Materno...">
           </div>
         </div>
         <!-- Apellido Materno (Finish) -->

         <!-- Fecha de Comunion (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Fecha de Comunion:
             <input name="fechaC" type="text" class="form-control" value="{{ old('fechaC')}}" placeholder="Fecha de comunion...">
           </div>
         </div>
         <!-- Fecha de Comunion (Finish) -->

         <!-- Nombre del sacerdote (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Nombre del sacerdote:
             <input name="sacerdote" type="text" class="form-control" value="{{ old('sacerdote')}}" placeholder="Nombre del sacerdote...">
           </div>
         </div>
         <!-- Nombre del sacerdote (Finish) -->

         <!-- Nombre del papá (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Nombre completo del papá:
             <input name="namePat" type="text" class="form-control" value="{{ old('namePat')}}" placeholder="Nombre completo del papá...">
           </div>
         </div>
         <!-- Nombre del papá (Finish) -->

         <!-- Nombre de la mamá (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Nombre completo de la mamá:
             <input name="nameMat" type="text" class="form-control" value="{{ old('nameMat')}}" placeholder="Nombre completo de la mamá...">
           </div>
         </div>
         <!-- Nombre de la mamá (Finish) -->

         <!-- Nombre del padrino (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Nombre del padrino:
             <input name="padrino" type="text" class="form-control" value="{{ old('padrino')}}" placeholder="Nombre del padrino...">
           </div>
         </div>
         <!-- Nombre del padrino (Finish) -->

         <!-- Nombre de la madrina (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Nombre de la madrina:
             <input name="madrina" type="text" class="form-control" value="{{ old('madrina')}}" placeholder="Nombre de la madrina...">
           </div>
         </div>
         <!-- Nombre de la madrina (Finish) -->

         <!-- Lugar de nacimiento (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Parroquia de Bautismo:
             <input name="lugarB" type="text" class="form-control" value="{{ old('lugarB')}}" placeholder="Parroquia de bautismo...">
           </div>
         </div>
         <!-- Lugar de nacimiento (Finish) -->


         <!-- Fecha de bautismo (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Fecha de bautismo:
             <input name="fechaB" type="text" class="form-control" value="{{ old('fechaB')}}" placeholder="Fecha de bautismo...">
           </div>
         </div>
         <!-- Fecha de bautismo (Finish) -->

        </div>
        <button class="btn btn-primary">Guardar</button>
      </form>
    </div>
  </div>
</main>
</div>
</x-app-layout>
