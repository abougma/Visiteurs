<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ route('dashboard') }}"><i class="menu-icon fa fa-laptop"></i> Accueil </a>
                </li>
                <li class="menu-title">AGENCE REGIONALE & GUICHET </li><!-- /.menu-title -->

                <li class="menu-title">Gestion Visiteur </li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="menu-icon fa fa-sitemap"></i>Visiteurs</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('visiteur.ajouter') }}">Ajouter</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="{{ route('visiteur.liste') }}">Liste</a></li>
                    </ul>
                </li>
                <li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa  fa-unlock-alt"></i>Deblocage</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('deblocage.ajouter') }}">Ajouter</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="{{ route('deblocage.liste') }}">Liste</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-briefcase"></i>Societé</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('societe.ajouter') }}">Ajouter</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="{{ route('societe.liste') }}">Liste</a></li>
                        </ul>
                    </li>
                </li>
                    <li>
                    <a href="widgets.html"> <i class="menu-icon ti-email"></i>Roles & Permissions </a>
                    </li>


            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
