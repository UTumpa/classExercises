<?php
/**
 * array_diff_assoc for version < 4.3
 **/
if (!function_exists('array_diff_assoc'))
{
    function array_diff_assoc($a1, $a2)
    {
        foreach($a1 as $key => $value)
        {
            if(isset($a2[$key]))
            {
                if((string) $value !== (string) $a2[$key])
                {
                    $r[$key] = $value;
                }
            }else
            {
                $r[$key] = $value;
            }
        }
        return $r ;
    }
}

?>i