
<div id="page-container" class="row">

    <div id="sidebar" class="col-sm-2">

        <div class="actions">
            <div id="header" class="container">
                <div class="btn-group-vertical" role="group" aria-label="...">
				<?php echo $this->element('menu/side_menu'); ?>
                </div>
            </div>
           
                
            <!--
                <ul class="list-group">			
                                        <li class="list-group-item"><?php echo $this->Html->link(__('Edit Profile'), array('action' => 'edit', $profile['Profile']['id']), array('class' => '')); ?> </li>
        <li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Profile'), array('action' => 'delete', $profile['Profile']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $profile['Profile']['id'])); ?> </li>
        <li class="list-group-item"><?php echo $this->Html->link(__('List Profiles'), array('action' => 'index'), array('class' => '')); ?> </li>
        <li class="list-group-item"><?php echo $this->Html->link(__('New Profile'), array('action' => 'add'), array('class' => '')); ?> </li>
        <li class="list-group-item"><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index'), array('class' => '')); ?> </li>
        <li class="list-group-item"><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add'), array('class' => '')); ?> </li>
        <li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?> </li>
        <li class="list-group-item"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => '')); ?> </li>
        <li class="list-group-item"><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index'), array('class' => '')); ?> </li>
        <li class="list-group-item"><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add'), array('class' => '')); ?> </li>
        <li class="list-group-item"><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index'), array('class' => '')); ?> </li>
        <li class="list-group-item"><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add'), array('class' => '')); ?> </li>
                        
                </ul><!-- /.list-group -->

        </div><!-- /.actions -->

    </div><!-- /#sidebar .span3 -->

    <div id="page-content" class="col-sm-9">

        <div class="profiles view">

            <h2><?php  echo __('Profile'); ?></h2>
            <?php if ($profile['Profile']['avatar']) echo $this->Html->image($profile['Profile']['avatar'], array('escape' => false , 'width' => '100' , 'height' => '100'));?>

            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>		<td><strong><?php echo __('Id'); ?></strong></td>
                            <td>
			<?php echo h($profile['Profile']['id']); ?>
                                &nbsp;
                            </td>
                        </tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
                            <td>
			<?php echo h($profile['Profile']['name']); ?>
                                &nbsp;
                            </td>
                        </tr><tr>		<td><strong><?php echo __('LastName'); ?></strong></td>
                            <td>
			<?php echo h($profile['Profile']['lastName']); ?>
                                &nbsp;
                            </td>
                        </tr><tr>		<td><strong><?php echo __('Email'); ?></strong></td>
                            <td>
			<?php echo h($profile['Profile']['email']); ?>
                                &nbsp;
                            </td>
                        </tr><tr>		<td><strong><?php echo __('Category'); ?></strong></td>
                            <td>
			<?php  if ($this->Session->check('Auth.User')) { 
                            echo $this->Html->link($profile['Category']['title'], array('controller' => 'categories', 'action' => 'view', $profile['Category']['id']), array('class' => '')); 
                        }else{
                            echo h($profile['Category']['title']);
                        }
?>
                                &nbsp;
                            </td>
                        </tr><tr>		<td><strong><?php echo __('User'); ?></strong></td>
                            <td>
			<?php   if ($this->Session->check('Auth.User')) { 
                            echo $this->Html->link($profile['User']['username'], array('controller' => 'users', 'action' => 'view', $profile['User']['id']), array('class' => '')); 
                        }else{
                             echo h($profile['User']['username']);
                        }
?>
                                &nbsp;
                            </td>
                        </tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
                            <td>
			<?php echo h($profile['Profile']['created']); ?>
                                &nbsp;
                            </td>
                        </tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
                            <td>
			<?php echo h($profile['Profile']['modified']); ?>
                                &nbsp;
                            </td>
                        </tr><tr>               <td><strong><?php echo __('State'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($profile['State']['name'], array('controller' => 'states', 'action' => 'view', $profile['State']['id'])); ?>
			&nbsp;
                </td></tr>					</tbody>
                </table><!-- /.table table-striped table-bordered -->
<?php  if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.id') == $profile['User']['id']) {echo $this->Html->link(__('Edit Profile'), array('action' => 'edit', $profile['Profile']['id']), array('class' => 'btn btn-large btn-primary'));} ?> 
       <?php  if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.id') == $profile['User']['id']) { echo $this->Form->postLink(__('Delete Profile'), array('action' => 'delete', $profile['Profile']['id']), array('class' => 'btn btn-large btn-primary'), __('Are you sure you want to delete # %s?', $profile['Profile']['id']));} ?> 
        
            
            </div><!-- /.table-responsive -->

        </div><!-- /.view -->


        <div class="related">

            <h3><?php echo __('Related Comments'); ?></h3>

				<?php if (!empty($profile['Comment'])): ?>

            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th><?php echo __('Id'); ?></th>
                            <th><?php echo __('Comment'); ?></th>
                            <th><?php echo __('Profile Id'); ?></th>
                            <th><?php echo __('Network Id'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
									<?php
										$i = 0;
										foreach ($profile['Comment'] as $comment): ?>
                        <tr>
                            <td><?php echo $comment['id']; ?></td>
                            <td><?php echo $comment['comment']; ?></td>
                            <td><?php echo $comment['profile_id']; ?></td>
                            <td><?php echo $comment['network_id']; ?></td>
                            <td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['id']), array('class' => 'btn btn-default btn-xs')); ?>
                                <?php  if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.id') == $profile['User']['id']) { echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['id']), array('class' => 'btn btn-default btn-xs'));} ?>
                                <?php  if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.id') == $profile['User']['id']) { echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $comment['id']));} ?>
                            </td>
                        </tr>
	<?php endforeach; ?>
                    </tbody>
                </table><!-- /.table table-striped table-bordered -->
            </div><!-- /.table-responsive -->

				<?php endif; ?>


            <div class="actions">
                                        <?php  if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.id') == $profile['User']['id']) { echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Comment'), array('controller' => 'comments', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); }?>				</div><!-- /.actions -->

        </div><!-- /.related -->


        <div class="related">

            <h3><?php echo __('Related Activities'); ?></h3>

				<?php if (!empty($profile['Activity'])): ?>

            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th><?php echo __('Id'); ?></th>
                            <th><?php echo __('Name'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
									<?php
										$i = 0;
										foreach ($profile['Activity'] as $activity): ?>
                        <tr>
                            <td><?php echo $activity['id']; ?></td>
                            <td><?php echo $activity['name']; ?></td>
                            <td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'activities', 'action' => 'view', $activity['id']), array('class' => 'btn btn-default btn-xs')); ?>
                                <?php  if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.id') == $profile['User']['id']) { echo $this->Html->link(__('Edit'), array('controller' => 'activities', 'action' => 'edit', $activity['id']), array('class' => 'btn btn-default btn-xs'));} ?>
                                <?php  if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.id') == $profile['User']['id']) { echo $this->Form->postLink(__('Delete'), array('controller' => 'activities', 'action' => 'delete', $activity['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $activity['id']));} ?>
                            </td>
                        </tr>
	<?php endforeach; ?>
                    </tbody>
                </table><!-- /.table table-striped table-bordered -->
            </div><!-- /.table-responsive -->

				<?php endif; ?>


            <div class="actions">
                                        <?php  if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.id') == $profile['User']['id']) { echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Activity'), array('controller' => 'activities', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false));} ?>				
            </div><!-- /.actions -->

        </div><!-- /.related -->


    </div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
