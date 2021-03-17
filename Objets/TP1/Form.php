<?php


class Form
{
    private $form;


    public function __construct()
    {
        $this->form = "<form><fieldset>";
    }
    public function rajouterUnInput($id, $class="")  {
        $this->form.= "<input type='text' id='$id' class='$class'>";
    }

    public function __toString() {
        //$this->form = $this->form "</fieldset></form>";
        //Concaténaion avec .=
        $this->form .= "<input type='submit' value='Envoyer'></fieldset></form>";
        return $this->form;
    }

}

//Je vais appeler une méthode et ça va m'afficher :
//<form><fieldset><input type="text"></fieldset></form>
