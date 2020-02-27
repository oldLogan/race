$(function(){
    var id_estados = 0, id_empresa_servico = 0, id_produto = 0;
    var btnFiltrar = $("#btnFiltrar");
    var divResultado = $(".divResultado");
    var TIPO_EMPRESA = Object.freeze({"AUTOESCOLAS" : 'autoescolas', "CLINICAS":'clinicas'});
    var semRegistrosHtml = '<p class="text-center sem-registros"><i class="fa fa-fw fa-search fa-3x orange-text"></i><br> Nenhum registro encontrado.</p>'
    
    var listEmpresas = [];
    var dados = [];
    var id_empresa = [];
    id_empresa["1"] = {id_empresa: 0};
    id_empresa["2"] = {id: 0};
    var cliente_servico_detalhe = [];
    var cliente_produto = [];
    var listCidades = listasFiltros.cidades;
    var listBairros = listasFiltros.bairros; 

    var hdnProdutos = $("[name='hdnProdutos']").val();
    if(hdnProdutos){
        var id_produto = hdnProdutos;
        var id_estado = $("[name='hdnEstados']").val();
        var id_cidade = $("[name='hdnCidades']").val();
        var id_bairro = $("[name='hdnBairros']").val();

        $("#slcProduto").val(id_produto);
        $("#slcEstados").val(id_estado);
        
        buscaCidadePorEstado(id_estado);
        $("#slcCidade").val(id_cidade);

        buscaBairroPorCidade(id_cidade);
        $("#slcBairro").val(id_bairro);

        $(".servico-titulo").html($("#slcProduto option:selected").text());
        get("/ws/buscaEmpresaProdutoPorProduto/"+id_produto, function(retorno){
            dados = retorno;
            cliente_produto.push(
                {
                    id_empresa_tipo: 1,
                    id_empresa_produto: 0,
                    id_produto: id_produto,
                    valor: 0
                },
                {
                    id_empresa_tipo: 2,
                    id_empresa_produto: 0,
                    id_produto: id_produto,
                    valor: 0
                },
                {
                    id_empresa_tipo: 3,
                    id_empresa_produto: 0,
                    id_produto: id_produto,
                    valor: 0
                },
                {
                    id_empresa_tipo: 4,
                    id_empresa_produto: 0,
                    id_produto: id_produto,
                    valor: 0
                }
            );
            montaServicosProdutoPorArray();
        });
    }else{
        id_estados = $("#slcEstados").val();
        buscaCidadePorEstado(id_estados, true);
    }

    $('a[title]').tooltip();

    $('#btn-next').click(function(){
        enviaDados();
    });

    $("[name='estado']").change(function(){
        id_estado = $(this).val();
        $("[name='estado']").val(id_estado);
        buscaCidadePorEstado(id_estado, true);
    });

    $("[name='cidade']").change(function(){
        var id_cidade = $(this).val();
        $("[name='cidade']").val(id_cidade);
        buscaBairroPorCidade(id_cidade);
    });

    btnFiltrar.click(function(){
        id_produto = $("#slcProduto").val();
        $(".servico-titulo").html($("#slcProduto option:selected").text());
        get("/ws/buscaEmpresaProdutoPorProduto/"+id_produto, function(retorno){
            dados = retorno;
            cliente_produto.push(
                {
                    id_tipo_empresa: 1,
                    id_empresa_produto: 0,
                    id_produto: 0,
                    valor: 0
                },
                {
                    id_tipo_empresa: 2,
                    id_empresa_produto: 0,
                    id_produto: 0,
                    valor: 0
                }
            );
            montaServicosProdutoPorArray();
        });

        // buscar(TIPO_EMPRESA.AUTOESCOLAS, id_produto, id_estado, id_cidade, id_bairro);
    });
    
    function buscaCidadePorEstado(id, all = false){
        var id_cidade = 0;
        var listSelects = $("[name='cidade']");
        var lista = listCidades.filter(x => x.id_estado == id);
        $.each(listSelects, function(i, select){
            $(select).html('');
            if(lista.length == 0){
                $(select).append('<option value="0">Sem registros</option>');
            }else{
                $.each(lista,function(i, cidade){
                    var item = '<option value="'+cidade.id+'">'+cidade.descricao+'</option>';
                    $(select).append(item);
                });
                id_cidade = $(select).val();
            }
        });
        if(all) buscaBairroPorCidade(id_cidade);
    }
    
    function buscaBairroPorCidade(id){
        var listSelects = $("[name='bairro']");
        var lista = listBairros.filter(x => x.id_cidade == id);
        $.each(listSelects, function(i, select){
            $(select).html('');
            if(lista.length == 0){
                $(select).append('<option value="0">Sem registros</option>');
            }else{
                $.each(lista,function(i, bairro){
                    var item = '<option value="'+bairro.id+'">'+bairro.descricao+'</option>';
                    $(select).append(item);
                });
            }
        });     
    }
    
    function buscar(tipoBusca, id_servico, id_estado, id_cidade, id_bairro){
        var dados = {
            'id_servico': id_servico,
            'id_estado': id_estado, 
            'id_cidade': id_cidade, 
            'id_bairro': id_bairro,
        };  
         //console.log("tipo_busca:" + tipoBusca + "\n servico:" + id_servico + "\n estado:" + id_estado + "\n cidade:" + id_cidade + "\n bairro:" + id_bairro);

        if(TIPO_EMPRESA.AUTOESCOLAS == tipoBusca.toLowerCase())
            buscarAutoEscola(dados);
        if(TIPO_EMPRESA.CLINICAS == tipoBusca.toLowerCase())
            buscarClinicas(dados);
    }

    function buscarAutoEscola(dados){
        post("/ws/buscaAutoEscolaPorFiltro", dados, function(retorno){  //buscaServicoPorEmpresaTipoEproduto
            listEmpresas = retorno;
            montaEmpresas(); 
        });
    }

    function buscarClinicas(dados){
        post("/ws/buscaClinicasPorFiltro", dados, function(retorno) {
            listEmpresas = retorno;
            montaEmpresas();
        });      
    }

    function montaEmpresas(){
        var html = "";
        divResultado.html('');

		

        if(listEmpresas.length == 0){
            divResultado.append(semRegistrosHtml);
        }else{
            $.each(listEmpresas,function(i, empresa){
				
				if(empresa.id_estado == $("#slcEstados").val() && empresa.id_cidade == $("#slcCidade").val() && empresa.id_bairro == $("#slcBairro").val()){ 
				
                html +=
                    '<div class="empresa-item" data-id_empresa_produto="'+empresa.id_empresa_produto+'" data-name="'+ empresa.nomefantasia +'">' +
                    '    <div class="empresa-foto"><img class="img-rounded" height="150" width="150" src="imagens/'+empresa.nomefantasia+'.jpg"></div>' +
                    '    <div class="empresa-detalhes">' +
                    '        <p class="empresa-title">'+empresa.nomefantasia+ 
                    '           <span class="empresa-estrelas"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>' +
                    '           <span class="empresa-avaliacao">9.5</span>' + //'<p class="empresa-Produto">'+empresa.titulo+'</p>' +
                    '        </p>' +  '<p class="empresa-valor">R$ '+empresa.valor+'</p>' + '<a class="btn btn-primary" href="informacoes/?id='+empresa.id+'&idpr='+id_produto+'" target="_blank">Mais Informações</a>' +
                    '        <p class="empresa-produtos">';
				
				
					/*for (var i = 0; i < empresa.servicos.length; i++) { 
						
							html += '   <span class="badge">'+empresa.servicos[i].titulo+'</span>';
							
							//Resolver a repetição de serviços
					}*/
				
				
				
                html +=     ' </p>' +
                    '        <p class="empresa-informacao">'+empresa.descricao+'</p>'  +
                    '		</div>' +
                    '</div>';
					
				}
					

			});

		

		
            divResultado.append(html); 					

            $(".empresa-item").click(function(){
                var id_empresa_produto = $(this).attr("data-id_empresa_produto");
                var empresa = listEmpresas.filter(function(a){ return a.id_empresa_produto == id_empresa_produto})[0]; 
                var item = cliente_produto.filter(function(a) {return a.id_empresa_tipo == empresa.id_empresa_tipo})[0]; 

                if($(this).hasClass('active')){
                    $(".empresa-item.active").removeClass('active');
                    item.id_empresa_produto = 0;
                }else{
                    $(".empresa-item.active").removeClass('active');
                    $(this).addClass('active');
                    item.id_empresa_produto = id_empresa_produto;
					item.valor = empresa.valor;
					html+= '    <input type="hidden" id="id_empresa" value="JSON.stringify(item.id_empresa_produto)" >';
					 // item.valor = listEmpresas.filter(function(a){ return a.id_empresa_servico == id_empresa_servico})[0].valor;
                }

                // montaServicosProdutoPorArray(cliente_servico_detalhe);
                montaServicosProdutoPorArray(); 
            });
			
			
        }
	
	}

    function montaServicosProdutoPorArray(){
        var html = "";
        var style = 'width: 50%';
        var isNext = true;

        html+=  '<li class="passos-item" style="'+style+'">' +
                '<div>';
        if(cliente_produto[0].id_empresa_produto != 0){
            html+= '    <span class="badge badge-primary">Selecionado: '+cliente_produto[0].id_empresa_produto+'</span>';
            html+= '    <span class="passos-check green-text"><i class="fa fa-2x fa-check"></i></span>';
			
        }
        html+=  '</div>' +
            '    <div class="action">' +
            '       <button data-id-empresa_tipo="1" class="btn btn-primary">Buscar Auto Escola</button>';
        // if(item.valor != undefined)
        //     html+= '        <div class="col-sm-6"><span class="valor">R$ '+item.valor+'</span></div><div class="clearfix"></div>';
        html+= '    </div> </div> </li>';

        html+=  '<li class="passos-item" style="'+style+'">' +  //Para desativar Busca por Clínicas
                '<div>';
        if(cliente_produto[1].id_empresa_produto != 0){
            html+= '    <span class="badge badge-primary">Selecionado: '+cliente_produto[1].id_empresa_produto+'</span>';
            html+= '    <span class="passos-check green-text"><i class="fa fa-2x fa-check"></i></span>';
			
        }
        html+= '    </div>' +
            '    <div class="action">' +
            '       <button data-id-empresa_tipo="2" class="btn btn-primary">Buscar Clínica</button>'; //Until here
        // if(item.valor != undefined)
        //     html+= '        <div class="col-sm-6"><span class="valor">R$ '+item.valor+'</span></div><div class="clearfix"></div>';
        html+= '    </div> </div> </li>';        

        if(cliente_produto[0].id_empresa_produto == 0 && cliente_produto[1].id_empresa_produto == 0) //Apenas auto escolas!!!
            isNext = false;

        // $.each(array, function(i, item){
        //     html+= '<li class="passos-item" style="'+style+'">';
        //     html+= '<div class="content">';
        //     html+= '    <div class="info"><p>'+item.titulo+'</p>';
        //     if(item.id_empresa_servico != 0){
        //         html+= '    <span class="badge badge-primary">Selecionado: '+item.id_empresa_servico+'</span>';
        //         html+= '    <span class="passos-check green-text"><i class="fa fa-2x fa-check"></i></span>';
        //     }
        //     html+= '    </div>';
        //     html+= '    <div class="action">';
        //     html+= '        <div class="col-sm-6"><button data-id-servico="'+item.id_servico+'" class="btn btn-primary">Buscar</button></div>';
        //     if(item.valor != undefined)
        //         html+= '        <div class="col-sm-6"><span class="valor">R$ '+item.valor+'</span></div><div class="clearfix"></div>';
        //     html+= '    </div>';
        //     html+= '</div>';
        //     html+= '</li>';
        //     if(item.id_empresa_servico == 0)
        //         isNext = false;
        // });
        $(".produto-passos .passos").html(html);

        if(isNext){
            $(".div-next").show();
        }else{
            $(".div-next").hide();
        }
        
        $(".passos-item button").click(function(){
            var id_empresa_tipo = $(this).attr("data-id-empresa_tipo");
            var id_estado = $("#slcEstados").val(); 
            var id_cidade = $("#slcCidade").val(); 
            var id_bairro = $("#slcBairro").val(); 
            listEmpresas = dados.filter(function(x){ return x.id_empresa_tipo == id_empresa_tipo}); 

            // var divContent = $(this).parent("div.content");

            // if(divContent.hasClass('active')){
            //     divContent.removeClass('active');
            //     item.id_empresa_servico = 0;
            // }else{
            //     $(".passos-item div.content.active").removeClass('active');
            //     divContent.addClass('active');
            //     item.id_empresa_servico = id_empresa_servico;
            // }      
            
            montaEmpresas();
        });
    }

    function montaServicosProdutoPorArray2(array){
        var html = "";
        var style = 'width: '+String((100/array.length))+'%';
        var isNext = true;

        $.each(array, function(i, item){
            html+= '<li class="passos-item" style="'+style+'">';
            html+= '<div class="content">';
            html+= '    <div class="info"><p>'+item.titulo+'</p>';
            if(item.id_empresa_servico != 0){
                html+= '    <span class="badge badge-primary">Selecionado: '+item.id_empresa_servico+'</span>';
                html+= '    <span class="passos-check green-text"><i class="fa fa-2x fa-check"></i></span>';
				
            }
            html+= '    </div>';
            html+= '    <div class="action">';
            html+= '        <div class="col-sm-6"><button data-id-servico="'+item.id_servico+'" class="btn btn-primary">Buscar</button></div>';
            if(item.valor != undefined)
                html+= '        <div class="col-sm-6"><span class="valor">R$ '+item.valor+'</span></div><div class="clearfix"></div>';
            html+= '    </div>';
            html+= '</div>';
            html+= '</li>';
            if(item.id_empresa_servico == 0)
                isNext = false;
        });
        $(".produto-passos .passos").html(html);

        if(isNext && array.length > 0){
            $(".div-next").show();
        }else{
            $(".div-next").hide();
        }
        
        $(".passos-item button").click(function(){
            var id_servico = $(this).attr("data-id-servico");
            var id_estado = $("#slcEstados").val(); 
            var id_cidade = $("#slcCidade").val();
            var id_bairro = $("#slcBairro").val();
            var item = array.filter(function(x){ return x.id_servico == id_servico});

            var divContent = $(this).parent("div.content");

            if(divContent.hasClass('active')){
                divContent.removeClass('active');
                item.id_empresa_servico = 0;
            }else{
                $(".passos-item div.content.active").removeClass('active');
                divContent.addClass('active');
                item.id_empresa_servico = id_empresa_servico;
            }            

            var tipo = item.id_empresa_tipo == 1 ? TIPO_EMPRESA.AUTOESCOLAS : TIPO_EMPRESA.CLINICAS;
            buscar(tipo, id_servico, id_estado, id_cidade, id_bairro); 
        });
    }    
    
    var enviaDados = function(){
        //event.preventDefault();
        var newForm = $('<form>', {
            'action': '/cadastro/cliente/formulario',
            'target': '_top', 'method': 'POST'
        });
        newForm.append($('<input>', {'name': 'dados', 'value': JSON.stringify(cliente_produto), 'type': 'hidden'}));  
        $(document.body).append(newForm);
        newForm.submit();
		};
	
	        
});