<div ng-show="tab ===2"  ng-init="mostrarDocs()" class="fluid-container global-contenedor ng-hide">
  <h2 class="h2_title">Administración de Informes</h2>
  <div class="info_admin z-depth-2">
    <div class="nav-clientes">
      <div class="form-group form-control1">
        <input class="form-control form-control-lg" type="text" ng-model="searchObra" placeholder="Buscar por Obra">
      </div>
      <button ng-click="" class="btn btn-white btn-navs" type="button" data-target="#centralModalDoc" data-toggle="modal" name="subir_archivo"><i data-feather="file-plus"></i>Subir Informe</button>
    </div>
    <div class="table-responsive">
    <h4 class="tipo_title">Informes de Densidades</h4>
    <hr class="hr_tabla">
    <table class="table table_clientes">
      <thead>
        <tr>
          <th>No°</th>
          <th>Fichero</th>
          <th >Id de Obra</th>
          <th>Fecha de subida</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'densidades'">
          <td >{{$index+1}}</td>
          <td class="left" title="{{doc.name_docs}}"><img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}</td>
          <td  title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
          <td>{{doc.create_date_docs|date:'dd-MM-yyyy HH:mm:ss'}}</td>
          <td>
            <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
            <button class="btn btn-danger btn-sm"> <i data-feather="trash-2"></i></button>           
          </td>
        </tr>        

      </tbody>
    </table>


    <h4 class="tipo_title">Informes de Proctor Modificado</h4>
    <hr class="hr_tabla">
    <table class="table table_clientes bg-gris">
      <thead>
        <tr>
          <th>No°</th>
          <th>Fichero</th>
          <th >Id de Obra</th>
          <th>Fecha de subida</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'proctor_mod'">
          <td >{{$index+1}}</td>
          <td class="left" title="{{doc.name_docs}}">
            <img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}
          </td>
          <td title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
          <td>{{doc.create_date_docs|date:'dd-MM-yyyy HH:mm:ss'}}</td>
          <td>
            <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
            <button class="btn btn-danger btn-sm" ng-click="eliminar('reportes')"><i data-feather="trash-2"></i></button>           
          </td>
        </tr>        

      </tbody>
    </table>
    </div>
  </div>
</div>




<!-- Central Modal Small -->
<div class="modal fade" id="centralModalDoc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        
        <form>
        <div class="modal-header">
          <h4 align="center" class="modal-title w-100" id="myModalLabel">Subir Informe</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
              <input type="hidden" ng-model="id">
                <div class="form-row">
                    <div class="col-xs-12 col-md-12">
                        <div class="md-form">
                            <i data-feather="edit-3" class="prefix"></i>
                            <input placeholder=" " type="number" id="obra_doc" class="form-control" name="obra_doc" ng-model="obra_doc">
                            <label for="obra_id">Id de obra*</label>
                        </div>                    
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div class="md-form">
                            <i data-feather="file" class="prefix"></i>
                            <select class=" form-control mbd-select"  name="tipo" id="tipo" ng-model="type_doc">
                              <option disabled value="">Seleccione un tipo</option>
                              <option value="e_compresion">Ensayos a compresión</option>
                              <option value="densidades">Densidades</option>
                              <option value="proctor_mod">Proctor modificado</option>
                              <option value="granulometrias">Granulometrías</option>
                            </select>
                        </div>                    
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div class="md-form">
                            <i data-feather="upload" class="prefix"></i>
                            <input placeholder=" " type="file" id="doc_file" class="form-control file_input" file-input="files" area-describedby="max-size">
                              <small id="max-size" class="form-text text-muted">Peso máximo soportado 2MB.
                            </small>
                        </div>
                    </div>
                </div>
        </div>

        <div class="modal-footer">
          <p align="center">Ingrese los datos referentes al tipo de archivo que va a subir, recuerde que es obligatorio relacionarlo con id de obra y tipo de informe.</p>
         
          <div>
          <input data-dismiss="modal" ng-click="crearDoc()" class="btn btn-danger " type="button" value="{{btnNameDoc}}">
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Central Modal Small -->