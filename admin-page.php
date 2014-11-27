<?php

function likeMoneyAdminOptions()
{
	global $options;

	ob_start();
?>

	<div class="wrap">
		<h1>Like Money</h1>
		<form action="options.php" method="post">

			<?php settings_fields('likeMoneySettingsGroup'); ?>

			<h2><?php _e('Opções do Plugin', 'likeMoneyDomain') ?></h2>

			<label for="likeMoneySettings[enableLike]"><?php _e('Usuários podem dar likes', 'likeMoneyDomain'); ?></label>
			<input type="checkbox" name="likeMoneySettings[enableLike]" id="likeMoneySettings[enableLike]" value="1" <?php checked(1, $options['enableLike']); ?>>

			<br/>
			
			<label for="likeMoneySettings[confirmacao]"><?php _e('Digite a mensagem de confirmacao de like', 'likeMoneyDomain'); ?></label>
			<input type="text" id="likeMoneySettings[confirmacao]" name="likeMoneySettings[confirmacao]" value="<?php echo $options['confirmacao']; ?>">

			<br>

			<?php $styles = array('blue', 'red'); ?>

			<label>Tema:</label>
			<select name="likeMoneySettings[tema]" id="likeMoneySettings[tema]">
				<?php foreach ($styles as $style): ?>
					<option value="<?php echo $style; ?>" <?php echo ($options['tema'] == $style) ? 'selected' : '' ; ?>><?php echo $style; ?></option>
				<?php endforeach; ?>
			</select>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e('Salvar informações', 'likeMoneyDomain'); ?>">
			</p>	

		</form>
	</div>


<?php

	echo ob_get_clean();

}

function likeMoneyAdminLinks()
{
	add_options_page('My Like Money', 'Like Money', 'manage_options', '', 'likeMoneyAdminOptions');
}

add_action('admin_menu', 'likeMoneyAdminLinks');	

function likeMoneyRegisterSettings()
{
	register_setting('likeMoneySettingsGroup', 'likeMoneySettings');
}

add_action('admin_init', 'likeMoneyRegisterSettings');