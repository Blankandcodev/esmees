<?php class OrdersController extends AppController {
	var $uses = array('Order');
	var $helpers = array('Form', 'Country');
	var $components = array('Session');
	var $layout = 'default';

}