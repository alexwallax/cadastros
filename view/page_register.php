<?php include_once 'dependencias.php'; ?>

<h2 class="text-center">
    Página de Registros <i class="fa fa-user-plus"></i> 
</h2><hr>

<form method="POST" action="../controller/insert_client.php">

    <div class="container r1">

        <div class="form-row r2">

            <div class="col-md-6 r3">
                Nome: <i class="fa fa-user"></i>
                <input class="form-control" type="text" name="name" required autofocus><br />
            </div><!--r3-->

            <div class="col-md-6 r4">
                E-mail: <i class="fa fa-envelope"></i>
                <input class="form-control" type="email" name="email" required><br />
            </div><!--r4-->

            <div class="col-md-4 r5">
                CPF: <i class="fa fa-address-card"></i>
                <input class="form-control" type="text" name="cpf" required id="cpf"><br />
            </div><!--r5-->

            <div class="col-md-4 r6">
                Data de Nascimento: <i class="fa fa-calendar"></i>
                <input class="form-control" type="date" name="birth" required><br />
            </div><!--r6-->

            <div class="col-md-4 r7">
                Telefone: <i class="fab fa-whatsapp"></i>
                <input class="form-control" type="text" name="phone" required id="phone"><br />
            </div><!--r7-->

            <div class="col-md-12 r8">
                Endereço: <i class="fa fa-map"></i>
                <input class="form-control" type="text" name="address" required><br />
            </div><!--r8-->

            <div class="col-md-4 r9">

                <button class="btn btn-primary btn-lg">

                    Inserir Cliente <i class="fa fa-user-plus"></i>

                </button><br/><br/>

                <a href="../index.php">
                    Voltar
                </a>

            </div><!--r9-->

        </div><!--r2-->

    </div><!--r1-->

</form>







<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> 

<script type="text/javascript">
    //mascarar cfp e telefone par ter um padrão
    $(document).ready(function(){
        $("#cpf").mask("000.000.000-00");
        $("#phone").mask("(00) 00000-0000");
    });
</script>

