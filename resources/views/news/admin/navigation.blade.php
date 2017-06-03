
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
           <? $actual_link = "http://$_SERVER[HTTP_HOST]/admin";?>
            <a class="navbar-brand" href="<?php echo $actual_link;?>">Панель администрирования</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div  >

            @if($menu)


                {!! $menu->asUl(['class'=>'nav navbar-nav ']) !!}

            @endif


        </div>
    </div>
</nav>


