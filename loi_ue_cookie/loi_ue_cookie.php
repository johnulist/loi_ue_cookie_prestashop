<?php
/*
Website : www.nymphea-studio.fr
Author : Nicolas Peraudeau
Version : 1.0.0
*/
if ( !defined( '_PS_VERSION_' ) )
	exit;
class loi_Ue_Cookie extends Module
{
	public function __construct()
	{
		$this->name = 'loi_ue_cookie';
		$this->tab = 'Loi Ue Cookie';
		$this->version = 1.0;
		$this->author = 'Peraudeau Nicolas';
		$this->need_instance = 0;
		parent::__construct();
		$this->displayName = $this->l( 'Loi Ue Cookie' );
		$this->description = $this->l( 'demander l’autorisation explicite à l’internaute pour utiliser des cookies.' );
		$this->confirmUninstall = $this->l('Etes vous sur de vouloir supprimer le module loi_ue_cookie ?');
	}
	public function install()
	{
		if (!parent::install() OR !$this->registerHook('top'))
			return false;
		return true;
	}
	public function uninstall()
	{
		if (!parent::uninstall())
			return false;
		return true;
	}
	public function hookTop( $params )
	{
		global $smarty;
		return $this->display( __FILE__, 'loi_ue_cookie.tpl' );
	}
	public function getContent()
	{
		$output = '<h2>'.$this->displayName.'</h2>';
		return $output.$this->displayForm();
	}
	private function displayForm()
	{
		return '
			<form action="'.Tools::safeOutput($_SERVER['REQUEST_URI']).'" method="post">
			<fieldset>
			<!--<input type="submit" name="submitMymoule" value="'.$this->l('Enregistrer').'" class="button" />-->
			Ce module vous permet d etre conforme avec la loi de l UE concernant l enregistrement des cookies dans le navigateur de vos internautes.
			</fieldset>
			</form>';
	}
}
?>