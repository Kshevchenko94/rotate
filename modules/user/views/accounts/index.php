<?php
$this->title = 'Аккаунты';
?>
<div class="row">
	<div class="col-md-4">
		<h2><?=$this->title?><span style="color:#8492af;">()</span></h2>
	</div>
	<div class="col-md-2">
		<button id="add_account" class="btn add"><span class="glyphicon glyphicon-plus-sign"></span> Добавить</button>
	</div>
	<div class="col-md-2">
		<button id="del_account" class="btn del"><span class="glyphicon glyphicon-remove-circle"></span> Удалить</button>
	</div>
	<div class="col-md-4">
		
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table_accounts">
			<thead>
				<th>Логин</th>
				<th>Статус</th>
				<th>Подписчиков</th>
				<th>Подписок</th>
				<th>Фотографий</th>
				<th>Прокси</th>
				<th>Управление</th>
			</thead>
			<tbody>
				
			</tbody>
		</table>
	</div>
</div>