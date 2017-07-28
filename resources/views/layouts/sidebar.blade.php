<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../../bootstrap/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info box-title">
                <p>{{ Auth::user()->name }}</p>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">NAVEGAÇÃO PRINCIPAL</li>
            @include('menu.'.Auth::user()->type)
        </ul>
    </section>
</aside>