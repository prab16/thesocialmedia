
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			 <div id="header" class="container">
                <div class="btn-group-vertical" role="group" aria-label="...">
				<?php echo $this->element('menu/side_menu'); ?>
                </div>
            </div>
			<!--<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Country'), array('action' => 'edit', $country['Country']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Country'), array('action' => 'delete', $country['Country']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $country['Country']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Countries'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Country'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul> /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="countries view">

			<h2><?php  echo __('Country'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($country['Country']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($country['Country']['name']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related States'); ?></h3>
				
				<?php if (!empty($country['State'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($country['State'] as $state): ?>
		<tr>
			<td><?php echo $state['id']; ?></td>
			<td><?php echo $state['name']; ?></td>
			<td><?php echo $state['country_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'states', 'action' => 'view', $state['id']), array('class' => 'btn btn-default btn-xs')); ?>
                                <?php if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.confirm') == "1") {echo $this->Html->link(__('Edit'), array('controller' => 'states', 'action' => 'edit', $state['id']), array('class' => 'btn btn-default btn-xs'));} ?>
                                <?php if ($this->Session->read('Auth.User.role') == "admin" ||$this->Session->read('Auth.User.confirm') == "1") {echo $this->Form->postLink(__('Delete'), array('controller' => 'states', 'action' => 'delete', $state['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $state['id']));} ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
                                        <?php if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.confirm') == "1") {echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New State'), array('controller' => 'states', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); }?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
