
<?=$pages->descr?>
<br>
<?$im = $pages->images->find_all()?>
 
<?foreach($im as $img):?>
 
<?=html::anchor('media/uploads/'.$img->name,
   html::image('media/uploads/small_' .$img->name, array('width' => '150')), array('class'=>'fancybox-thumb','rel'=>'fancybox-thumb'))?>

<?endforeach?>
 

