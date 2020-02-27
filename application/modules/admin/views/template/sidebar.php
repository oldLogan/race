<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url("/assets/images/sem-foto.jpg")?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$usuarioLogado["nome"]?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Pesquisar...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU DE NAVEGAÇÃO</li>
        <li class="active">
          <a href="/admin">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-building"></i> <span>Empresas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="/admin/empresas/listar"><i class="fa fa-circle-o"></i> Listar</a></li>
            <li class="active"><a href="/admin/veiculos/listar"><i class="fa fa-circle-o"></i> Veículos</a></li>
            <li class="active"><a href="/admin/instrutores/listar"><i class="fa fa-circle-o"></i> Instrutores</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Clientes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="/admin/clientes/listar"><i class="fa fa-circle-o"></i> Listar</a></li>
			 <li class="active"><a href="/admin/clientes/relatorio"><i class="fa fa-circle-o"></i> Relatório</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-tasks"></i> <span>Produtos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="/admin/produtos/listar"><i class="fa fa-circle-o"></i> Listar</a></li>
            <li class="active"><a href="/admin/produtos/servicos"><i class="fa fa-circle-o"></i> Servicos</a></li>
          </ul>
        </li>
        <li class="">
          <a href="/admin/localidade/listar">
            <i class="fa fa-tasks"></i> <span>Localidades</span>
          </a>
        </li>
        <li class="">
          <a href="/admin/contato/listar">
            <i class="fa fa-envelope"></i> <span>Contato</span>
          </a>
        </li>                                
        <!-- <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Empresas</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>