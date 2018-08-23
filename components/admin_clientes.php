<div ng-show="tab === 1" ng-init="mostrarClientes()" class="fluid-container global-contenedor">
  <h2 class="h2_title">Administración de clientes</h2>
  <div class="info_admin z-depth-2">
    <div class="nav-clientes">
      <div class="form-group form-control1">
        <input class="form-control form-control-lg" type="text" ng-model="searchCliente" placeholder="Buscar por Obra o Constructora">
      </div>
      <button ng-click="btnToCrear()" class="btn btn-white btn-navs" type="button" data-target="#centralModalSm" data-toggle="modal" name="crear_obra"><i data-feather="folder-plus"></i>Crear Obra</button>
    </div>
    <div class="table-responsive">
    <table class="table table_clientes">
      <thead>
        <tr>
          <th>No</th>
          <th>Id de Obra</th>
          <th >Nombre de obra</th>
          <th >Constructora</th>
          <th>Responsable</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr  ng-repeat="cliente in clientes | filter:searchCliente | orderBy:'fullname'">
          <td class="left">{{$index+1}}</td>
          <td>{{cliente.obra_id}}</td>
          <td  title="{{cliente.obra}}">{{cliente.obra}}</td>
          <td  title="{{cliente.company}}">{{cliente.company}}</td>
          <td  title="{{cliente.company}}">{{cliente.fullname}}</td>
          <td>
            <button data-target="#centralModalSm" data-toggle="modal" class="btn btn-danger btn-sm" 
            ng-click="actualizarCliente(cliente.id,cliente.fullname,cliente.company,cliente.phone,cliente.cellphone,cliente.email,cliente.obra_id,cliente.obra,cliente.fecha_creacion,cliente.fecha_modificacion)"> <i data-feather="user"></i></button>
            
          </td>
        </tr>

      </tbody>
    </table>
    </div>
  </div>
</div>

<!-- Central Modal Small -->
<div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">


      <div class="modal-content">
        <form>
        <div class="modal-header">

          <h4 align="center" class="modal-title w-100" id="myModalLabel">{{modalTitle}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
              <input type="hidden" ng-model="id">
                <div class="form-row">
                    <div class="col-xs-12 col-md-6">
                        <div class="md-form">
                            <i data-feather="edit-3" class="prefix"></i>
                            <input placeholder=" " type="number" id="obra_id" class="form-control" name="obra_id" ng-model="obra_id" >
                            <label for="obra_id">ID de la obra*</label>
                        </div>                    
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="md-form">
                            <i data-feather="archive" class="prefix"></i>
                            <input placeholder=" " type="text" id="obra" class="form-control" ng-model="obra">
                            <label for="obra">Nombre del proyecto*</label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6"> 
                        <div class="md-form">
                            <i data-feather="globe" class="prefix"></i>
                            <input title="Nombre completo de la constructora" placeholder=" " type="text" id="constructora" class="form-control" ng-model="constructora">
                            <label for="constructora">Constructora*</label>
                        </div>    
                    </div>
                    <div class="col-xs-12 col-md-6">                   
                        <div class="md-form">
                            <i data-feather="user" class="prefix"></i>
                            <input title="Nombre completo de persona a cargo" placeholder=" " type="text" id="encargado" class="form-control" ng-model="encargado">
                            <label for="encargado">Persona a cargo*</label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6"> 
                        <div class="md-form">
                            <i data-feather="phone" class="prefix"></i>
                            <input placeholder=" " type="number" id="phone" class="form-control" ng-model="phone">
                            <label for="phone">Teléfono PBX</label>
                        </div>                        
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="md-form">
                            <i data-feather="smartphone" class="prefix"></i>
                            <input placeholder=" " type="number" id="cellphone" class="form-control" ng-model="cellphone">
                            <label for="cellphone">Celular</label>
                        </div>  
                    </div>
                    <div class="col-xs-12 col-md-6">                      
                        <div class="md-form">
                            <i data-feather="mail" class="prefix"></i>
                            <input placeholder=" " type="email" id="correo" class="form-control validate" ng-model="correo">
                            <label data-error="No es válido" data-success="Correcto" for="correo">Correo Electrónico*</label>
                        </div>                        
                    </div>
                </div>

        </div>

        <div class="modal-footer">

              <p align="center">Fecha de creación: {{fecha_creacion | date:'dd-MM-yyyy HH:mm:ss'}} <br>
              Última modificación: {{fecha_modificacion | date:'dd-MM-yyyy HH:mm:ss'}}</p>

          <p align="center">Ingresa los datos de la obra, recuerda que muchos de los campos son obligatorios y están referenciados con un asterísco.</p>
          
          <div>
          <input ng-style="mostrar"  ng-click="" class="btn btn-white btn-md" type="reset" value="Limpiar">
          <input data-dismiss="modal" ng-click="crearCliente()" class="btn btn-danger " type="button" value="{{btnName}}">
          <button ng-style="DeleteIcon" data-dismiss="modal" ng-click="eliminar()" class="btn btn-dark btn-sm trash-btn"><i data-feather="trash-2" class="prefix"> </i></button>
          
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Central Modal Small -->