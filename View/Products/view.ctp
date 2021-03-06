<div class="row">
	  <!--div class="actions">
	  	<h3><?php //echo __('Actions'); ?></h3>
	  	<ul>
	  		<li><?php //echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
	  		<li><?php //echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $product['Product']['id']))); ?> </li>
	  		<li><?php //echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
	  		<li><?php //echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
	  		<li><?php //echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
	  		<li><?php //echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	  	</ul>
	</div-->
  <div class="small-10 large-10 columns">
	<!--Contenido -->
	<h2><?php echo __('Product'); ?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($product['Product']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Name'); ?></dt>
			<dd>
				<?php echo h($product['Product']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Description'); ?></dt>
			<dd>
				<?php echo h($product['Product']['description']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Price'); ?></dt>
			<dd>
				<?php echo h($product['Product']['price']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Category'); ?></dt>
			<dd>
				<?php echo $this->Html->link($product['Category']['name'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?>
				&nbsp;
			</dd>
		</dl>
	<!--Contendo -->
  </div>
</div>
