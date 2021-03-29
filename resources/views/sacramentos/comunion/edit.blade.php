<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actualizar Boleta de Comunion') }}
        </h2>
    </x-slot>

<div class="container">
  <main class="py-4">

<!-- Brand Buttons -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <form method="POST" action="{{ route('comunion.update', $comunion->id) }}">
        {{ csrf_field() }}
        @method('PUT')

        <div class="row">

         <!-- Name (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Nombre(S):
             <input name="name" type="text" class="form-control" value="{{ old('name', $comunion->name)}}" placeholder="Nombre(s)...">
           </div>
         </div>
         <!-- Name (Finish) -->

         <!-- Apellido Paterno (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Apellido Paterno:
             <input name="apePat" type="text" class="form-control" value="{{ old('apePat', $comunion->apePat)}}" placeholder="Apellido Paterno...">
           </div>
         </div>
         <!-- Apellido Paterno (Finish) -->

         <!-- Apellido Materno (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Apellido Materno:
             <input name="apeMat" type="text" class="form-control" value="{{ old('apeMat', $comunion->apeMat)}}" placeholder="Apellido Materno...">
           </div>
         </div>
         <!-- Apellido Materno (Finish) -->

         <!-- Fecha de bautismo (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Fecha de comunion:
             <input name="fechaC" type="text" class="form-control" value="{{ old('fechaC', $comunion->fechaC)}}" placeholder="Fecha de comunion...">
           </div>
         </div>
         <!-- Fecha de bautismo (Finish) -->

         <!-- Nombre del sacerdote (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Nombre del sacerdote:
             <input name="sacerdote" type="text" class="form-control" value="{{ old('sacerdote', $comunion->sacerdote)}}" placeholder="Nombre del sacerdote...">
           </div>
         </div>
         <!-- Nombre del sacerdote (Finish) -->

         <!-- Nombre del papá (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Nombre completo del papá:
             <input name="namePat" type="text" class="form-control" value="{{ old('namePat', $comunion->namePat)}}" placeholder="Nombre completo del papá...">
           </div>
         </div>
         <!-- Nombre del papá (Finish) -->

         <!-- Nombre de la mamá (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Nombre completo del mamá:
             <input name="nameMat" type="text" class="form-control" value="{{ old('nameMat', $comunion->nameMat)}}" placeholder="Nombre completo de la mamá...">
           </div>
         </div>
         <!-- Nombre de la mamá (Finish) -->

         <!-- Nombre del padrino (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Nombre del padrino:
             <input name="padrino" type="text" class="form-control" value="{{ old('padrino', $comunion->padrino)}}" placeholder="Nombre del padrino...">
           </div>
         </div>
         <!-- Nombre del padrino (Finish) -->

         <!-- Nombre de la madrina (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Nombre de la madrina:
             <input name="madrina" type="text" class="form-control" value="{{ old('madrina', $comunion->madrina)}}" placeholder="Nombre de la madrina...">
           </div>
         </div>
         <!-- Nombre de la madrina (Finish) -->


         <!-- Lugar de nacimiento (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Parroquia de Bautismo:
             <input name="lugarB" type="text" class="form-control" value="{{ old('lugarB', $comunion->lugarB)}}" placeholder="Parroquia de Bautismo...">
           </div>
         </div>
         <!-- Lugar de nacimiento (Finish) -->

         <!-- Fecha de bautismo (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Fecha de bautismo:
             <input name="fechaB" type="text" class="form-control" value="{{ old('fechaB', $comunion->fechaB)}}" placeholder="Fecha de bautismo...">
           </div>
         </div>
         <!-- Fecha de bautismo (Finish) -->

        </div>
        <input class="btn btn-primary" type="submit" value="Actualizar">
      </form>
    </div>
  </div>
</main>
</div>
</x-app-layout>
