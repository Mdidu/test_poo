<?php
class BootstrapForm extends Form{

    /**
     * @param $html string Code HTML à entourer
     * @return string
     */
    //function qui affichera les formulaires dans des balises p actuellement
    protected function surround($html){
        echo '<div class="form-group">'.$html.'</div>';
    }

    /**
     * @param $name string
     * @return string
     */
    //function qui retourne un input à la fonction surround pour qu'elle le crée!
    public function input($name){
        return $this->surround(
            '<label>'.$name.'</label><input type="text" name="'.$name.'" value="'.$this->getValue($name).'" class="form-control">');
    }

    /**
     * @return string
     */
    public function submit(){
        return $this->surround('<button type="submit" class="btn btn-primary">Envoyer</button>');
    }
}