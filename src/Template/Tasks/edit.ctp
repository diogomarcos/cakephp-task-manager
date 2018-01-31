<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Task $task
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(
                __('Excluir'),
                ['action' => 'delete', $task->id],
                ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $task->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Gerenciar Tarefas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Difinir Prioridades'), ['action' => 'dragdrop']) ?> </li>
    </ul>
</nav>
<div class="tasks form large-9 medium-8 columns content">
    <?= $this->Form->create($task) ?>
    <fieldset>
        <legend><?= __('Editar Tarefa') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
