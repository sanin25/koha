<?defined('SYSPATH') or die('No direct script access.')?>
<meta http-equiv='Content/Type' content="text/html" charset="UTF-8">
            <!--Подключение стиль  -->
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
    
    <div class="admenu">
        
        <ul>
            <li><?=HTML::anchor('admin','На главную')?></li>
            <li><?=HTML::anchor('admin/pages','Страницы')?></li>
            
        </ul>
    </div>
    <div class="adcenter">
        <?if(isset($center)):?>
         <?foreach($center as $center):?>
             <?=$center?>
         <?endforeach?>
        <?endif?>
    </div>
