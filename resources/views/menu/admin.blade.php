<li class="treeview">
    <a href="#">
        <i class="fa fa-bar-chart"></i> <span>Produtos</span>
        <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
    </a>
    <ul class="treeview-menu">
        <li><a href="{{ route('products.index') }}"><i class="fa fa-circle-o"></i> Listar</a></li>
        <li><a href="{{ route('products.create') }}"><i class="fa fa-circle-o"></i> Cadastrar</a></li>
    </ul>
</li>