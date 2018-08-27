<div ng-show="tab === 1" ng-class="display">
  <div class="searching-space">
  	<input class="form-control" type="text" placeholder="Busca por fecha formato: AAAA-MM-DD" ng-model="searchObra.create_date_docs">
  </div>
  <div class="table-container table-responsive">

      <table class="table table_clientes" ng-if="alquiler_e_if">
        <thead>
          <tr>
            <th class="left" width="35%">Alquiler de equipo</th>
            <th class="obra_gone" width="25%">Id de Obra</th>
            <th  class="obra_gone" width="30%">Fecha de actualización</th>
            <th style="text-align: right;padding-right: 1.8em;" width="10%">Descargar</th>
          </tr>
        </thead>
        <tbody class="tbody-services">
          <tr  ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'alquiler_e'">
            <td class="left" class="left" title="{{doc.name_docs}}"><img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}</td>
            <td class="obra_gone"  title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td class="obra_gone" >{{doc.create_date_docs|date:'dd-MM-yyyy'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
            </td>
          </tr>        
        </tbody>
      </table>

      <table class="table table_clientes" ng-if="adoquines_if">
        <thead>
          <tr>
            <th class="left" width="35%">Informes de Adoquines</th>
            <th class="obra_gone" width="25%">Id de Obra</th>
            <th class="obra_gone"  width="30%">Fecha de actualización</th>
            <th style="text-align: right;padding-right: 1.8em;" width="10%">Descargar</th>
          </tr>
        </thead>
        <tbody class="tbody-services">
          <tr  ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'adoquines'">
            <td class="left" class="left" title="{{doc.name_docs}}"><img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}</td>
            <td class="obra_gone"  title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td class="obra_gone" >{{doc.create_date_docs|date:'dd-MM-yyyy'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
            </td>
          </tr>        
        </tbody>
      </table>

      <table class="table table_clientes" ng-if="agregados_if">
        <thead>
          <tr>
            <th class="left" width="35%">Informes de Agregados</th>
            <th class="obra_gone" width="25%">Id de Obra</th>
            <th class="obra_gone"  width="30%">Fecha de actualización</th>
            <th style="text-align: right;padding-right: 1.8em;" width="10%">Descargar</th>
          </tr>
        </thead>
        <tbody class="tbody-services">
          <tr  ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'agregados'">
            <td class="left" class="left" title="{{doc.name_docs}}"><img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}</td>
            <td class="obra_gone"  title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td class="obra_gone" >{{doc.create_date_docs|date:'dd-MM-yyyy'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
            </td>
          </tr>        
        </tbody>
      </table>

      <table class="table table_clientes" ng-if="analisis_e_if">
        <thead>
          <tr>
            <th class="left" width="35%">Informes de Analisis Estadístico</th>
            <th class="obra_gone" width="25%">Id de Obra</th>
            <th class="obra_gone"  width="30%">Fecha de actualización</th>
            <th style="text-align: right;padding-right: 1.8em;" width="10%">Descargar</th>
          </tr>
        </thead>
        <tbody class="tbody-services">
          <tr  ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'analisis_e'">
            <td class="left" class="left" title="{{doc.name_docs}}"><img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}</td>
            <td class="obra_gone"  title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td class="obra_gone" >{{doc.create_date_docs|date:'dd-MM-yyyy'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
            </td>
          </tr>        
        </tbody>
      </table>

      <table class="table table_clientes" ng-if="agua_if">
        <thead>
          <tr>
            <th class="left" width="35%">Informes de Agua</th>
            <th class="obra_gone" width="25%">Id de Obra</th>
            <th class="obra_gone"  width="30%">Fecha de actualización</th>
            <th style="text-align: right;padding-right: 1.8em;" width="10%">Descargar</th>
          </tr>
        </thead>
        <tbody class="tbody-services">
          <tr  ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'agua'">
            <td class="left" class="left" title="{{doc.name_docs}}"><img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}</td>
            <td class="obra_gone"  title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td class="obra_gone" >{{doc.create_date_docs|date:'dd-MM-yyyy'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
            </td>
          </tr>        
        </tbody>
      </table>

      <table class="table table_clientes" ng-if="baldosas_if">
        <thead>
          <tr>
            <th class="left" width="35%">Informes de Baldosas de Cemento</th>
            <th class="obra_gone" width="25%">Id de Obra</th>
            <th class="obra_gone"  width="30%">Fecha de actualización</th>
            <th style="text-align: right;padding-right: 1.8em;" width="10%">Descargar</th>
          </tr>
        </thead>
        <tbody class="tbody-services">
          <tr  ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'baldosas'">
            <td class="left" class="left" title="{{doc.name_docs}}"><img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}</td>
            <td class="obra_gone"  title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td class="obra_gone" >{{doc.create_date_docs|date:'dd-MM-yyyy'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
            </td>
          </tr>        
        </tbody>
      </table>

      <table class="table table_clientes" ng-if="baldosin_if">
        <thead>
          <tr>
            <th class="left" width="35%">Informes de Baldosín Cerámico</th>
            <th class="obra_gone" width="25%">Id de Obra</th>
            <th class="obra_gone"  width="30%">Fecha de actualización</th>
            <th style="text-align: right;padding-right: 1.8em;" width="10%">Descargar</th>
          </tr>
        </thead>
        <tbody class="tbody-services">
          <tr  ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'baldosin'">
            <td class="left" class="left" title="{{doc.name_docs}}"><img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}</td>
            <td class="obra_gone"  title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td class="obra_gone" >{{doc.create_date_docs|date:'dd-MM-yyyy'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
            </td>
          </tr>        
        </tbody>
      </table>

      <table class="table table_clientes" ng-if="concreto_if">
        <thead>
          <tr>
            <th class="left" width="35%">Informes de Concreto</th>
            <th class="obra_gone" width="25%">Id de Obra</th>
            <th class="obra_gone"  width="30%">Fecha de actualización</th>
            <th style="text-align: right;padding-right: 1.8em;" width="10%">Descargar</th>
          </tr>
        </thead>
        <tbody class="tbody-services">
          <tr  ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'concreto'">
            <td class="left" class="left" title="{{doc.name_docs}}"><img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}</td>
            <td class="obra_gone"  title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td class="obra_gone" >{{doc.create_date_docs|date:'dd-MM-yyyy'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
            </td>
          </tr>        
        </tbody>
      </table>

      <table class="table table_clientes" ng-if="mamposteria_if">
        <thead>
          <tr>
            <th class="left" width="35%">Informes de Mampostería</th>
            <th class="obra_gone" width="25%">Id de Obra</th>
            <th class="obra_gone"  width="30%">Fecha de actualización</th>
            <th style="text-align: right;padding-right: 1.8em;" width="10%">Descargar</th>
          </tr>
        </thead>
        <tbody class="tbody-services">
          <tr  ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'mamposteria'">
            <td class="left" class="left" title="{{doc.name_docs}}"><img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}</td>
            <td class="obra_gone"  title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td class="obra_gone" >{{doc.create_date_docs|date:'dd-MM-yyyy'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
            </td>
          </tr>        
        </tbody>
      </table>

      <table class="table table_clientes" ng-if="mortero_if">
        <thead>
          <tr>
            <th class="left" width="35%">Informes de Mortero</th>
            <th class="obra_gone" width="25%">Id de Obra</th>
            <th class="obra_gone"  width="30%">Fecha de actualización</th>
            <th style="text-align: right;padding-right: 1.8em;" width="10%">Descargar</th>
          </tr>
        </thead>
        <tbody class="tbody-services">
          <tr  ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'mortero'">
            <td class="left" class="left" title="{{doc.name_docs}}"><img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}</td>
            <td class="obra_gone"  title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td class="obra_gone" >{{doc.create_date_docs|date:'dd-MM-yyyy'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
            </td>
          </tr>        
        </tbody>
      </table>

      <table class="table table_clientes" ng-if="mezcla_a_if">
        <thead>
          <tr>
            <th class="left" width="35%">Informes de Mezclas Asfálticas</th>
            <th class="obra_gone" width="25%">Id de Obra</th>
            <th class="obra_gone"  width="30%">Fecha de actualización</th>
            <th style="text-align: right;padding-right: 1.8em;" width="10%">Descargar</th>
          </tr>
        </thead>
        <tbody class="tbody-services">
          <tr  ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'mezcla_a'">
            <td class="left" class="left" title="{{doc.name_docs}}"><img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}</td>
            <td class="obra_gone"  title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td class="obra_gone" >{{doc.create_date_docs|date:'dd-MM-yyyy'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
            </td>
          </tr>        
        </tbody>
      </table>

      <table class="table table_clientes" ng-if="nucleos_if">
        <thead>
          <tr>
            <th class="left" width="35%">Informes de Núcleos de Concreto</th>
            <th class="obra_gone" width="25%">Id de Obra</th>
            <th class="obra_gone"  width="30%">Fecha de actualización</th>
            <th style="text-align: right;padding-right: 1.8em;" width="10%">Descargar</th>
          </tr>
        </thead>
        <tbody class="tbody-services">
          <tr  ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'nucleos'">
            <td class="left" class="left" title="{{doc.name_docs}}"><img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}</td>
            <td class="obra_gone"  title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td class="obra_gone" >{{doc.create_date_docs|date:'dd-MM-yyyy'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
            </td>
          </tr>        
        </tbody>
      </table>

      <table class="table table_clientes" ng-if="suelos_if">
        <thead>
          <tr>
            <th class="left" width="35%">Informes de Suelos</th>
            <th class="obra_gone" width="25%">Id de Obra</th>
            <th class="obra_gone"  width="30%">Fecha de actualización</th>
            <th style="text-align: right;padding-right: 1.8em;" width="10%">Descargar</th>
          </tr>
        </thead>
        <tbody class="tbody-services">
          <tr  ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'suelos'">
            <td class="left" class="left" title="{{doc.name_docs}}"><img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}</td>
            <td class="obra_gone"  title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td class="obra_gone" >{{doc.create_date_docs|date:'dd-MM-yyyy'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
            </td>
          </tr>        
        </tbody>
      </table>


      <table class="table table_clientes" ng-if="losetas_if">
        <thead>
          <tr>
            <th class="left" width="35%">Informes de Losetas</th>
            <th class="obra_gone" width="25%">Id de Obra</th>
            <th class="obra_gone"  width="30%">Fecha de actualización</th>
            <th style="text-align: right;padding-right: 1.8em;" width="10%">Descargar</th>
          </tr>
        </thead>
        <tbody class="tbody-services">
          <tr  ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'losetas'">
            <td class="left" class="left" title="{{doc.name_docs}}"><img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}</td>
            <td class="obra_gone"  title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td class="obra_gone" >{{doc.create_date_docs|date:'dd-MM-yyyy'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
            </td>
          </tr>        
        </tbody>
      </table>


      <table class="table table_clientes" ng-if="otros_if">
        <thead>
          <tr>
            <th class="left" width="35%">Otros tipos de informes</th>
            <th class="obra_gone" width="25%">Id de Obra</th>
            <th class="obra_gone"  width="30%">Fecha de actualización</th>
            <th style="text-align: right;padding-right: 1.8em;" width="10%">Descargar</th>
          </tr>
        </thead>
        <tbody class="tbody-services">
          <tr  ng-repeat="doc in docs | filter:searchObra | orderBy:''" ng-show="doc.type_doc == 'otros'">
            <td class="left" class="left" title="{{doc.name_docs}}"><img width="15" src="../ingeomac/images/formatos/{{doc.formato_docs}}" alt=""> {{doc.name_docs}}</td>
            <td class="obra_gone"  title="{{doc.obra_id_docs}}">{{doc.obra_id_docs}}</td>
            <td class="obra_gone" >{{doc.create_date_docs|date:'dd-MM-yyyy'}}</td>
            <td class="text-right pg-right">
              <a href="php/upload/{{doc.name_docs}}" download><button class="btn btn-success btn-sm"><i data-feather="download"></i></button></a> 
            </td>
          </tr>        
        </tbody>
      </table>


  </div>
</div>