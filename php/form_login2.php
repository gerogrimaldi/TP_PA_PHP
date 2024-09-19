<!-- POR EL MOMENTO SIN USO -->

<?php

echo '<div align="center" class="mt-5 shadow p-3 mb-5 bg-white rounded">
        
        <form method="post" action="./php/procesoLogin.php"  class="form-horizontal" role="form" align="center">
            <div class="form-group" align="center">
            <div class="col-sm-6">
                    <label class="control-label col-sm-2"  for="username">Nombre*</label>
                    <input type="text" name="usuario" id="usuario" placeholder="usuario" required="true" class="form-control"/>
                </div>
            </div>  
            <div class="form-group" align="center">
                <label class="control-label col-sm-2" for="password">Contraseña<em>*</em></label>
                <div class="col-sm-6">            
                    <input type="password" name="contrasenia" id="contrasenia" required="true" class="form-control"/> 
                </div>
            </div>
            <div class="form-group" align="center"> 
                <div class="col-sm-offset-2 col-sm-8">  
                    <input type="submit" name="send" id="send   " value="Enviar" class="btn btn-default"/>
                </div>
            </div>     
        </form>
            
    </div>
'
?>