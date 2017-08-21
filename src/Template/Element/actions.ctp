<!--Sidebar for user actions-->

<ul class="side-nav">
	<li class="heading"><?= __('Actions'); ?></li>
	<li><?= $this->Html->link(_('New ' . $type), [ 'action' => 'add']); ?></li>
	<li><?= $this->Html->link(_('List ' . $typePlural), [ 'action' => 'index']); ?></li>
</ul>