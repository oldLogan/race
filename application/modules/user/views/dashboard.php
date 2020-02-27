<link rel="stylesheet" href="<?=base_url(); ?>/assets/plugins/fullcalendar/fullcalendar.min.css" rel='stylesheet' >
<link rel="stylesheet" href="<?=base_url(); ?>/assets/plugins/fullcalendar/fullcalendar.print.min.css" rel='stylesheet' media='print' >
<script src="<?=base_url(); ?>/assets/js/moment.min.js"></script>
<script src="<?=base_url(); ?>/assets/plugins/fullcalendar/fullcalendar.min.js"></script>
<script src='<?=base_url(); ?>/assets/plugins/fullcalendar/locale/pt-br.js'></script>

    <section id="user-content" class="lightbg">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Bem vindo <?=$usuarioLogado["nome"]?></h4>
                    
                </div> 
            </div>
          

            <div class="row">
                <div class="col-sm-12">
                <?php if(!empty($cliente_produto)){ ?>
                    <table class="table table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th>Produto</th>
                               <!-- <th>Status</th> -->
                            </tr>
                        </thead>    
                        <tbody>
                        <?php foreach ($cliente_produto as $item) { ?>
                            <tr>
                                <td><?=$item["titulo"]?></td>
                             <!--   <td><?//=$item["finalizado"]?></td> -->
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <a href="/user/servicos" class="btn btn-info">
                            Ver todos os serviços
                        </a>
						<!--<a href="/user/pagamento?id=<?=$id_cliente?>" class="btn btn-info">
                            Efetuar Pagamento
                        </a>-->
                    </div>
                </div>
                <?php }else{ ?>
                        <div class="col-md-12">
                            <div class="text-center" style="margin: 40px 0px;">
                                <h2>Ainda não possui um serviço contratado?</h2>
                                <a href="/busca" class="btn btn-success btn-lg">Veja as opções</a>
                            </div>
                        </div>
                <?php } ?>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-12">
                    <div style="margin-bottom: 15px;">
                        <h4>Agenda</h4> 
                        <!-- <a href="/user/instrutor/formulario" class="btn btn-default btn-xs">Cadastrar</a> -->
                    </div>
                
                    <div id="calendar"></div>
                </div>
            </div>            
        </div>

        <input type="hidden" name="id_cliente" id="id_cliente" value="<?=$id_cliente?>">

    </section>


    <script>
    $(document).ready(function() {
        var eventos = [];
        var id_cliente = $("#id_cliente").val();
        get("/ws/buscaEventosPorCliente/"+id_cliente, function(retorno){
            for (var i = 0; i < retorno.length; i++) {
                var element = retorno[i];
                console.log(element);
                var event = {
                    title: element.title,
                    start: moment(element.data + ' ' + element.start, 'DD/MM/YYYY H:mm').format(),
                    end: moment(element.data + ' ' + element.start, 'DD/MM/YYYY H:mm').add(1, 'hours').format()
                }
                eventos.push(event);
            }

            console.log(eventos);

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,listWeek'
                },
                defaultDate: '2019-01-12',
                weekends: true,
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                selectable: true,
                selectHelper: true,
                businessHours: {
                    dow: [ 1, 2, 3, 4, 5],
                    start: '08:00', // a start time (10am in this example)
                    end: '18:00', // an end time (6pm in this example)
                },            
                // select: function(start, end) {
                //     var title = prompt('Event Title:');
                //     var eventData;
                //     if (title) {
                //     eventData = {
                //         title: title,
                //         start: start,
                //         end: end
                //     };
                //     $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
                //     }
                //     $('#calendar').fullCalendar('unselect');
                // },            
                events: eventos
            });
        })

        });
    </script>    