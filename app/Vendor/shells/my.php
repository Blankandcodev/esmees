<?php
 
class MyShell extends Shell {
 
    var $uses = array('Client');
 
   public function main() {
        App::import('Core', 'Controller');
        App::import('Component', 'Email');
 
        $this->Controller = & new Controller();
        $this->Email = & new EmailComponent(null);
        $this->Email->initialize($this->Controller);
        $this->Controller->ext = '.php';
 
        $start_date = date("Y-m-d");
        $end_date = date('Y-m-d', strtotime('+31 days'));
        $host_and_maintain_end_within_month = $this->Client->find('all', array('conditions' => array(array('Hosting_end_date between ? and ?' => array($start_date, $end_date)))));
        $this->Controller->set('clients', $host_and_maintain_end_within_month);
 
        $this->Email->to = 'sbdh.singh@gmail.com';  // $email[0]['User']['email'];
        $this->Email->subject = 'Expire Date Information '. $start_date;
        $this->Email->sendAs = 'html';
        $this->Email->template = 'alert';//template in app\views\elements\email\html\alert.ctp
        $this->Email->smtpOptions = array(
            'port' => '465',
            'timeout' => '30',
            'host' => 'ssl://smtp.gmail.com',
            'username' => 'sbdh.singh@gmail.com',
            'password' => 'shripati123',
        );
        $this->Email->delivery = 'smtp';
        $this->Email->send();
    }
 
}
?> 