
<link rel="stylesheet" href="<?=base_url(); ?>/assets/plugins/fullcalendar/fullcalendar.min.css" rel='stylesheet' >
<link rel="stylesheet" href="<?=base_url(); ?>/assets/plugins/fullcalendar/fullcalendar.print.min.css" rel='stylesheet' media='print' >
<script src="<?=base_url(); ?>/assets/js/moment.min.js"></script>
<script src="<?=base_url(); ?>/assets/plugins/fullcalendar/fullcalendar.min.js"></script>
<script src='/assets/plugins/fullcalendar/locale/pt-br.js'></script>


    <section id="user-content" class="lightbg">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Bem vindo <?=$usuarioLogado["nome"]?></h4>
                    
                </div> 
            </div>
           <!--  <hr>
            <div class="row">
               <div class="col-md-12">
                    <a href="/empresa/alunos" class="btn btn-primary btn-lg">Alunos</a>
                    <a href="/empresa/servicos" class="btn btn-primary btn-lg">Serviços</a>
                    <a href="#" class="btn btn-primary btn-lg">Financeiro</a>
                    <a href="#" class="btn btn-primary btn-lg">Status</a>
                    <a href="#" class="btn btn-primary btn-lg">Avaliações</a>
                </div
            </div>
            <hr>-->
            <div class="row">
                <div class="col-md-6">
                    <div style="margin-bottom: 15px;">
                        <span><strong>Instrutores</strong></span> <a href="/empresa/instrutor/formulario" class="btn btn-primary btn-sm">Cadastrar</a>
                    </div>

                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>Nome</th>
                            <th>Data</th>
                        </tr>

                    <?php   if($instrutores){
                                foreach ($instrutores as $instrutor) { ?>
                                <tr>
                                    <td><?=$instrutor["nome"]?></td>
                                    <td><?=dateFormat("d/m/Y - h:i:s", $instrutor["data"])?></td>
                                </tr>
                    <?php       }
                            } else { ?>
                                <tr>
                                    <td colspan="2" class="text-center">Sem registros</td>
                                </tr>
                    <?php   }   ?>
                    </table>

                    <a href="/empresa/instrutor" class="btn btn-primary btn-block">Ver todos</a>
                </div>

                <div class="col-md-6">
                    <div style="margin-bottom: 15px;">    
                        <span><strong>Veiculos</span></strong> <a href="/empresa/veiculos/formulario" class="btn btn-primary btn-sm">Cadastrar</a>
                    </div>

                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>Modelo</th>
                            <th>Ano</th>
                        </tr>
                        <?php   if($veiculos){
                                foreach ($veiculos as $veiculo) { ?>
                                <tr>
                                    <td><?=$veiculo["modelo"]?></td>
                                    <td><?=$veiculo["ano"]?></td>
                                </tr>
                    <?php       }
                            } else { ?>
                                <tr>
                                    <td colspan="2" class="text-center">Sem registros</td>
                                </tr>
                    <?php   }   ?>                                            
                    </table>

                    <a href="/empresa/veiculos" class="btn btn-primary btn-block">Ver todos</a>
                </div>

            </div>

            <hr>

            <div class="row">
                <div class="col-md-12">
                    <div style="margin-bottom: 15px;">
                        <h4>Agenda</h4> 
                        <a href="/empresa/agenda/index" class="btn btn-primary btn-sm">Configurar</a>
                    </div>

                    <div id="calendar"></div>
                </div>
            </div>

        </div>

    </section>

    <script>
    $(document).ready(function() {

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
            // events: [
            //     {
            //     title: 'All Day Event',
            //     start: '2019-01-01'
            //     },
            //     {
            //     title: 'Long Event',
            //     start: '2019-01-07',
            //     end: '2019-01-10'
            //     },
            //     {
            //     id: 999,
            //     title: 'Repeating Event',
            //     start: '2019-01-09T16:00:00'
            //     },
            //     {
            //     id: 999,
            //     title: 'Repeating Event',
            //     start: '2019-01-16T16:00:00'
            //     },
            //     {
            //     title: 'Conference',
            //     start: '2019-01-11',
            //     end: '2019-01-13'
            //     },
            //     {
            //     title: 'Meeting',
            //     start: '2019-01-12T10:30:00',
            //     end: '2019-01-12T12:30:00'
            //     },
            //     {
            //     title: 'Lunch',
            //     start: '2019-01-12T12:00:00'
            //     },
            //     {
            //     title: 'Meeting',
            //     start: '2019-01-12T14:30:00'
            //     },
            //     {
            //     title: 'Happy Hour',
            //     start: '2019-01-12T17:30:00'
            //     },
            //     {
            //     title: 'Dinner',
            //     start: '2019-01-12T20:00:00'
            //     },
            //     {
            //     title: 'Birthday Party',
            //     start: '2019-01-13T07:00:00'
            //     },
            //     {
            //     title: 'Click for Google',
            //     url: 'http://google.com/',
            //     start: '2019-01-28'
            //     }
            // ]
            });
        });
    </script>