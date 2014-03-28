<?php
	class AdvsController extends AppController {
	var $name = 'Advs';
	var $uses = array('Adv');
	var $layout = 'admin';
	function index()
    {
		$this->set('advs', $this->Adv->find('all'));
	}
	
	function add()
    {
        if (!empty($this->data)) {
            if ($this->Adv->save($this->data)) {
                $this->Session->setFlash('Your user data has been saved.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
	
	function adversiter_list()
	{
		$this->set('advs', $this->Adv->find('list'));
	}
	
	function edit($id = null) {
        $this->Adv->id = $id;
        if (empty($this->data))
        {
            $this->data = $this->Adv->read();
        }
        else 
        {
            if ($this->Adv->save($this->data)) 
            {
                $this->Session->setFlash('Your Adversiter with id: '.$id.' has been updated.');
                $this->redirect(array('action' => 'edit'));
            }
        }
    }
	
	function delete($id)
    {
    	$this->Adv->delete($id);
        $this->Session->setFlash('The Adversiter with id: '.$id.' has been deleted.');
        $this->redirect(array('action'=>'index'));
    }


   
  
	}

?>