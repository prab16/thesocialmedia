
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
				<li class="list-group-item"><?php echo $this->Html->link(__('New Activity'), array('action' => 'add'), array('class' => '')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add'), array('class' => '')); ?></li> 
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="activities index">
		
			<h2><?php echo __('Activities'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<!--<th><?php echo $this->Paginator->sort('id'); ?></th>-->
							<th><?php echo $this->Paginator->sort('name'); ?></th>
                                                         <th><?php echo $this->Paginator->sort('profiles'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($activities as $activity): ?>
	<tr>
		<!--<td><?php echo h($activity['Activity']['id']); ?>&nbsp;</td>-->
		<td><?php echo h($activity['Activity']['name']); ?>&nbsp;</td>
                <td><?php 
                    foreach ($activity['Profile'] as $profile) { 
                        // echo h($activity['name']) . ' '; 
                        //echo $this->Html->tag('span', $profile['name'] . ' ', array('class' => 'label label-info')) . " &nbsp;";
                        echo $this->Html->link($profile['name'], array('controller' => 'profiles', 'action' => 'view', $profile['id']), array('class' => 'label label-info')) . " &nbsp;";                       

                        
                    } 
                    ?>
                    &nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $activity['Activity']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $activity['Activity']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $activity['Activity']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $activity['Activity']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
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