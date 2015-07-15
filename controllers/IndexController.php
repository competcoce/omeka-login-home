<?php
/**
 * @copyright Roy Rosenzweig Center for History and New Media, 2007-2012
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 * @package ExhibitBuilder
 */

class LoginHome_IndexController extends Omeka_Controller_AbstractActionController
{
	public function init() 
    {
        $this->_helper->db->setDefaultModelName('LoginHome_LoginHome');
    }

	public function indexAction(){
		$this->view->assign('collection', '<h1>asdfdsf</h1>');
	}
}