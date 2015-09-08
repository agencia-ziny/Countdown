<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Ziny
 */
class Ziny_Countdown_Block_Countdown extends Mage_Catalog_Block_Product_Abstract {

    public function store() {

        $expira = $this->getProduct()->getSpecialToDate();
        if ($expira !== NULL) {
            
            $expira = explode(' ', $expira);
            $dataExpira = $expira[0];
            $dataExpira = explode('-', $dataExpira);

            $hoje = Mage::getModel('core/date')->date('Y-m-d H:i:s');
            $hoje = explode(' ', $hoje);
            
            $dataHoje = $hoje[0];
            $dataHoje = explode('-', $dataHoje);
            
            $horaHoje = $hoje[1];

            $ano = $dataExpira[0] - $dataHoje[0];
            $mes = $dataExpira[1] - $dataHoje[1];
            $dia = $dataExpira[2] - $dataHoje[2];
            
            $dias = ($mes * 31) + $dia;
            
            $horaHoje = explode(':', $horaHoje);
            
            $horas_restantes = 24 - $horaHoje[0];
            $minutos_restantes = 60 - $horaHoje[1];
            $segundos_restantes = 60 - $horaHoje[2];
            $expira_em = $dias . '-' . $horas_restantes . '-' . $minutos_restantes . '-' . $segundos_restantes;
            $expira_em = explode('-', $expira_em);
            return $expira_em;
        }
    }

}
