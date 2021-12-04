<?php
include_once "class/db.php";

class form {
    private $db1;

    public function input($name, $options){
        $db1 = new db();
        if($name =='checkbox' or $name =='radio'){     
            $html = '<input type="'. $name . '" name="' . $options[0] .'" id="' . $options[1] . '" class="' . $options[5] . '" value="' . $options[4] .'">';
            $html .= '<label for="' . $options[1] . '" id="' . $options[2] . '" class="' . $options[3] . '">' . $options[4] . '</label>';
        }
        else {
            if (isset($_SESSION['form'][$options[0]])){
                $value = $_SESSION['form'][$options[0]];
            }
            else {
                if (isset($_COOKIE[$options[0]])){
                    $value = $_COOKIE[$options[0]];
                }
                else {
                    $value =  ""; 
                }
            }
            $html = '<label for="' . $options[0] . '" id="' . $options[1] . '">' . $options[2] . '</label>';
            $html .= '<input type="'. $name . '" name="' . $options[0] .'" id="' . $options[0];
            if ($name == 'file'){
                $html .= '" accept="' . $options[4] .'">';
            }
            else {
                $html .= '" required="' . $options[3] . '" value="' . $value .'">';
            }            
        }
        return $html;
    }
}
?>