<h1>お問い合わせフォーム</h1>

<form class="form-horizontal" action="<?php echo Uri::base(); ?>contact/me" method="post">
	<?php echo Form::csrf(); ?>
	<div class="form-group">
		<label class="col-md-2 control-label" for="name">名前</label>
		<div class="col-md-5">
			<input type="text" class="form-control" id="name" name="name" value="<?php echo $name ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label" for="email">メールアドレス</label>
		<div class="col-md-5">
			<input type="text" class="form-control" id="email" name="email" value="<?php echo $email ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label" for="tel">電話番号</label>
		<div class="col-md-5">
			<input type="text" class="form-control" id="tel" name="tel" value="<?php echo $tel ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label" for="content">内容</label>
		<div class="col-md-5">
			<textarea class="form-control" id="content" name="content" rows="5" cols="50"><?php echo $content ?></textarea>
		</div>
	</div>
	<?php if (Session::get_flash('error')): ?>
	<div class="form-group">
		<?php foreach(Session::get_flash('error') as $key => $value): ?>
		<div class="alert alert-danger col-md-offset-2 col-md-5" role="alert">
			<?php echo $value; ?>
		</div>
		<?php endforeach; ?>
	</div>
	<?php endif; ?>
	<div class="form-group">
		<div class="col-md-offset-2 col-md-5">
			<button type="submit" class="btn btn-default">確認</button>
		</div>
	</div>
</form>