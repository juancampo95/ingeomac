<div ng-show="tab === 2" ng-init="mostrar_S_Datos()">
  <form class="datos-services-form">
    <div class="modal-body">
      <input type="hidden" ng-model="id">
      <div class="form-row">
        <div class="col-xs-12 col-md-6">
          <div class="md-form">
            <i data-feather="edit-3" class="prefix"></i>
            <input placeholder=" " type="number" id="obra_id" class="form-control" name="obra_id" ng-model="obra_id" disabled>
            <label for="obra_id">ID de la obra <span style="color: red">(Deshabilitado)</span></label>
          </div>                    
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="md-form">
            <i data-feather="archive" class="prefix"></i>
            <input placeholder=" " type="text" id="obra" class="form-control" ng-model="obra" disabled>
            <label for="obra">Nombre del proyecto <span style="color: red">(Deshabilitado)</span></label>
          </div>
        </div>
        <div class="col-xs-12 col-md-6"> 
          <div class="md-form">
            <i data-feather="globe" class="prefix"></i>
            <input title="Nombre completo de la constructora" placeholder=" " type="text" id="constructora" class="form-control" ng-model="constructora" disabled>
            <label for="constructora">Constructora <span style="color: red">(Deshabilitado)</span></label>
          </div>    
        </div>
        <div class="col-xs-12 col-md-6">                   
          <div class="md-form">
            <i data-feather="user" class="prefix"></i>
            <input title="Nombre completo de persona a cargo" placeholder=" " type="text" id="encargado" class="form-control" ng-model="encargado">
            <label for="encargado">Persona a cargo</label>
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
    <!-- Footer -->
    <div class="modal-footer moda-services-footer">
      <p align="center">Fecha de creación: {{dCliente.fecha_creacion | date:'dd-MM-yyyy HH:mm:ss'}} <br>
                 Última modificación: {{dCliente.fecha_modificacion | date:'dd-MM-yyyy HH:mm:ss'}}</p>
      <p align="center">Ingrese los datos permitidos de contácto y personal encargado de la obra.</p>
      <div>
        <input data-dismiss="modal" ng-click="actualizarDatos()" class="btn btn-danger " type="button" value="Actualizar datos">
      </div>
    </div>
  </form>
</div>