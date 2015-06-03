<?php
/**
 * Clean the remaining variables in TPL
 * @param string $tpl
 * @return $tpl
 */
function blank($tpl)
{
    $keys = array('text', 'not_encrypted', 'not_decrypted');
    for($i = 1; $i <= 10; $i++)
    {
        $tpl = str_replace('{SHIFT_'.$i.'}', '', $tpl);
    }   
    foreach($keys as $var)
        $tpl = str_replace('{'.strtoupper($var).'}', '', $tpl);
    return $tpl;
}

$tpl = file_get_contents('index.tpl');
if(isset($_POST['text']) && isset($_POST['operation'])  && isset($_POST['shift']) )
{
    $tpl = str_replace('{SHIFT_'.$_POST['shift'].'}', 'selected', $tpl);
    $newText = $_POST['text'];
    $newTextCount = strlen($newText);
    for($i=0 ; $i<$newTextCount; $i++)
    {
        if($_POST['operation'] == 'encrypt') 
            $newText[$i] =  chr( ord($newText[$i]) + $_POST['shift'] );
        if($_POST['operation'] == 'decrypt') 
            $newText[$i] =  chr( ord($newText[$i]) - $_POST['shift'] );
    }

    $tpl = str_replace('{NOT_'.strtoupper($_POST['operation']).'}', 'selected', $tpl);
    $tpl = str_replace('{TEXT}', $newText, $tpl);
}

$tpl = blank($tpl);
echo $tpl;