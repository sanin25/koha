  <ul id="nav"> 
    <?foreach($page as $menuname):?>
  <li><a href="<?=$menuname->href?>"><?=$menuname->title?></a>
    <?$name = $menuname->page->find_all()?>
    <ul>
    <?foreach ($name as $name):?>
                            
    <li><a href="<?=$name->href?>.html"><?=$name->title?></a></li>
    
    <?endforeach?>
    </ul>
   </li>
   <?endforeach?>
</ul>
                     
