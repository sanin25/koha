<meta http-equiv='Content/Type' content="text/html" charset="UTF-8">
            <!--Подключение стилей  -->
                <?if(isset($styles)):?>
                 <?foreach($styles as $style):?>
                  <?= html::style($style)?>
                   <?endforeach?>
                    <?endif?>    
                      <?if(isset($scripts)):?>
                 <?foreach($scripts as $script):?>
                  <?= html::script($script)?>
                   <?endforeach?>
                    <?endif?> 
    <div class="container">
        <div class="header">
            <div class="search-top">
                <!--Поиск-->
                <?if(isset($search)):?>
                    <?foreach($search as $seaech):?>
                        <?=$seaech?>
                    <?endforeach?>
                    <?endif?> 
            </div>
            <div class='menu-top'>
            <!--Меню-->
            <?if(isset($menu_top)):?>
           <?foreach($menu_top as $menu_top):?>
                        <?=$menu_top?>
           <?endforeach?>
           <?endif?> 
           </div>
        </div>
        <div class="left"></div>
        <div class="center">
           
            <?if(isset($center)):?>
             <p><?=$title?></p>
             <hr>
           <?foreach($center as $center):?>
                <?=$center?>
            <?endforeach?>
            <?endif?> 
        </div>
        <div class="footer">
         <?if(isset($footer)):?>
         <?endif?> 
        </div>
        
        
    </div>



