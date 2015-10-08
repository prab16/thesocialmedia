
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		<div id="header" class="container">
                            <div class="btn-group-vertical" role="group" aria-label="...">
				<?php echo $this->element('menu/side_menu'); ?>
                                </div>
			</div>
                    <!--
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('List Profiles'), array('action' => 'index')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
			</ul> 
                    -->
		
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo __('Add Profile'); ?></h2>

		<div class="profiles form">
		
			<?php echo $this->Form->create('Profile', array('type'=> 'file','role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('lastName', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('email', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
                                        <div class="form-group">
						<?php echo $this->Form->input('avatar', array('type'=>'file')); ?>
					</div><!-- .form-group -->                                    
					<div class="form-group">
						<?php echo $this->Form->input('category_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php //echo $this->Form->input('user_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
							<?php echo $this->Form->input('Activity', array('multiple' => 'checkbox'));?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->