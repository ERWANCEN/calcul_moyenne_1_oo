<?php

// je crée une nouvelle classe que j'appelle 'Notes'
class Notes
{
    /**
     * Tableau des moyennes de l'élève
     *
     * @var array
     */
    private array $_tabNotes = ['mathematiques' => 16, 'français' => 13, 'histoire' => 8, 'géographique' => 6, 'svt' => 17, 'chimie' => 11];

    /**
     * Propriété '$_moyenneG' à laquelle j'associe une chaine de caractères vide qui servira à accueillir le résultat du calcul de la moyenne générale de l'élève
     *
     * @var string
     */
    private string $_moyenneG = "";

    /**
     * Méthode qui permet d'afficher chaque moyenne associée à chaque matière
     *
     * @return void
     */
    public function affichageMoyennes()
    {
        foreach ($this->_tabNotes as $matiere => $note)
        {
            echo "<p>En " . $matiere . ", la moyenne est de : " . $note . "/20.</p>";
        }
    }

    /**
     * Methode qui calcul et affiche la moyenne générale de l'élève
     *
     * @return void
     */
    public function affichageMoyenneG()
    {
        // round() permet d'arrondi le résultat final
        // array_sum() permet d'additionner toutes les valeurs de la propriété array '$_tabNotes'
        // count() permet de compter tous les éléments de la propriété array '$_tabNotes'
        $this->_moyenneG = round(array_sum($this->_tabNotes) / count($this->_tabNotes), 2);
        // affiche la propriété '$_moyenneG', donc le résultat du calcul précédent
        echo $this->_moyenneG;        
    }
}
