<div id="page-container" class="row">

    <div id="sidebar" class="col-sm-2">

        <div class="actions">
            <div id="header" class="container">
                <div class="btn-group-vertical" role="group" aria-label="...">
				<?php echo $this->element('menu/side_menu'); ?>
                </div>
            </div>
        </div><!-- /.actions -->

    </div>
    <div id="page-content" class="col-sm-10">
        <div class="jumbotron">
            <h3>Informations Générales</h3>
            <h5>- Nom : Prabhjot Bath<br />
               - Titre du Cour : 420-267 MO Développer un site Web et une application pour Internet.<br />
               - Autre Informations sur le cour  : Automne 2015, Collège Montmorency</h5>
            <h3>Information pour bon fonctionnement du site web</h3>
            <h4> -> Les listes interactives</h4>
            <h5>  Les listes interactives se trouve dans l'action d'ajouter un Profile. <br />
                Dans la 1er liste, il faut spécifier le pays et après la 2ème liste <br />
                s'ajuste selon la 1er liste.</h5>
            <h4> -> Le  "auto-complétion"</h4>
             <h5>  Le  "auto-complétion" se trouve dans l'action d'ajouter un Commentaire. <br />
                 Dans le champ réseau Social, il faut taper un ou plusieur lettre <br />
                 (par exemple, la lettre t, g ou f) pour que le site web offre des choix .<br />
                 Si le texte rentrer n'existe pas, le système rentrera le champ <br />
                 'other' pour ne pas faire tomber le site web.</h5>
            <h3>Base De données</h3>
            <h4> -> La base de données pratique (la base de donnée modifier)</h4>
            <?php echo $this->Html->image('modifier.png', array('escape' => false , 'width' => '800' , 'height' => '500')); ?>
            <h4> -> La base de données original (la base de donnée non-modifier)</h4>
            <?php echo $this->Html->image('original.PNG', array('escape' => false , 'width' => '800' , 'height' => '500')); ?>
             <a href="http://www.databaseanswers.org/data_models/social_media/index.htm">Lien de la base de donné originale</a> 
        </div>
    </div><!-- /#page-content .col-sm-9 -->

</div>
