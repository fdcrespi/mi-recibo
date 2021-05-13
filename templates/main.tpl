{include 'head.tpl'}

<div class="formu col-sm-4 mx-auto">
        <p>{$recibo}</p>
        <form class="row g-3" action="view/verrecibo.php" method="POST">
            <div class="encabezado card-header">
                Recibo de sueldos
            </div>
            <div class="input-group">
                <div class="form-floating m-auto">
                    <input type="email" class="form-control" placeholder="Número de DU">
                    <label for="floatingInputValue">Documento</label>
                </div>
                <div class="form-floating m-auto">
                    <input type="password" class="form-control" placeholder="Contraseña">
                    <label for="floatingInputValue">Contraseña</label>
                </div>
            </div>
            <div class="input-group">
                <div class="form-group col-md-3 m-auto">
                    <label for="numEmpleado">Legajo</label>
                    <input type="text" class="form-control" name="legajo" id="numEmpleado" required>
                </div>
                <div class="form-group col-md-3 m-auto">
                    <label for="inputState">Mes</label>
                    <input type="number" class="form-control" name="mes" id="mes" placeholder="MM" required>
                </div>
                <div class="form-group col-md-3 m-auto">
                    <label for="anio">Año</label>
                    <input type="number" class="form-control" name="anio" id="anio" placeholder="AAAA" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Ver recibo</button>
        </form>
    </div>