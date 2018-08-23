<div ng-show="tab === 1">
  <div class="searching-space">
  	<input class="form-control" type="text" placeholder="Busca por fecha formato: AAAA-MM-DD" ng-model="searchObra.create_date_docs">
  </div>
  <div class="table-container table-responsive">
    <!-- tabla de densidades -->
      <table class="table table_clientes" ng-if="dens_if">
        <thead>
          <tr>
            <th class="left" width="35%">Informes de Densidades</th>
            <th class="obra_gone" width="25%">Id de Obra</th>
            <th  class="obra_gone" width="30%">Fecha de actualización</th>
            <th style="text-align: right;padding-right: 1.8em;" width="10%">Descargar</th>
          </tr>
        </thead>
        <tbody class="tbody-services">
          <tr  ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'densidades'">
            <td class="left" class="left" title="{{doc.name_docs}}"><img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}</td>
            <td class="obra_gone"  title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td class="obra_gone" >{{doc.create_date_docs|date:'dd-MM-yyyy'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
            </td>
          </tr>        
        </tbody>
      </table>
  <!-- Cierra tabla de densidades -->
  <!-- Tabla de Informes de Proctor Modificado -->
      <table class="table table_clientes" ng-if="proctor">
        <thead>
          <tr>
            <th class="left" width="35%">Proctor Modificado</th>
            <th class="obra_gone" width="25%">Id de Obra</th>
            <th class="obra_gone"  width="30%">Fecha de actualización</th>
            <th style="text-align: right;padding-right: 1.8em;" width="10%">Descargar</th>
          </tr>
        </thead>
        <tbody class="tbody-services">
          <tr  ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'proctor_mod'">
            <td class="left" class="left" title="{{doc.name_docs}}"><img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}</td>
            <td class="obra_gone"  title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td class="obra_gone" >{{doc.create_date_docs|date:'dd-MM-yyyy'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
            </td>
          </tr>        
        </tbody>
      </table>
  <!-- Cierre Tabla de Informes de Proctor Modificado -->
  </div>
</div>