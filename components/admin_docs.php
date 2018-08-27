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

    <div ng-if="alquiler_e_if">
      <h4 class="tipo_title">Alquiler de equipo</h4>
      <hr class="hr_tabla">
      <table class="table table_clientes">
        <thead>
          <tr>
            <th width="30%">Fichero</th>
            <th width="20%">Id de Obra</th>
            <th width="25%">Fecha de subida</th>
            <th width="25%"></th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'alquiler_e'">
            <td class="left" title="{{doc.name_docs}}"><img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}</td>
            <td  title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td>{{doc.create_date_docs|date:'dd-MM-yyyy HH:mm:ss'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
              <button class="btn btn-danger btn-sm" ng-click="eliminarDocs(doc.id_docs)"><i data-feather="trash-2"></i></button>          
            </td>
          </tr>        

        </tbody>
      </table>
    </div>
    
    <div ng-if="adoquines_if">
      <h4 class="tipo_title">Informes de Adoquines</h4>
      <hr class="hr_tabla">
      <table class="table table_clientes bg-gris">
        <thead>
          <tr>
            <th width="30%">Fichero</th>
            <th width="20%" >Id de Obra</th>
            <th width="25%">Fecha de subida</th>
            <th width="25%"></th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'adoquines'">
            <td class="left" title="{{doc.name_docs}}">
              <img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}
            </td>
            <td title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td>{{doc.create_date_docs|date:'dd-MM-yyyy HH:mm:ss'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
              <button class="btn btn-danger btn-sm" ng-click="eliminarDocs(doc.id_docs)"><i data-feather="trash-2"></i></button>           
            </td>
          </tr>        
        </tbody>
      </table>
    </div>

    
    <div ng-if="agregados_if">
      <h4 class="tipo_title">Informes de Agregados</h4>
      <hr class="hr_tabla">
      <table class="table table_clientes bg-gris">
        <thead>
          <tr>
            <th width="30%">Fichero</th>
            <th width="20%" >Id de Obra</th>
            <th width="25%">Fecha de subida</th>
            <th width="25%"></th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'agregados'">
            <td class="left" title="{{doc.name_docs}}">
              <img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}
            </td>
            <td title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td>{{doc.create_date_docs|date:'dd-MM-yyyy HH:mm:ss'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
              <button class="btn btn-danger btn-sm" ng-click="eliminarDocs(doc.id_docs)"><i data-feather="trash-2"></i></button>           
            </td>
          </tr>        
        </tbody>
      </table>
    </div>

    
    <div ng-if="analisis_e_if">
      <h4 class="tipo_title">Informes de Analisis Estadístico</h4>
      <hr class="hr_tabla">
      <table class="table table_clientes bg-gris">
        <thead>
          <tr>
            <th width="30%">Fichero</th>
            <th width="20%" >Id de Obra</th>
            <th width="25%">Fecha de subida</th>
            <th width="25%"></th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'analisis_e'">
            <td class="left" title="{{doc.name_docs}}">
              <img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}
            </td>
            <td title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td>{{doc.create_date_docs|date:'dd-MM-yyyy HH:mm:ss'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
              <button class="btn btn-danger btn-sm" ng-click="eliminarDocs(doc.id_docs)"><i data-feather="trash-2"></i></button>           
            </td>
          </tr>        
        </tbody>
      </table>
    </div>

    
    <div ng-if="agua_if">
      <h4 class="tipo_title">Informes de Agua</h4>
      <hr class="hr_tabla">
      <table class="table table_clientes bg-gris">
        <thead>
          <tr>
            <th width="30%">Fichero</th>
            <th width="20%" >Id de Obra</th>
            <th width="25%">Fecha de subida</th>
            <th width="25%"></th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'agua'">
            <td class="left" title="{{doc.name_docs}}">
              <img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}
            </td>
            <td title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td>{{doc.create_date_docs|date:'dd-MM-yyyy HH:mm:ss'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
              <button class="btn btn-danger btn-sm" ng-click="eliminarDocs(doc.id_docs)"><i data-feather="trash-2"></i></button>           
            </td>
          </tr>        
        </tbody>
      </table>
    </div>

    
    <div ng-if="baldosas_if">
      <h4 class="tipo_title">Informes de Baldosas de Cemento</h4>
      <hr class="hr_tabla">
      <table class="table table_clientes bg-gris">
        <thead>
          <tr>
            <th width="30%">Fichero</th>
            <th width="20%" >Id de Obra</th>
            <th width="25%">Fecha de subida</th>
            <th width="25%"></th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'baldosas'">
            <td class="left" title="{{doc.name_docs}}">
              <img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}
            </td>
            <td title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td>{{doc.create_date_docs|date:'dd-MM-yyyy HH:mm:ss'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
              <button class="btn btn-danger btn-sm" ng-click="eliminarDocs(doc.id_docs)"><i data-feather="trash-2"></i></button>           
            </td>
          </tr>        
        </tbody>
      </table>
    </div>

    
    <div ng-if="baldosin_if">
      <h4 class="tipo_title">Informes de Baldosín Cerámico</h4>
      <hr class="hr_tabla">
      <table class="table table_clientes bg-gris">
        <thead>
          <tr>
            <th width="30%">Fichero</th>
            <th width="20%" >Id de Obra</th>
            <th width="25%">Fecha de subida</th>
            <th width="25%"></th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'baldosin'">
            <td class="left" title="{{doc.name_docs}}">
              <img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}
            </td>
            <td title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td>{{doc.create_date_docs|date:'dd-MM-yyyy HH:mm:ss'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
              <button class="btn btn-danger btn-sm" ng-click="eliminarDocs(doc.id_docs)"><i data-feather="trash-2"></i></button>           
            </td>
          </tr>        
        </tbody>
      </table>
    </div>
   
    <div ng-if="concreto_if">
      <h4 class="tipo_title">Informes de Concreto</h4>
      <hr class="hr_tabla">
      <table class="table table_clientes bg-gris">
        <thead>
          <tr>
            <th width="30%">Fichero</th>
            <th width="20%" >Id de Obra</th>
            <th width="25%">Fecha de subida</th>
            <th width="25%"></th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'concreto'">
            <td class="left" title="{{doc.name_docs}}">
              <img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}
            </td>
            <td title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td>{{doc.create_date_docs|date:'dd-MM-yyyy HH:mm:ss'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
              <button class="btn btn-danger btn-sm" ng-click="eliminarDocs(doc.id_docs)"><i data-feather="trash-2"></i></button>           
            </td>
          </tr>        
        </tbody>
      </table>
    </div>
   
    <div ng-if="mamposteria_if">
      <h4 class="tipo_title">Informes de Mampostería</h4>
      <hr class="hr_tabla">
      <table class="table table_clientes bg-gris">
        <thead>
          <tr>
            <th width="30%">Fichero</th>
            <th width="20%" >Id de Obra</th>
            <th width="25%">Fecha de subida</th>
            <th width="25%"></th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'mamposteria'">
            <td class="left" title="{{doc.name_docs}}">
              <img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}
            </td>
            <td title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td>{{doc.create_date_docs|date:'dd-MM-yyyy HH:mm:ss'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
              <button class="btn btn-danger btn-sm" ng-click="eliminarDocs(doc.id_docs)"><i data-feather="trash-2"></i></button>           
            </td>
          </tr>        
        </tbody>
      </table>
    </div>

   
    <div ng-if="mortero_if">
      <h4 class="tipo_title">Informes de Mortero</h4>
      <hr class="hr_tabla">
      <table class="table table_clientes bg-gris">
        <thead>
          <tr>
            <th width="30%">Fichero</th>
            <th width="20%" >Id de Obra</th>
            <th width="25%">Fecha de subida</th>
            <th width="25%"></th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'mortero'">
            <td class="left" title="{{doc.name_docs}}">
              <img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}
            </td>
            <td title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td>{{doc.create_date_docs|date:'dd-MM-yyyy HH:mm:ss'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
              <button class="btn btn-danger btn-sm" ng-click="eliminarDocs(doc.id_docs)"><i data-feather="trash-2"></i></button>           
            </td>
          </tr>        
        </tbody>
      </table>
    </div>

   
    <div ng-if="mezcla_a_if">
      <h4 class="tipo_title">Informes de Mezclas Asfálticas</h4>
      <hr class="hr_tabla">
      <table class="table table_clientes bg-gris">
        <thead>
          <tr>
            <th width="30%">Fichero</th>
            <th width="20%" >Id de Obra</th>
            <th width="25%">Fecha de subida</th>
            <th width="25%"></th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'mezcla_a'">
            <td class="left" title="{{doc.name_docs}}">
              <img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}
            </td>
            <td title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td>{{doc.create_date_docs|date:'dd-MM-yyyy HH:mm:ss'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
              <button class="btn btn-danger btn-sm" ng-click="eliminarDocs(doc.id_docs)"><i data-feather="trash-2"></i></button>           
            </td>
          </tr>        
        </tbody>
      </table>
    </div>



   
    <div ng-if="nucleos_if">
      <h4 class="tipo_title">Informes de Núcleos de Concreto</h4>
      <hr class="hr_tabla">
      <table class="table table_clientes bg-gris">
        <thead>
          <tr>
            <th width="30%">Fichero</th>
            <th width="20%" >Id de Obra</th>
            <th width="25%">Fecha de subida</th>
            <th width="25%"></th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'nucleos'">
            <td class="left" title="{{doc.name_docs}}">
              <img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}
            </td>
            <td title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td>{{doc.create_date_docs|date:'dd-MM-yyyy HH:mm:ss'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
              <button class="btn btn-danger btn-sm" ng-click="eliminarDocs(doc.id_docs)"><i data-feather="trash-2"></i></button>           
            </td>
          </tr>        
        </tbody>
      </table>
    </div>
   
    <div ng-if="suelos_if">
      <h4 class="tipo_title">Informes de Suelos</h4>
      <hr class="hr_tabla">
      <table class="table table_clientes bg-gris">
        <thead>
          <tr>
            <th width="30%">Fichero</th>
            <th width="20%" >Id de Obra</th>
            <th width="25%">Fecha de subida</th>
            <th width="25%"></th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'suelos'">
            <td class="left" title="{{doc.name_docs}}">
              <img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}
            </td>
            <td title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td>{{doc.create_date_docs|date:'dd-MM-yyyy HH:mm:ss'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
              <button class="btn btn-danger btn-sm" ng-click="eliminarDocs(doc.id_docs)"><i data-feather="trash-2"></i></button>           
            </td>
          </tr>        
        </tbody>
      </table>
    </div>

    <div ng-if="losetas_if">
      <h4 class="tipo_title">Informes de Losetas</h4>
      <hr class="hr_tabla">
      <table class="table table_clientes bg-gris">
        <thead>
          <tr>
            <th width="30%">Fichero</th>
            <th width="20%" >Id de Obra</th>
            <th width="25%">Fecha de subida</th>
            <th width="25%"></th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'losetas'">
            <td class="left" title="{{doc.name_docs}}">
              <img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}
            </td>
            <td title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td>{{doc.create_date_docs|date:'dd-MM-yyyy HH:mm:ss'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
              <button class="btn btn-danger btn-sm" ng-click="eliminarDocs(doc.id_docs)"><i data-feather="trash-2"></i></button>           
            </td>
          </tr>        
        </tbody>
      </table>
    </div>

    <div ng-if="otros_if">
      <h4 class="tipo_title">Otros tipos de informes</h4>
      <hr class="hr_tabla">
      <table class="table table_clientes bg-gris">
        <thead>
          <tr>
            <th width="30%">Fichero</th>
            <th width="20%" >Id de Obra</th>
            <th width="25%">Fecha de subida</th>
            <th width="25%"></th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'otros'">
            <td class="left" title="{{doc.name_docs}}">
              <img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}
            </td>
            <td title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td>{{doc.create_date_docs|date:'dd-MM-yyyy HH:mm:ss'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
              <button class="btn btn-danger btn-sm" ng-click="eliminarDocs(doc.id_docs)"><i data-feather="trash-2"></i></button>           
            </td>
          </tr>        
        </tbody>
      </table>
    </div>



    <!-- final de tablas -->
    </div>
  </div>
</div>




<!-- Central Modal Small -->
<div class="modal fade" id="centralModalDoc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        
        <form ng-model="myForm">
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
                              <option value="alquiler_e">Alquiler de equipo</option>
                              <option value="adoquines">Adoquines</option>
                              <option value="agregados">Agregados</option>
                              <option value="analisis_e">Análisis estadístico</option>
                              <option value="agua">Agua</option>
                              <option value="baldosas">Baldosas de cemento</option>
                              <option value="baldosin">Baldosín cerámico</option>
                              <option value="concreto">Concreto</option>
                              <option value="mamposteria">Mampostería</option>
                              <option value="mortero">Mortero</option>
                              <option value="mezcla_a">Mezclas asfálticas</option>
                              <option value="nucleos">Núcleos de concreto</option>
                              <option value="suelos">Suelos</option>
                              <option value="losetas">Losetas</option>
                              <option value="otros">Otros tipos de informes</option>
                            </select>
                        </div>                    
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div class="md-form">
                            <i data-feather="upload" class="prefix"></i>
                            <input ng-model="file_input" placeholder=" " type="file" id="doc_file" class="form-control file_input" file-input="files" area-describedby="max-size">
                              <small id="max-size" class="form-text text-muted">Peso máximo soportado 10MB.
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