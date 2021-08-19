<div class="input-group mb-3 col-md-4">
    <div class="input-group-prepend">
    <label class="input-group-text requerido" >NOMBRE</label>
    </div>
    <input type="text" name="titulo" class="form-control" id="titulo" value="{{old('titulo')}}" placeholder="ingrese titulo" required>
</div>

<div class="input-group mb-3 col-md-4">
    <div class="input-group-prepend">
    <label class="input-group-text requerido" >URL</label>
    </div>
    <input type="text" name="url" class="form-control" id="url" value="{{old('url')}}" placeholder="ingrese url" required>
</div>

<div class="input-group mb-3 col-md-4">
    <div class="input-group-prepend">
    <label class="input-group-text" for="">ICONO</label>
    </div>
    <input type="text" name="icono" class="form-control" id="icono" value="{{old('icono')}}" placeholder="ingrese icono">
</div>