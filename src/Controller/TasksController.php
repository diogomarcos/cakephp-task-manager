<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;

/**
 * TasksController
 *
 * @author  Diogo Marcos <contato@diogomarcos.com>
 * @version 1.0
 */
class TasksController extends AppController
{
    /**
     * Informações para exibir a listagem de tarefas
     * @var array $paginate
     */
    public $paginate = [
        'page' => 1,
        'limit' => 10,
        'maxLimit' => 100,
        'fields' => [
            'id', 'title', 'description', 'priority', 'created', 'modified'
        ],
        'sortWhitelist' => [
            'id', 'title', 'priority'
        ]
    ];

    /**
     * Ação para redirecionar página de / para /tasks
     * @return \Cake\Http\Response|null
     */
    public function display()
    {
        return $this->redirect('/tasks');
    }

    /**
     * Ação responsavel pela priorização das tarefas
     *
     * @throws \Cake\Datasource\Exception\InvalidPrimaryKeyException
     * @throws \Cake\Datasource\Exception\RecordNotFoundException
     * @throws \Cake\ORM\Exception\RolledbackTransactionException
     */
    public function dragdrop()
    {
        $result = $this->Tasks->find(
            'all',
            array(
                'fields' => array(
                    'id', 'title', 'description', 'priority'
                ),
                'order' => 'priority ASC'
            )
        );

        $this->set('result', $result);

        // Se clinar no botão, realizo a atualização das prioridades
        if(isset($_POST['ids'])) {
            $idArray = explode(',', $_POST['ids']);
            $count = 1;
            foreach ($idArray as $id){
                $tasksTable = TableRegistry::get('Tasks');
                $task = $tasksTable->get($id);

                $task->priority = $count;
                $tasksTable->save($task);

                $count ++;
            }
        }

    }
}
