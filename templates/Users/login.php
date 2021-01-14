<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
 
    <div class="column-responsive column-80">
        <div class="users form content">
		<h2 class="text-center">Login </h2>
            <?= $this->Form->create() ?>
            <?= $this->Form->input('email');?>
		  <?= $this->Form->input('password',array('type' => 'password'));?>
            <?= $this->Form->input('login',array('class' => 'button'));?>
                    
		  <?= $this->Form->end() ?>
        </div>
    </div>
 
