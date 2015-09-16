<div class="tabcon">
<?if($allpage->count() > 0):?>
<br/>
<table width="100%" border="0" class="tbl"  cellspacing="0">
    <thead>
        <tr height="30">
            <th>Алиса</th>
            <th>Название</th>
            <th>Функции</th>
        </tr>
    </thead>
<? foreach ($allpage as $page):?>
<tr>
    <td width="200" align="center" ><?=$page->href?></td>
    <td align="center" ><?=HTML::anchor('admin/pages/edit/'. $page->id, $page->title)?></td>
    <td width="100" align="center">

    <?=HTML::anchor('page/'. $page->href, HTML::image('media/img/see.png'), array('target' => '_blank'))?>
    
    <?=HTML::anchor('admin/pages/edit/'. $page->id, HTML::image('media/img/edit.png'))?>

    <?=HTML::anchor('admin/pages/delete/'. $page->id, HTML::image('media/img/delete.png'))?>

</td>
</tr>
<? endforeach?>

</table>

<?else:?>
<p align="center">Нет страниц</p>
<?endif?>

<br/>
<hr>
<p align="center" class="addbot">
<?=HTML::image('media/img/add.png', array('valign' => 'top'))?>

<?=HTML::anchor('admin/pages/add', 'Добавить страницу')?>
</p>

</div>

