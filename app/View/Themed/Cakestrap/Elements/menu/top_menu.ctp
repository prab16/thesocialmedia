<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button><!-- /.navbar-toggle -->
		<?php 

echo $this->Html->link($this->Html->image('logo.svg', array('width' => '48', 'height' => '48')),
                       array(
                    'controller' => 'about',
                    'action' => 'index'),
                       array('escape' => false , 'class' => 'navbar-brand'));

echo $this->Html->Link('The Social Media', array(
                                            'controller' => 'profiles',
                                            'action' => 'index'),
                                             array('class' => 'navbar-brand')); 
echo $this->Html->link("About", array(
                    'controller' => 'about',
                    'action' => 'index'),
                                             array('class' => 'navbar-brand')
                );?>
            
    </div><!-- /.navbar-header -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="active">
                            <?php
             if ($this->Session->check('Auth.User')) {
            echo $this->Html->link( __('Hello ')  . " " . $this->Session->read('Auth.User.username'),
                    array('controller' => 'users', 'action' => 'view', $this->Session->read('Auth.User.id')));
 echo "</li><li>";            

            if ($this->Session->read('Auth.User.role') == "admin") {
                echo $this->Html->link("[" . __('add user') . "]", array(
                    'controller' => 'users',
                    'action' => 'add')
                );
                echo "</li><li>";
            }
            echo $this->Html->link("[" . __('Logout') . "]" , array(
                'controller' => 'users',
                'action' => 'logout')
            );
        } else {
                    echo "</li><li>";            
                    echo $this->Html->link("[" . __('Login') . "]", array(
                                    'controller' => 'users',
                                    'action' => 'login')
                                );
                    echo "</li><li>";           
                     echo $this->Html->link("[" . __('add user') . "]", array(
                                        'controller' => 'users',
                                        'action' => 'add')
                                    );

        }
        ?>

                <a href="#"></a></li>
            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Langues <b class="caret"></b></a>
                <ul class="dropdown-menu">
                     <?php echo $this->I18n->flagSwitcher(array(
                       'class' => 'languages',
                       'id' => 'language-switcher'
                        ));
                ?>
                </ul>
            </li>
        </ul><!-- /.nav navbar-nav -->
    </div><!-- /.navbar-collapse -->
</nav><!-- /.navbar navbar-default -->
<div class="jumbotron">
<h1>SOSA</h1>
<p>tp pour applicaion internet</p><br />
<?php  if ($this->Session->check('Auth.User')) {
if ($this->Session->read('Auth.User.confirm') == "0") {
                echo "<h4>Vous n'avez pas confirmer votre compte!Vous pouvez seulement creer un profile et visionner la liste des profiles!</h4>
                      <h4>Les restrictions sont les suivants : </h4>
                        <h5> - Vous ne pouvez pas éditer un profile.</h5>
                        <h5> - Vous ne pourriez pas faire les actions suivantes : ajouter, éditer,supprimer et visionner les listes</h5>
                        <h5>  sur les catégories, les commentaires, les activitées et les réseaux sociaux. </h5>
";
                }
}
?>

</div>