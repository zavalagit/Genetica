

    <table id="tabla-genetica" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">NOBRE</th>
                <th scope="col">VALORES</th>
                
            </tr>
        </thead>
        <tbody>
            @if (count($listamarcadores))
                @php
                $no = 1;
                @endphp

                    @foreach ($listamarcadores as $key => $marcador)
                        <tr>
                            <th class="th-contador" scope="row" width="1.5%">{{$no++}}</th>
                            <td>{{$marcador->nombre}}</td>
                            <td class={{ $marcador->id }}>
                                <label for="Input">Campo</label>
                                    <button type="button" data-id={{$marcador->id}} class="clonar btn btn-secondary btn-sm">+</button>
                                <div class="input-group" id="grupo__valor">
                                    <div class="input-group-prepend">
                                    <label for="valor" class="input-group-text requerido formulario__label" id="inputGroupPrepend">VALOR</label>
                                    </div>
                                    
                                        <input type="text" name="valor[{{$marcador->id}}][1]" class="form-control" id="valor" value="{{old('folio', $data->folio ?? '')}}"  placeholder="ingrese valor del marcador" required>
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    
                                    <div class="formulario__input-error">el folio esta compuesto por numero consecutivo  diagonal / año actual guion - letra G, Q ó siclas EXT.</div>
                                    <div class="invalid-feedback">Complete el campo.</div>  
                                </div>   
                                
                                
                            </td>
                            
                        </tr>
                    @endforeach
            @else
                    <tr class="table-warning">
                        <td colspan="12">
                            <blockquote>No hay registros</blockquote>
                        </td>
                    </tr>
            @endif

        </tbody>
    </table>
    