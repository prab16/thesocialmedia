<?php

if ($this->Session->check('Auth.User')) {
    echo 
    '<div class="dropdown"><button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'
    . $this->Html->link(__('Profile'), array('action' => 'add'), array('class' => ''))
    . '<span class="caret"></span></button><ul class="dropdown-menu" aria-labelledby="dropdownMenu1"><li>'
    . $this->Html->link(__('New Profile'), array('action' => 'add'), array('class' => ''))
    .'</li><li>'
    . $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index'), array('class' => ''))
    . '</li></ul></div>'
    . "\r\n"
    . '<div class="dropdown"><button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><div class="dropdown-toggle" data-toggle="dropdown">'
        . $this->Html->link(__('Category'), array('controller' => 'categories', 'action' => 'add'), array('class' => ''))
    . '<b class="caret"></b></div></button><ul class="dropdown-menu" aria-labelledby="dropdownMenu1"><li>'
    . $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add'), array('class' => ''))
     .'</li><li>'
    . $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index'), array('class' => ''))
    . '</li></ul></div>'
    . "\r\n"
    . '<div class="dropdown"><button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><div class="dropdown-toggle" data-toggle="dropdown">'
    . $this->Html->link(__('Comment'), array('controller' => 'comments', 'action' => 'add'), array('class' => ''))
    . '<b class="caret"></b></div></button><ul class="dropdown-menu" aria-labelledby="dropdownMenu1"><li>'
    . $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add'), array('class' => ''))
    .'</li><li>'
    . $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index'), array('class' => ''))        
    . '</li></ul></div>'
    . "\r\n"
    . '<div class="dropdown"><button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><div class="dropdown-toggle" data-toggle="dropdown">'
    . $this->Html->link(__('Activity'), array('controller' => 'activities', 'action' => 'add'), array('class' => ''))
    . '<b class="caret"></b></div></button><ul class="dropdown-menu" aria-labelledby="dropdownMenu1"><li>'
    . $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add'), array('class' => ''))
    .'</li><li>'
    . $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index'), array('class' => ''))
    . '</ul></div>'
    . "\r\n"
    . '<div class="dropdown"><button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><div class="dropdown-toggle" data-toggle="dropdown">'
    . $this->Html->link(__('Network'), array('controller' => 'networks', 'action' => 'add'), array('class' => ''))
    . '<b class="caret"></b></div></button><ul class="dropdown-menu" aria-labelledby="dropdownMenu1"><li>'
    . $this->Html->link(__('New Network'), array('controller' => 'networks', 'action' => 'add'), array('class' => ''))
    .'</li><li>'
    . $this->Html->link(__('List Networks'), array('controller' => 'networks', 'action' => 'index'), array('class' => ''))
    . '</li></ul></div>';

    if ($this->Session->read('Auth.User.role') == "admin") {
        echo "\r\n"
        . '<div class="dropdown"><button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><div class="dropdown-toggle" data-toggle="dropdown">'
        . $this->Html->link(__('User'), array('controller' => 'users', 'action' => 'add'), array('class' => ''))
        . '<b class="caret"></b></div></button><ul class="dropdown-menu" aria-labelledby="dropdownMenu1"><li>'
        . $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => ''))
        .'</li><li>'
        . $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => ''))
        . '</li></ul></div>';
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

