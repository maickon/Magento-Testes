<?php

//A classe referente ao modulo deve herdar de uma classe padrao do Magento
//Através desta herança a classe criada é reconhecida dentro do arquivo XML dentro do contexto da
//arquitetura do Magento

class Maickon_AutoCompletar_AjaxController extends Mage_Core_Controller_Front_Action {
    public function enderecoAction() {
        echo @file_get_contents('http://cep.republicavirtual.com.br/web_cep.php?cep='.urlencode($this->getRequest()->getParam('cep', false)).'&formato=json');
    }
}