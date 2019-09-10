<?php 

    require_once "config.php";
    require_once "head.php";
?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Contatos</h4>
            <p class="card-text">
                    <p>Sincronizado com Google Contatos API</p>
            </p>
         </div>
    </div>
</div>

<form method="POST" action="" id="form_contato">
  <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Nome: </label>
                    <input type="text" class="form-control" id="nome" name="nome" value="Zeferino" placeholder="Nome" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>E-mail: </label>
                    <input type="email" class="form-control" id="email" name="email" value="zeferino@hotmail.com" placeholder="E-mail" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Celular: </label>
                    <input type="cel" class="form-control" id="cel" name="cel" value="4799999999" placeholder="DDDXXXXXXXXX" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <input type="submit" value="Salvar" name="salvar_contato" id="salvar_contato" class="btn btn-primary">
                </div>
            </div>
        </div>
    </div>
</form>

</body>

<script type="text/javascript">
  
   $(document).ready(function() {
        $('#form_contato').submit(function(e) {
            e.preventDefault();
            var dados = $("#form_contato").serialize();
            //var dados = "nome="+$("#nome").val()+"&email="+$("#email").val()+"&cel="+$("#cel").val();
            console.log("dados= " +dados);
            
            $.ajax({
                type: 'POST',
                url: 'save_contatos.php',
                data: dados,
                cache: false,
                success(response) {
                    if(response == 1) {
                       alert("OK");
                    }
                    else {
                        alert("OPS algo ocorreu!");
                    }
                    console.log(response);
                }
            });
              return false;
        });
    });
  
</script>