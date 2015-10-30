<div id="page-container" class="row">

    <div id="sidebar" class="col-sm-2">

        <div class="actions">

            <ul class="list-group">

               <div id="header" class="container">
                            <div class="btn-group-vertical" role="group" aria-label="...">
				<?php echo $this->element('menu/side_menu'); ?>
                                </div>
			</div>
                    <!--
                        

                <li class="list-group-item"><?php echo $this->Html->link(__('New Profile'), array('action' => 'add'), array('class' => '')); ?></li>
                <li class="list-group-item"><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index'), array('class' => '')); ?></li> 
                <li class="list-group-item"><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add'), array('class' => '')); ?></li> 
                <li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?></li> 
                <li class="list-group-item"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => '')); ?></li> 
                <li class="list-group-item"><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index'), array('class' => '')); ?></li> 
                <li class="list-group-item"><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add'), array('class' => '')); ?></li> 
                <li class="list-group-item"><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index'), array('class' => '')); ?></li> 
                <li class="list-group-item"><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add'), array('class' => '')); ?></li> 
            </ul><!-- /.list-group -->

        </div><!-- /.actions -->

    </div><!-- /#sidebar .col-sm-3 -->

    <div id="page-content" class="col-sm-9">

        <div class="profiles index">

            <h2><?php echo __('Profiles'); ?></h2>

            <div class="table-responsive">
                <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                                <!--<th><?php echo $this->Paginator->sort('id'); ?></th>-->
                            <th><?php echo $this->Paginator->sort('name'); ?></th>
                            <th><?php echo $this->Paginator->sort('lastName'); ?></th>
                            <th><?php echo $this->Paginator->sort('email'); ?></th>
                            <th><?php echo $this->Paginator->sort('category_id'); ?></th>
                            <th><?php echo $this->Paginator->sort('activities'); ?></th>
                          <th><?php echo $this->Paginator->sort('comments'); ?></th>
                            <th><?php echo $this->Paginator->sort('user_id'); ?></th>
                            <th><?php echo $this->Paginator->sort('created'); ?></th>
                            <th><?php echo $this->Paginator->sort('modified'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
<?php foreach ($profiles as $profile): ?>
                            <tr>
                                    <!--<td><?php echo h($profile['Profile']['id']); ?>&nbsp;</td>-->
                                <td><?php echo h($profile['Profile']['name']); ?>&nbsp;</td>
                                <td><?php echo h($profile['Profile']['lastName']); ?>&nbsp;</td>
                                <td><?php echo h($profile['Profile']['email']); ?>&nbsp;</td>
                                <td>
    <?php  if ($this->Session->check('Auth.User') && $this->Session->read('Auth.User.confirm') == "1")  { 

        echo $this->Html->link($profile['Category']['title'], array('controller' => 'categories', 'action' => 'view', $profile['Category']['id']), array('class' => 'label label-info')); 
        
    }else{
        echo h($profile['Category']['title']);
    }
    ?>
                                </td>
<td><?php 
                    foreach ($profile['Activity'] as $activity) { 
                        // echo h($activity['name']) . ' '; 
echo $this->Html->link($activity['name'], array('controller' => 'activities', 'action' => 'view', $activity['id']), array('class' => 'label label-info')) . " &nbsp;";
                      //  echo $this->Html->tag('span', $activity['name'] . ' ', array('class' => 'label label-info')) . " &nbsp;";
                    } 
                    ?>
                    &nbsp;</td>
<td><?php 
                    foreach ($profile['Comment'] as $comment) { 
                        // echo h($comment['comment']) . ' '; 
echo $this->Html->link($comment['comment'], array('controller' => 'comments', 'action' => 'view', $comment['id']), array('class' => 'label label-info')) . " &nbsp;";                       
// echo $this->Html->tag('span', $comment['comment'] . ' ', array('class' => 'label label-info')) . " &nbsp;";
                    } 
                    ?>
                    &nbsp;</td>


                                <td>
    <?php if ($this->Session->check('Auth.User') && $this->Session->read('Auth.User.confirm') == "1") { 

        echo $this->Html->link($profile['User']['username'], array('controller' => 'users', 'action' => 'view', $profile['User']['id'])); 

    }else{
       echo h($profile['User']['username']);
    }
        ?>
                                </td>
                                <td><?php echo h($profile['Profile']['created']); ?>&nbsp;</td>
                                <td><?php echo h($profile['Profile']['modified']); ?>&nbsp;</td>
                                <td class="actions">
    <?php echo $this->Html->link(__('View'), array('action' => 'view', $profile['Profile']['id']), array('class' => 'btn btn-default btn-xs')); ?>
                                    <?php  if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.id') == $profile['User']['id'] &&  $this->Session->read('Auth.User.confirm') == "1") {echo $this->Html->link(__('Edit'), array('action' => 'edit', $profile['Profile']['id']), array('class' => 'btn btn-default btn-xs'));} ?>
                                    <?php  if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.id') == $profile['User']['id'] && $this->Session->read('Auth.User.confirm') == "1") {echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $profile['Profile']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $profile['Profile']['id']));} ?>
                                </td>
                            </tr>
<?php endforeach; ?>
                    </tbody>
                </table>
            </div><!-- /.table-responsive -->
             <?php  if ($this->Session->check('Auth.User')) { echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Profile'), array('controller' => 'profiles', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false));} ?>				
           
            <p><small>
<?php
echo $this->Paginator->counter(array(
    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
));
?>
                </small></p>

            <ul class="pagination">
<?php
echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
?>
            </ul><!-- /.pagination -->

        </div><!-- /.index -->

    </div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->