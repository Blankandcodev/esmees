<?php
class CronController extends AppController {
	      
    public function beforeFilter() {
	                parent::beforeFilter();
	                $this-&gt;layout=null;
	    }  
	   public function test() {
	            //if (!defined('CRON_DISPATCHER')) { $this-&gt;redirect('/'); exit(); }
	            echo ('hello');       
	            die;
	        }
	}
?>