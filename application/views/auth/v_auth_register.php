<br/>

<?=Form::open('register') ?>
<table width="300" cellspacing="5">
    <tr>
        <td ><?=Form::label('username', 'Логин')?>:</td>
        <td><?=Form::input('username')?></td>
    </tr>
    <tr>
        <td ><?=Form::label('first_name', 'ФИО')?>:</td>
        <td><?=Form::input('first_name')?></td>
    </tr>
    <tr>
        <td ><?=Form::label('email', 'Email')?>:</td>
        <td><?=Form::input('email')?></td>
    </tr>
     <tr>
        <td ><?=Form::label('password', 'Пароль')?>:</td>
        <td><?=Form::password('password')?></td>
    </tr>
     <tr>
        <td ><?=Form::label('password_confirm', 'Повторить пароль')?>:</td>
        <td><?=Form::password('password_confirm')?></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><?=Form::submit('reg', 'Зарегистрироваться')?></td>
    </tr>
</table>
<?=Form::close()?>