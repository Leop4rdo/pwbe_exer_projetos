<?php

/**
 * verifica se o radio deve permanecer checked
 * 
 * @param	string $currentValue	name do radio selecionado anteriormente pelo usuario
 * @param	string $value			name do radio que esta realizando a verificação 
 * @return  bool 
 */
function isRadioChecked($currentValue, $value)
{
    if ($currentValue == strtoupper($value)) return "checked";
}
