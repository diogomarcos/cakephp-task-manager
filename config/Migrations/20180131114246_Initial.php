<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('Tasks');
        $table
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('description', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('priority', 'integer', [
                'limit' => 11,
            ])
            ->addColumn('created', 'datetime', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->execute(
            "INSERT INTO `Tasks` (`title`, `description`, `priority`) VALUES" .
            "('Tarefa 0001', 'Descrição da Tarefa 0001', 1)," .
            "('Tarefa 0002', 'Descrição da Tarefa 0002', 2)," .
            "('Tarefa 0003', 'Descrição da Tarefa 0003', 3)," .
            "('Tarefa 0004', 'Descrição da Tarefa 0004', 4)," .
            "('Tarefa 0005', 'Descrição da Tarefa 0005', 5)," .
            "('Tarefa 0006', 'Descrição da Tarefa 0006', 6)," .
            "('Tarefa 0007', 'Descrição da Tarefa 0007', 7)," .
            "('Tarefa 0008', 'Descrição da Tarefa 0008', 8)," .
            "('Tarefa 0009', 'Descrição da Tarefa 0009', 9)," .
            "('Tarefa 0010', 'Descrição da Tarefa 0010', 10)," .
            "('Tarefa 0011', 'Descrição da Tarefa 0011', 11)," .
            "('Tarefa 0012', 'Descrição da Tarefa 0012', 12)," .
            "('Tarefa 0013', 'Descrição da Tarefa 0013', 13)," .
            "('Tarefa 0014', 'Descrição da Tarefa 0014', 14)," .
            "('Tarefa 0015', 'Descrição da Tarefa 0015', 15)"
        );
    }

    public function down()
    {
        $this->dropTable('Tasks');
    }
}
