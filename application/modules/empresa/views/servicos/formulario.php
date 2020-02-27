<style>
    .check-produtos{
        width: 30%;
        padding: 5px 10px;
        border: 1px solid #ddd;
        margin-top: 10px !important;
    }
    .check-produtos:hover {
        background: #82ca9c;
        color: white;
        border: 1px solid #82ca9c;
    }
    #tblProdutoServico td{
        vertical-align: middle;
        /* text-align: center; */
    }
    #tblProdutoServico td input[type=Text] {
        width: 70px;
        display: inline-block;
        height: 25px;
        margin: 0px 5px;
        border-radius: 4px;
    }
    #tblProdutoServico td label{
        font-size: 13px;
        font-weight: 500;
    }
    .text-left{
        text-align: left !important;
    }
    #tblProdutoServico .aula_extra{
        width: 120px !important;
        text-align: right;
    } 
</style>

<div class="container">
    <?php   $page = array("title" => "Formulário de serviços", "home" => "Dashboard", "homelink" => "/dashboard");
            require_once(APPPATH."views/template/breadcrumb.php") ?>

	<div class="row">
		<form id="frmProdutosSelecionados" action="/empresa/servicos/gravar" method="POST" class="form-horizontal">

            <div class="form-group">
                <label class="col-sm-2 control-label" for="produto">Produtos disponíveis</label>
                <div class="col-sm-9">
                    <select name="produto" id="produto" class="form-control" required>
                        <option value="0" selected disabled hidden>Selecione um produto</option>
                    <?php   foreach($produtos as $produto){   ?>
                        <option value="<?=$produto["id"]?>"><?=$produto["titulo"]?></option>
                    <?php   }   ?>
                    </select>
                </div>
            </div>
			
				<!--	<div class="col-sm-offset-4">
                            <label class="control-label">Forma de pagamento</label>
                            <select name="produto" id="slcProduto" class="form-control input-lg">
                                <!-- <option value="0">Todos os produtos</option> 
                            <//?php  //foreach($produtos["autoEscolas"] as $produto){ ?>
                                <option value="<?//=$produto['id']?>"><?//=$produto['titulo']?></option>
                            <//?php  // }   ?>
                            </select> 
                        </div> -->

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-9">
                    <table class="table table-striped" id="tblProdutoServico">
                        <tr></tr>
                    </table>
                </div>
            </div>
			

            <div class="form-group">
                <label for="valor" class="col-sm-2 control-label">Valor em R$ <span class="text-red">*</span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control money" id="valorTotal" name="valorTotal" value="" placeholder="Ex.: 1.250,00" required="required" maxlength="200">
                </div>
            </div>             
			
			<hr>
            <div class="form-group">
                <div class="col-md-offset-1">
                    <input type="hidden" name="produtosSelecionados" id="produtosSelecionados" value="">
                    <button type="button" id="btnCadastraSelecionados" class="btn btn-success">Cadastrar</button>
                </div>
            </div>
        </form>

        <hr>

	</div>
    <input type="hidden" id="empresa_tipo" value="<?=$usuariologado["id_empresa_tipo"]?>">
</div>

