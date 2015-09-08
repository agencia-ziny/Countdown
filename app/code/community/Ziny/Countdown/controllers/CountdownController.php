<?php

class Ziny_Countdown_CountdownController extends Mage_Core_Controller_Front_Action{
    
    
    public function acaoAction(){
        
        #$this->_redirect('*/*/actionredirect');
        $this->_forward('actionforward');
        
        $this->loadLayout();
        $this->renderLayout();
    }
    
    public function actionforwardAction(){
        
        echo 'actionForward';
    }
    
    public function actionredirectAction(){
        
        echo 'actionRedirect';
        $this->loadLayout();
        $this->renderLayout();
    }
}