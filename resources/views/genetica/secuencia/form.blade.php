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
    <input type="text" name="kit" class="form-control" id="kit" value="{{old('kit', $data->kit ?? '')}}"  placeholder="ingrese folio de muestra" required>
    <div class="valid-feedback">¡Ok válido!</div>
  <div class="invalid-feedback">Complete el campo.</div>   
  </div>
</div>