<script>
    $(function(){

        var html = "";
        var array_empresa_produto_servico = [];
        var empresa_tipo = $("#empresa_tipo").val();

        $("#produto").change(function(){
            buscaServicoPorEmpresaTipoEproduto($(this).val(), empresa_tipo);
        });

        function buscaServicoPorEmpresaTipoEproduto(id_produto, empresa_tipo){
            get("/ws/buscaServicoPorEmpresaTipoEproduto/"+id_produto+"/"+empresa_tipo, function(retorno){
                html = "";
                $("#tblProdutoServico").html('');
                array_empresa_produto_servico = [];
                
                for (var i = 0; i < retorno.length; i++) {
                    var empresa_produto = retorno[i];
                    var empresa_produto_servico = {
                        'id_produto': id_produto,
                        'id_servico': empresa_produto.id_servico, 
                        'titulo': empresa_produto.titulo, 
                        'descricao': empresa_produto.descricao, 
                        'valor': 0, 
                        'ordem': empresa_produto.ordem, 
                        'tem_aula': parseInt(empresa_produto.tem_aula), 
                        'qtd_aula': 0, 
                        'tempo_aula': 0, 
                        'valor_aula_extra': 0
                    }
                    array_empresa_produto_servico.push(empresa_produto_servico);
                    
										
                    html += '<tr>';
                    html += '<td width="25%">'+empresa_produto_servico.titulo+'</td>';
					html += '<td><div><label>Valor </label><input type="text" id="valor'+i+'" name="valor" maxlength="200" class="form-control" value="" onBlur="javascript: calcular();" required></div></td>';
                    if(empresa_produto_servico.tem_aula){
						//html += '<td><div><label>Valor </label><input type="text" id="valor'+i+'" name="valor" maxlength="200" class="form-control" value="" onBlur="javascript: calcular();" required></div></td>';
                        html += '<td><div class="temAula'+i+'"><label>Qtd. Aulas</label><input type="text" id="qtd_aula'+i+'" class="form-control" value="" required></div></td>';
                        html += '<td><div class="temAula'+i+'"><label>Tempo de Aula (Minutos)</label><input type="text" id="tempo_aula'+i+'" class="form-control" value="" required></div></td>';
                        html += '<td><div class="temAula'+i+'"><label>Valor Aula extra</label><input type="text" id="valor_aula_extra'+i+'" name="valor" maxlength="200" class="form-control money aula_extra" value="" required></div></td>';
                    }else{
                        html += '<td colspan="3"></td>';
						//html += '<td><div class="temAula'+i+'"><label>Valor </label><input type="text" id="valor'+i+'" name="valor" maxlength="200" class="form-control" value="" onBlur="javascript: calcular();" required></div></td>';
                    }
                    html += '</tr>';
                }
                $("#tblProdutoServico").append(html);
            });
        }
		
			
		
        $("#btnCadastraSelecionados").on("click", function(){
            var form = $('#frmProdutosSelecionados')[0]; 
            if(!form.checkValidity()){
                form.reportValidity();
                return false;
            }

            for (var i = 0; i < array_empresa_produto_servico.length; i++) {
                var element = array_empresa_produto_servico[i];
				//var valor = element.valor;
				var _valor = $("#valor"+i).val(); 
				element.valor = parseInt(_valor);
								
                if(element.tem_aula){
                   // var _valor = $("#valor"+i).val();
					var _qtd_aula = $("#qtd_aula"+i).val();
                    var _tempo_aula = $("#tempo_aula"+i).val();
                    var _valor_aula_extra = $("#valor_aula_extra"+i).val();
										
                    if(isEmpty(_qtd_aula) || isEmpty(_tempo_aula) || isEmpty(_valor_aula_extra)){
                        alert("Preencha todos os campos corretamente");
                        return false;
                    }
					
					//element.valor = parseInt(_valor);
					element.qtd_aula = parseInt(_qtd_aula);
                    element.tempo_aula = parseInt(_tempo_aula);
                    element.valor_aula_extra = parseInt(_valor_aula_extra);
					
                }//else { 
						
				//		var _valor = $("#valor"+i).val(); 
				//		element.valor = parseInt(_valor); 
						
				//}
				
					
				
			}
			 
            enviaDados();    

		
        });
        
		
        var enviaDados = function(){
            //event.preventDefault(); >>>> Esse trecho gera erro no Firefox impedindo o cadastro de serviços. <<<<
            var newForm = $('<form>', {
                'action': '/empresa/servicos/gravar',
                'target': '_top', 'method': 'POST'
            });
            newForm.append($('<input>', {'name': 'id_produto', 'value': $("#produto").val(), 'type': 'hidden'}));
            newForm.append($('<input>', {'name': 'valor', 'value': $("#valorTotal").val(), 'type': 'hidden'}));
            newForm.append($('<input>', {'name': 'dados', 'value': JSON.stringify(array_empresa_produto_servico), 'type': 'hidden'}));  //alert(JSON.stringify(array_empresa_produto_servico));
            $(document.body).append(newForm);
            newForm.submit();
        };       

        var isEmpty = function(num){
            if(num == "" || num == 0)
                return true;
            else
                return false;
        };
		
		

    });
	
	function calcular(){
					
					var total = 0;
					var objetoNome = $("input[name=valor]");
					 for (var i = 0; i < objetoNome.length; i++) {
						var valAux = $("#valor"+i).val();
						if(valAux == ""){
						valAux = 0;
						}
						total = parseInt(total) + parseInt(valAux);
					 }
					
					$("#valorTotal").val(total);
			}
</script>
