<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Task $task
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Gerenciar Tarefas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Difinir Prioridades'), ['action' => 'dragdrop']) ?> </li>
        <li><?= $this->Html->link(__('Nova Tarefa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Editar Tarefa'), ['action' => 'edit', $task->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir Tarefa'), ['action' => 'delete', $task->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $task->id)]) ?> </li>
    </ul>
</nav>
<div class="tasks view large-9 medium-8 columns content">
    <h3>Visualizar detalhes da tarefa</h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Código') ?></th>
            <td><?= $this->Number->format($task->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Título') ?></th>
            <td><?= h($task->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descrição') ?></th>
            <td><?= h($task->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data de Criação') ?></th>
            <td><?= h($task->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data de Modificação') ?></th>
            <td><?= h($task->modified) ?></td>
        </tr>
    </table>
</div>
