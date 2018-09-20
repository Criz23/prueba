<ul class="app-menu">
  <!--<li><a class="app-menu__item" href="index.html"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>-->
  <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Materias</span><i class="treeview-indicator fa fa-angle-right"></i></a>
    <ul class="treeview-menu">
      <li><a class="treeview-item" href="{{ route('materia.index') }}"><i class="icon fa fa-circle-o"></i> Listado de Mateias</a></li>
      <li><a class="treeview-item" href="{{ route('materia.create') }}"><i class="icon fa fa-circle-o"></i> Nueva Materia</a></li>
    </ul>
  </li>
</ul>