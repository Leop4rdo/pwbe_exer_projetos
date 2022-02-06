<?php

/**
 * verifica se o radio deve permanecer checked
 * 
 * @param	currentValue	name do radio selecionado anteriormente pelo usuario
 * @param	value			name do radio que esta realizando a verificação 
 */
function isRadioChecked($currentValue, $value)
{
    if ($currentValue == strtoupper($value)) return "checked";
}
