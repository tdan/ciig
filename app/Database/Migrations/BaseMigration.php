<?php
declare(strict_type=1);

namespace App\Database\Migrations;

use CodeIgniter\Database\BaseConnection;
use CodeIgniter\Database\Migration;
use Override;

class BaseMigration extends Migration {
    /**
     * Database Connection instance
     *
     * @var BaseConnection
     */
    protected $db;

    #[Override]
    public function up(): void {}

    #[Override]
    public function down(): void {}
}
?>
