<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo lang('Home_Admin') ?></a>
        </div>
        <div class="collapse navbar-collapse" id="app">
            <ul class="nav navbar-nav">
                <li><a href="#"><?php echo lang('Categories') ?></a></li>
                <li><a href="#"><?php echo lang('Items') ?></a></li>
                <li><a href="#"><?php echo lang ('Members') ?></a></li>
                <li><a href="#"><?php echo lang('Statistics') ?></a></li>
                <li><a href="#"><?php echo lang('Logs') ?></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="members.php?do=Edit&id=<?php echo $_SESSION['id']; ?>">Edit</a></li>
                        <li><a href="#">Setting</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>    
</nav>