<div class="col-md-6 mb-3">
                        
    <div class="input-group" id="grupo__folio">
      <div class="input-group-prepend">
        <label for="folio" class="input-group-text requerido formulario__label" id="inputGroupPrepend">FOLIO</label>
      </div>
        
          <input type="text" name="folio" class="form-control" id="folio" value="{{old('folio', $data->folio ?? '')}}"  placeholder="ingrese folio de muestra" required>
          <i class="formulario__validacion-estado fas fa-times-circle"></i>
        
      <div class="formulario__input-error">el folio esta compuesto por numero consecutivo  diagonal / año actual guion - letra G, Q ó siclas EXT.</div>
      <div class="invalid-feedback">Complete el campo.</div>  
    </div>
</div>

<div class="col-md-6 mb-3">
                        
  <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text requerido" id="inputGroupPrepend">KIT</span>
        </div>
        <select name="kit_id" id="kit_id" class="form-control" required>
          <option value="">Seleccione el kit</option>
            @foreach ($kits as $id=> $nombre)
            <option value="{{$id}}"
            {{is_array(old('kit_id')) ? (in_array($id, old('kit_id')) ? 'selected' : '')  : (isset($data) ? ($data->roles->firstWhere('id', $id) ? 'selected' : '') : '')}}
            >
            {{$nombre}}</option>
            @endforeach
        </select>
  </div>
</div>


@php
    $formAccion = 'editar';
@endphp

{{--  {{dd(App\Models\Genetica\Kit::find(1))}}  --}}
<div class="col-md-12">
    <div class="lista_marcadores">
      {{--  aqui se va a mostrar la lista de marcadores  --}}
      {{--  @if ($formAccion == 'editar')
        @include('genetica.secuencia.lista_marcadores',['kit' => App\Models\Genetica\Kit::find(1)])
      @endif    --}}
    </div>
</div>   