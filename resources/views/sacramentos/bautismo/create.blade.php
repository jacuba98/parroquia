<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nueva Boleta de Bautismo') }}
        </h2>
    </x-slot>

<div class="container">
  <main class="py-4">

<!-- Brand Buttons -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <form method="POST" action="{{ route('bautismo.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="row">

         <!-- Name (Start)-->
         <div class="panel-body">
           <div class="form-group">Nombre(S):
             <input name="name" type="text" class="form-control form-control-user" value="{{ old('name')}}" placeholder="Nombre(s)...">
           </div>
         </div>
         <!-- Name (Finish) -->

         <!-- Apellido Paterno (Start)-->
         <div class="panel-body">
           <div class="form-group">Apellido Paterno:
             <input name="apePat" type="text" class="form-control form-control-user" value="{{ old('apePat')}}" placeholder="Apellido Paterno...">
           </div>
         </div>
         <!-- Apellido Paterno (Finish) -->

         <!-- Apellido Materno (Start)-->
         <div class="panel-body">
           <div class="form-group">Apellido Materno:
             <input name="apeMat" type="text" class="form-control form-control-user" value="{{ old('apeMat')}}" placeholder="Apellido Materno...">
           </div>
         </div>
         <!-- Apellido Materno (Finish) -->

         <!-- Nombre del papá (Start)-->
         <div class="panel-body">
           <div class="form-group">Nombre completo del papá:
             <input name="namePat" type="text" class="form-control form-control-user" value="{{ old('namePat')}}" placeholder="Nombre completo del papá...">
           </div>
         </div>
         <!-- Nombre del papá (Finish) -->

         <!-- Nombre de la mamá (Start)-->
         <div class="panel-body">
           <div class="form-group">Nombre completo del mamá:
             <input name="nameMat" type="text" class="form-control form-control-user" value="{{ old('nameMat')}}" placeholder="Nombre completo de la mamá...">
           </div>
         </div>
         <!-- Nombre de la mamá (Finish) -->

         <!-- Lugar de nacimiento (Start)-->
         <div class="panel-body">
           <div class="form-group">Lugar de nacimiento:
             <input name="lugar" type="text" class="form-control form-control-user" value="{{ old('lugar')}}" placeholder="Lugar de nacimiento...">
           </div>
         </div>
         <!-- Lugar de nacimiento (Finish) -->

         <!-- Fecha de nacimiento (Start)-->
         <div class="panel-body">
           <div class="form-group">Fecha de nacimiento:
             <input name="fechaN" type="text" class="form-control form-control-user" value="{{ old('fechaN')}}" placeholder="Fecha de nacimiento...">
           </div>
         </div>
         <!-- Fecha de nacimiento (Finish) -->

         <!-- Fecha de bautismo (Start)-->
         <div class="panel-body">
           <div class="form-group">Fecha de bautismo:
             <input name="fechaB" type="text" class="form-control form-control-user" value="{{ old('fechaB')}}" placeholder="Fecha de bautismo...">
           </div>
         </div>
         <!-- Fecha de bautismo (Finish) -->

         <!-- Nombre del sacerdote (Start)-->
         <div class="panel-body">
           <div class="form-group">Nombre del sacerdote:
             <input name="sacerdote" type="text" class="form-control form-control-user" value="{{ old('sacerdote')}}" placeholder="Nombre del sacerdote...">
           </div>
         </div>
         <!-- Nombre del sacerdote (Finish) -->

         <!-- Nombre del padrino (Start)-->
         <div class="panel-body">
           <div class="form-group">Nombre del padrino:
             <input name="padrino" type="text" class="form-control form-control-user" value="{{ old('padrino')}}" placeholder="Nombre del padrino...">
           </div>
         </div>
         <!-- Nombre del padrino (Finish) -->

         <!-- Nombre de la madrina (Start)-->
         <div class="panel-body">
           <div class="form-group">Nombre de la madrina:
             <input name="madrina" type="text" class="form-control form-control-user" value="{{ old('madrina')}}" placeholder="Nombre de la madrina...">
           </div>
         </div>
         <!-- Nombre de la madrina (Finish) -->

         <!-- No. Registro civil (Start)-->
         <div class="panel-body">
           <div class="form-group">No. Registro civil:
             <input name="rc" type="text" class="form-control form-control-user" value="{{ old('rc')}}" placeholder="No. Registro civil...">
           </div>
         </div>
         <!-- No. Registro civil (Finish) -->

        </div>

        <button class="btn btn-primary">Enviar Solicitud</button>
      </form>
    </div>
  </div>
</main>
</div>


</x-app-layout>
