<h1>お問い合わせフォーム</h1>

<form class="form-horizontal" method="post">
	<?php echo Form::csrf(); ?>
	<div class="form-group">
		<label class="col-md-2 control-label" for="name">名前</label>
		<div class="col-md-5">
			<?php echo $name ?>
			<input type="hidden" class="form-control" id="name" name="name" value="<?php echo $name ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label" for="email">メールアドレス</label>
		<div class="col-md-5">
			<?php echo $email ?>
			<input type="hidden" class="form-control" id="email" name="email" value="<?php echo $email ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label" for="tel">電話番号</label>
		<div class="col-md-5">
			<?php echo $tel ?>
			<input type="hidden" class="form-control" id="tel" name="tel" value="<?php echo $tel ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label" for="content">内容</label>
		<div class="col-md-5">
			<?php if ($content): ?>
			<pre><?php echo $content ?></pre>
			<?php endif; ?>
			<input type="hidden" class="form-control" id="content" name="content" value="<?php echo $content ?>">
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-offset-2 col-md-5">
			<button type="submit" class="btn btn-default" data-action="<?php echo Uri::base(); ?>contact">戻る</button>
			<button type="submit" class="btn btn-default" data-action="<?php echo Uri::base(); ?>contact/me/thanks">送信</button>
		</div>
	</div>
</form>

<script type="text/javascript">	
  $('.btn').click(function() {
    $(this).parents('form').attr('action', $(this).data('action'));
    $(this).parents('form').submit();
  });
</script>