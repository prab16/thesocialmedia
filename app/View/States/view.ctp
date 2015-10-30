
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			 <div id="header" class="container">
                <div class="btn-group-vertical" role="group" aria-label="...">
				<?php echo $this->element('menu/side_menu'); ?>
                </div>
            </div>
			<!--<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit State'), array('action' => 'edit', $state['State']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete State'), array('action' => 'delete', $state['State']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $state['State']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List States'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New State'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul> /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="states view">

			<h2><?php  echo __('State'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($state['State']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($state['State']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Country'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($state['Country']['name'], array('controller' => 'countries', 'action' => 'view', $state['Country']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related Profiles'); ?></h3>
				
				<?php if (!empty($state['Profile'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('LastName'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Avatar'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('State Id'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($state['Profile'] as $profile): ?>
		<tr>
			<td><?php echo $profile['id']; ?></td>
			<td><?php echo $profile['name']; ?></td>
			<td><?php echo $profile['lastName']; ?></td>
			<td><?php echo $profile['email']; ?></td>
			<td><?php echo $profile['avatar']; ?></td>
			<td><?php echo $profile['category_id']; ?></td>
			<td><?php echo $profile['user_id']; ?></td>
			<td><?php echo $profile['created']; ?></td>
			<td><?php echo $profile['modified']; ?></td>
			<td><?php echo $profile['state_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'profiles', 'action' => 'view', $profile['id']), array('class' => 'btn btn-default btn-xs')); ?>
                                <?php if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.confirm') == "1") { echo $this->Html->link(__('Edit'), array('controller' => 'profiles', 'action' => 'edit', $profile['id']), array('class' => 'btn btn-default btn-xs'));} ?>
                                <?php  if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.confirm') == "1") {echo $this->Form->postLink(__('Delete'), array('controller' => 'profiles', 'action' => 'delete', $profile['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $profile['id']));} ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
                                        <?php  if ($this->Session->check('Auth.User')) {echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Profile'), array('controller' => 'profiles', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); }?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
