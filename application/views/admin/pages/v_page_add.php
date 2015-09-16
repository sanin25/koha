<?=Form::open('admin/pages/add', array('enctype' => 'multipart/form-data'))?>
<div class="table">
<table>
	<tr>
		<td>
			<?=Form::label('title', 'Название')?>: <br/><br/>
			            <?=Form::input('title')?><br/><br/>
			                <?=Form::label('describe', 'Описание')?>: <br/><br/>
			                <?=Form::textarea('descr')?><br/><br/>
			                 
		</td>
		<td>
                       <?=Form::label('href', 'href')?>: <br/>
			<?=Form::input('href')?><br/><br/>
			 <select name="category_id">
			    <option value="">
			        < Выберите категорию >
			    </option>
			     <?foreach ($cat as $cat):?>
			        <option value="<?=$cat->id?>">
			            <?= $cat->title ?>
			        </option>
			    <?endforeach?>
			</select>
		</td>
	</tr>
	<tr><td>
		 <?=Form::label('images', 'Загрузить изображения')?>: <br/><br/>
            <?=Form::file('images[]', array('id' => 'multi'))?>
	</td>
 	<td id='check'>
                <?=Form::label('chek', 'Статус')?>: <br/><br/>
 		 <?=Form::checkbox('act', 1, TRUE)?> 
        
 	</td>
        <td>
 	</tr>
        <tr>
           
            <td>
       <hr><br><?=Form::submit('add_page', 'Добавить')?>
            <?=Form::submit('add_stop', 'Отменить')?>
            </td>
        </tr>
</table>
    </div>
<?=Form::close()?>
