<?php

declare(strict_type=1);

namespace App\Database\Migrations;

use Override;

class CreateHashtagsTable extends BaseMigration {

    #[Override]
    public function up(): void {

        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'tag' => [
                'type' => 'VARCHAR',
                'constrait' => '100',
                'unique' => true,
            ],
            'created_at' => [
                'type' =>  'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('hashtags');
    }

    #[Override]
    public function down(): void {
        $this->forge->dropTable('hashtags');
    }
}
?>
