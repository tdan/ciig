<?php

declare(strict_type=1);

namespace App\Database\Migrations;

use Override;

class CreatePostHashtagsTable extends BaseMigration {

    #[Override]
    public function up(): void {

        $this->forge->addField([
            'post_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'hashtag_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
        ]);

        $this->forge->addPrimaryKey(['post_id', 'hashtag_id']);
        $this->forge->addForeignKey('post_id', 'posts', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('hashtag_id', 'hashtags', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('post_hashtags');
    }

    #[Override]
    public function down(): void {
        $this->forge->dropTable('post_hashtags');
    }
}
?>
