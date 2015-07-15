<?php

class LoginHomePlugin extends Omeka_Plugin_AbstractPlugin{

	protected $_hooks = array(
		'define_acl',
        'public_header'
    );

	protected $_filters = array(
		'admin_navigation_main'
	);

        /**
     * Define the ACL.
     * 
     * @param Omeka_Acl
     */
    public function hookDefineAcl($args)
    {
    	$acl = $args['acl'];
       
        $indexResource = new Zend_Acl_Resource('LoginHome_Index');
        $acl->add($indexResource);

        $acl->allow(array('super', 'admin'), array('LoginHome_Index'));
        $acl->allow(null, 'LoginHome_Index', 'show');
        $acl->deny(null, 'LoginHome_Index', 'show-unpublished');
    }

    public function filterAdminNavigationMain($nav)
    {
        $nav[] = array(
            'label' => __('Login Home'),
            'uri' => url('login-home'),
            'resource' => 'LoginHome_Index'
        );
        return $nav;
    }

    public function hookPublicHeader($args){
        echo common('login',array(),'widget');
    }

}