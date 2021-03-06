 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
     <!-- Brand and toggle get grouped for better mobile display -->
     <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="{{ route('user') }}">Counter HP Online</a>
     </div>

     <!-- Collect the nav links, forms, and other content for toggling -->
     <div class="collapse navbar-collapse navbar-ex1-collapse">
         <ul class="nav navbar-nav side-nav">
             <li><a><i class="fa fa-dashboard"></i> Dashboard</a></li>
             <li><a href="{{ route('laporan') }}"><i class="fa fa-check-square"></i> Laporan</a></li>
             <li><a href="{{ url('/bio/1') }}"><i class="fa fa-cogs"></i> Pengaturan</a></li>

         </ul>
         <ul class="nav navbar-nav navbar-right navbar-user">
             <li class="dropdown user-dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                     Ilham <b class="caret"></b></a>
                 <ul class="dropdown-menu">
                     <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                     <li><a href="#"><i class="fa fa-envelope"></i> Inbox</a></li>
                     <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                     <li class="divider"></li>
                     <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
                 </ul>
             </li>
         </ul>
     </div><!-- /.navbar-collapse -->
 </nav>