<?= Form::open('admin/pages/edit/' . $id, array('enctype' => 'multipart/form-data')) ?>
<div class="table">
    <table>
        <tr>
            <td>
                <?= Form::label('title', 'Название') ?>: <br/><br/>
                <?= Form::input('title', $db['title']) ?><br/><br/>

                <?= Form::label('describe', 'Описание') ?>: <br/><br/>
                <?= Form::textarea('descr', $db['descr']) ?><br/><br/>

            </td>
            <td>
                <?= Form::label('href', 'href') ?>: <br/>
                <?= Form::input('href', $db['href']) ?><br/><br/>
                <?= Form::select('category_id[]', $cats, $db['category_id'], array('multiple' => 'multiple', 'size' => 5)) ?>
            </td>
        </tr>
        <tr><td>
                <?= Form::label('images', 'Загрузить изображения') ?>: <br/><br/>
                <?= Form::file('images[]', array('id' => 'multi')) ?>
            </td>
            <td id='check'>
                <?= Form::label('chek', 'Статус') ?>: <br/><br/>
                <?= Form::checkbox('act', 1, (bool) $db['act']) ?> 

            </td>
            <td>
        </tr>
        <tr>
            <td>
                <hr>
                        <?if (count($im = $data->images->find_all()) <= 0):?>

                        <h3 style="padding:20; text-align: center ">Нет изображения</h3>
                        <xd></xd>
                        <?endif?>
                         <?foreach($im as $img):?>


                        <?= html::anchor('media/uploads/' . $img->name, html::image('media/uploads/small_' . $img->name, 
                                array('width' => '150')),
                                array('class' => 'fancybox-thumb', 'rel' => 'fancybox-thumb'))
                        ?>

                        <?endforeach?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <hr><br><?= Form::submit('edit_page', 'Сохранить') ?>
                <?= Form::submit('edit_stop', 'Отменить') ?></td>
        </tr>
    </table>
</div>
<?= Form::close() ?>

