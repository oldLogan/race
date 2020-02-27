<style>
    .check-carros{
        width: 40%;
    }
</style>

<script>

    $(function(){
        var qtdSelecionados = $("[name='veiculos']:checked").length;

        $("[name='veiculos']").click(function(){
            qtdSelecionados = $("[name='veiculos']:checked").length == 0 ? '' : $("[name='veiculos']:checked").length;
            $("#qtdSelecionados").html(qtdSelecionados);

            joinVeiculosSelecionados();
        });

        $("#frmVeiculosSelecionados").submit(function(){
            joinVeiculosSelecionados();
        });

        var joinVeiculosSelecionados = function(){
            var stringJoin = "";
            $("[name='veiculos']:checked").each(function(i, e){
                stringJoin += $(e).val() + ',';
            });
            $("#veiculosSelecionados").val(stringJoin);
        };

    });

</script>

<div class="container">
    <?php   $page = array("title" => "Formulário de veículos", "home" => "Dashboard", "homelink" => "/dashboard");
            require_once(APPPATH."views/template/breadcrumb.php") ?>

	<div class="row">
       
		<form id="frmVeiculosSelecionados" action="/empresa/veiculos/gravar" method="POST" class="form-horizontal">

            <div class="form-group">
                <div class="col-md-offset-1">
                    <p><strong>Lista de veiculos já pré-cadastrados:</strong></p>
                    <small>Selecione os veiculos que deseja cadastrar</small><br>

            <?php   
                    $count = 0;
                    foreach($veiculos as $veiculo){ 
            ?>
                        <label class="checkbox-inline check-carros">
                            <input type="checkbox" id="veiculo<?=$veiculo["id"]?>" name="veiculos" value="<?=$veiculo["id"]?>"> <?=$veiculo["modelo"]?>
                        </label>
            <?php       $count++;
                        if($count % 2 == 0) echo "<br>";
                    }   ?>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-offset-1">
                    <input type="hidden" name="veiculosSelecionados" id="veiculosSelecionados" value="">
                    <button type="submit" id="btnCadastraSelecionados" class="btn btn-success">Cadastrar <span id="qtdSelecionados" class="badge badge-primary"></span></button>
                </div>
            </div>
        </form>

            <hr>
        
        <form action="/empresa/veiculos/gravar" method="POST" class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-2 control-label" for="tipo_veiculo">Tipo <span class="text-red">*</span></label>
                <div class="col-sm-8">
                    <select name="tipo_veiculo" id="tipo_veiculo" class="form-control">
                    <?php foreach ($tipo_veiculo as $item) : ?>
                        <option value="<?=$item['id']?>"><?=$item['descricao']?></option>
                    <?php endforeach ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="modelo" class="col-sm-2 control-label">Modelo <span class="text-red">*</span></label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Ex. Celta 1.0 ou CG 150 Titan" required="required" maxlength="200">
                </div>

                <label for="ano" class="col-sm-1 control-label">Ano <span class="text-red">*</span></label>
                <div class="col-sm-3">
                <input type="text" class="form-control" id="ano" name="ano" placeholder="Ano de fabricação" required="required" maxlength="200">
                </div>
            </div>

		    <div class="form-group">
		        <div class="col-sm-offset-2 col-sm-10">
		            <button type="submit" class="btn btn-primary">Cadastrar</button>
		        </div>
		    </div>

		</form>
	</div>
</div>