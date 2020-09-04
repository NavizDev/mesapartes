<?php include("includes/header.php");
if(!empty($statusMsg)){ ?>
<p><?php echo $statusMsg; ?></p>
<?php }
?>


<div class="container p-4">
    <div class="card mb-2">
        <div class="card-header">
            <h5 class="card-title">MESA DE PARTES VIRTUAL</h5>
        </div>
        <div class="card-body">
            Estimados usuarios, para mayor facilidad, se ha puesto a su disposición este formulario, que le
            permitirá el
            envío de documentos a la Municipalidad Distrital Daniel Alomia Robles.
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Formulario</h5>
        </div>
        <div class="card-body">
            <h3>Datos del solicitante</h3>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                enctype="multipart/form-data">
                <!-- <div class="form-group">
                <label for="type_person">Tipo de persona</label>
                <select name="type_person" id="type_person" class="form-control col-sm-12 col-md-4">
                    <option value="1">Ciudadano</option>
                    <option value="3">Persona Juridica</option>
                </select>
            </div> -->
                <div class="form-group">
                    <label for="dni">N° DNI</label>
                    <input type="text" name="dni" id="dni" class="form-control col-sm-12 col-md-4">
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-12 col-md-4">
                        <label for="last_name_1">Apellido Paterno</label>
                        <input type="text" name="last_name_1" id="last_name_1" class="form-control">
                    </div>
                    <div class="form-group col-sm-12 col-md-4">
                        <label for="last_name_2">Apellido Materno</label>
                        <input type="text" name="last_name_2" id="last_name_2" class="form-control">
                    </div>
                    <div class="form-group col-sm-12 col-md-4">
                        <label for="name">Nombres</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-sm-12 col-md-4">
                        <label for="phone">Telefono</label>
                        <input type="number" name="phone" id="phone" class="form-control">
                    </div>
                    <div class="form-group col-sm-12 col-md-4">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                </div>

                <h2>Datos del Documento</h2>
                <div class="form-group">

                </div>

                <div class="form-row">
                    <div class="form-group col-sm-12 col-md-4">
                        <label for="type_doc">Tipo de documento</label>
                        <select name="type_doc" id="type_doc" class="form-control">
                            <option value="0">AYUDA MEMORIA</option>
                            <option value="1">CARTA</option>
                            <option value="2">DIRECTIVA</option>
                            <option value="3">EXPOSICION DE MOTIVOS</option>
                            <option value="4">INFORME</option>
                            <option value="5">MEMORANDO</option>
                            <option value="6">MEMORANDO MULTIPLE</option>
                            <option value="7">NOTA DE ELEVACION</option>
                            <option value="8">OFICIO</option>
                            <option value="9">OFICIO CIRCULAR</option>
                            <option value="10">OFICIO MULTIPLE</option>
                            <option value="11">PROVEIDO</option>
                            <option value="12">RESOLUCION</option>
                            <option value="13">SOBRE CERRADO</option>
                            <option value="14">SOLICITUD</option>
                            <option value="15">OTROS</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-12 col-md-4">
                        <label for="n_doc">N° de Documento</label>
                        <input type="text" name="n_doc" id="n_doc" class="form-control">
                    </div>
                    <div class="form-group col-sm-12 col-md-4">
                        <label for="n_folio">N° de folios</label>
                        <input type="text" name="n_folio" id="n_folio" class="form-control">
                    </div>
                    <div class="form-group col-sm-12 col-md-6">
                        <label for="subject">Asunto</label>
                        <textarea name=" subject" id="subject" rows="3" maxlength="500" class="form-control"></textarea>
                    </div>
                    <div class="form-group col-sm-12 col-md-12">
                        <label for="file">Documento</label>
                        <input type="file" name="file" id="file" class="form-control-file">
                    </div>

                </div>
                <input type="submit" value="Enviar Solicitud" name="submit" class="btn btn-success btn-block">
            </form>

        </div>
    </div>
</div>

<?php
        //include("registrar.php");
        include("send_email.php");
        include("includes/footer.php")
    ?>