<aside id="left-panel" class="left-panel">
    <a class="navbar-brand" href="./"><img src="../../lib/img/logo.svg" alt="Logo"></a>
    <a class="" href="./"><img src="images/logo2.png" alt="Logo" style="display: none;"></a>
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>

            </button>
        </div>


        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ route('dashboard') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <h3 class="menu-title">Functionality</h3><!-- /.menu-title -->
                <li class="menu-item">
                    <a href="/items"> <i class="menu-icon fa fa-laptop"></i>Items</a>

                </li>
                <li class="menu-item ">
                    <a href="{{ route('clientdetails') }}"> <i class="menu-icon fa fa-users"></i>Clients</a>

                </li>
                <li class="menu-item">
                    <a href="{{ route('log')}}"> <i class="menu-icon fa fa-th"></i>Log</a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('display')}}"> <i class="menu-icon fa fa-refresh"></i>Archieve</a>
                </li>
                <li class="menu-item">
                <a href="{{ route('displaybids')}}"> <i class="menu-icon fa fa-gavel"></i>Bids</a>
                </li>



            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>