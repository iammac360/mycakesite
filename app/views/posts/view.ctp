<h1><?php echo $post['Post']['title']; ?></h1>
<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>
<p><?php echo $post['Post']['body']; ?></p>
<p><?php echo $this->Html->link('Delete', array('action' => 'delete', $post['Post']['id']), null, 'Are you sure?'); ?></p>
<p><?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?></p>