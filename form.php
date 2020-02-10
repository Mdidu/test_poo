<?php 
/** 
* Class Form
* Permet de générer un formulaire rapidement et simplement
*/
class Form{

    /**
     * @var array Données utilisée par le fomulaire
     */
    protected $data;
    /**
     * @var string Tag utilisé pour entourer les champs
     */
    public $surround = 'p'; // public pour pouvoir faire $form->surround = 'div' par exemple

    /**
     * @param array $data Données utilisées par le fomulaire
     */
    public function __construct($data = array()){
        $this->data = $data;
    }

    /**
     * @param $html string Code HTML à entourer
     * @return string
     */
    //function qui affichera les formulaires dans des balises p actuellement
    protected function surround($html){
        echo "<{$this->surround}>$html</{$this->surround}>";
    }

    /**
     * @param $index string Index de la valeur à récupérer
     * @return string
     */
    protected function getValue($index){
        //retourne l'username si définie sinon null
        return isset($this->data[$index])?$this->data[$index]:null;
    }

    /**
     * @param $name string
     * @return string
     */
    //function qui retourne un input à la fonction surround pour qu'elle le crée!
    public function input($name){
        return $this->surround('<input type="text" name="'.$name.'" value="'.$this->getValue($name).'">');
    }

    /**
     * @return string
     */
    public function submit(){
        return $this->surround('<button type="submit">Envoyer</button>');
    }
}