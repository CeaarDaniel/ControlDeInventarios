<div class="d-flex aling-content-center justify-content-center">
    <form 
            id="login"   
            class="my-2 p-5 border rounded"
            style="background-color:#D8DCDC; max-width:400px;">


                <div class="d-flex flex-column justify-content-center">
                    <img src="./img/Auto.png" alt="" style="max-width:300px">
                    <h4  class="p-2 text-center" style="max-width:300px"><b>CONTROL DE REGISTRO Y PRÉSTAMO DE AUTOS</b></h4>
                </div>
                        

                <div class="form-group p-1" style="width:100%">
                    <label class="mt-3"><b>NOMBRE DE USUARIO</b></label>
                    <div class="input-group">
                        <input class="form-control" type="text" name="" id="">
                        <span class="input-group-text mt-1 p-0" style="background-color:white;"><i class="px-3 fas fa-user-alt"></i></span> 
                    </div>

                    
                    <label class="mt-3"><b>CONTRASEÑA</b></label>
                    <div class="input-group">
                        <input type="password" name="password" id="password" autocomplete="current-password" class="form-control mt-1" placeholder="CONTRASEÑA" required>
                        <span class="input-group-text mt-1 p-0"><i id="btn-change" class="px-3 fa fa-eye fa-eye-slash"></i></span> 
                    </div>          
                </div>

                    <div class="d-flex justify-content-center" style="width:100%;">
                        <button class="btn boton mt-1" type="button" onclick="navigation('menuIndex',0)">
                                ACCEDER
                        </button>
                    </div>
    </form>
</div>
<button class="volver" onclick="navigation('menuIndex',0)"> <i class="fa fa-arrow-left py-2 px-2" style="font-size:25px; color:#021e6e"></i></button>