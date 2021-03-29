<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actualizar Boleta de Confirmacion') }}
        </h2>
    </x-slot>

<div class="container">
  <main class="py-4">

<!-- Brand Buttons -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <form method="POST" action="{{ route('confirmacion.update', $confirmacion->id) }}">
        {{ csrf_field() }}
        @method('PUT')

        <div class="row">

         <!-- Name (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Nombre(S):
             <input name="name" type="text" class="form-control" value="{{ old('name', $confirmacion->name)}}" placeholder="Nombre(s)...">
           </div>
         </div>
         <!-- Name (Finish) -->

         <!-- Apellido Paterno (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Apellido Paterno:
             <input name="apePat" type="text" class="form-control" value="{{ old('apePat', $confirmacion->apePat)}}" placeholder="Apellido Paterno...">
           </div>
         </div>
         <!-- Apellido Paterno (Finish) -->

         <!-- Apellido Materno (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Apellido Materno:
             <input name="apeMat" type="text" class="form-control" value="{{ old('apeMat', $confirmacion->apeMat)}}" placeholder="Apellido Materno...">
           </div>
         </div>
         <!-- Apellido Materno (Finish) -->

         <!-- Nombre del obispo (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Nombre del Obispo:
             <input name="obispo" type="text" class="form-control" value="{{ old('obispo', $confirmacion->obispo)}}" placeholder="Nombre del obispo...">
           </div>
         </div>
         <!-- Nombre del obispo (Finish) -->

         <!-- Fecha de bautismo (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Fecha de comunion:
             <input name="fechaC" type="text" class="form-control" value="{{ old('fechaC', $confirmacion->fechaC)}}" placeholder="Fecha de comunion...">
           </div>
         </div>
         <!-- Fecha de bautismo (Finish) -->

         <!-- Nombre del papá (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Nombre completo del papá:
             <input name="namePat" type="text" class="form-control" value="{{ old('namePat', $confirmacion->namePat)}}" placeholder="Nombre completo del papá...">
           </div>
         </div>
         <!-- Nombre del papá (Finish) -->

         <!-- Nombre de la mamá (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Nombre completo del mamá:
             <input name="nameMat" type="text" class="form-control" value="{{ old('nameMat', $confirmacion->nameMat)}}" placeholder="Nombre completo de la mamá...">
           </div>
         </div>
         <!-- Nombre de la mamá (Finish) -->

         <!-- Nombre del padrino (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Nombre del padrino:
             <input name="padrino" type="text" class="form-control" value="{{ old('padrino', $confirmacion->padrino)}}" placeholder="Nombre del padrino...">
           </div>
         </div>
         <!-- Nombre del padrino (Finish) -->

         <!-- Nombre de la madrina (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Nombre de la madrina:
             <input name="madrina" type="text" class="form-control" value="{{ old('madrina', $confirmacion->madrina)}}" placeholder="Nombre de la madrina...">
           </div>
         </div>
         <!-- Nombre de la madrina (Finish) -->

         <!-- Lugar de nacimiento (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Lugar de nacimiento:
             <input name="lugarN" type="text" class="form-control" value="{{ old('lugarN', $confirmacion->lugarN)}}" placeholder="Lugar de nacimiento...">
           </div>
         </div>
         <!-- Lugar de nacimiento (Finish) -->

         <!-- Fecha de nacimiento (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Fecha de nacimiento:
             <input name="fechaN" type="text" class="form-control" value="{{ old('fechaN', $confirmacion->fechaN)}}" placeholder="Fecha de nacimiento...">
           </div>
         </div>
         <!-- Fecha de nacimiento (Finish) -->

         <!-- Parroquia de Bautismo (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Parroquia de Bautismo:
             <input name="lugarB" type="text" class="form-control" value="{{ old('lugarB', $confirmacion->lugarB)}}" placeholder="Parroquia de Bautismo...">
           </div>
         </div>
         <!--Parroquia de Bautismo (Finish) -->

         <!-- Fecha de bautismo (Start)-->
         <div class="col-sm-6">
           <div class="form-group">Fecha de bautismo:
             <input name="fechaB" type="text" class="form-control" value="{{ old('fechaB', $confirmacion->fechaB)}}" placeholder="Fecha de bautismo...">
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
