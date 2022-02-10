<?php

/**
 * verifica se o radio deve permanecer checked
 * 
 * @param	string $currentValue	name do radio selecionado anteriormente pelo usuario
 * @param	string $value			name do radio que esta realizando a verificação 
 * @return  string 
 */
function isRadioChecked(string $currentValue, string $value){
    if ($currentValue == strtoupper($value)) return "checked";
}

/**
 * verifica se o radio deve permanecer checked
 * 
 * @param	mixed $currentValue	name do radio selecionado anteriormente pelo usuario
 * @param	mixed $value			name do radio que esta realizando a verificação 
 * @return  string
 */
function isOptionSelected($currentValue, $value){
    if ($currentValue == $value) return "selected";
}