<?php $this->extend('templates/main_layout') ?>

<?php $this->section('main') ?>

<?php $this->include('parts/profile_header.php'); ?>

<?php if (empty($posts)): ?>
    <div class="text-center text-gray-500 dark:text-gray-400">
        <h2 class="text xl font-bold">No posts to display yet.</h2>
        <p>Share your first photo to get started!</p>
        <a href="<?= base_url('upload'); ?>" class="btn my-4">Upload</a>
    </div>
<?php else: ?>
    <?php foreach ($posts as $post): ?>
        <div style="border: 1px solid #ccc; padding: 15px; margin-bottom: 20px;">
            <h3><?= esc($post['description']) ?></h3>
            <?php if ($post['file_type'] === 'image'): ?>
                <img src="<?= base_url('uploads/' . esc($post['file_path'])) ?>" alt="Post Image" style="max-width: 100%; height: auto;">
            <?php elseif ($post['file_type'] === 'video'): ?>
                <video controls style="max-width: 100%; height: auto;">
                    <source src="<?= base_url('uploads/' . esc($post['file_path'])) ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            <?php endif; ?>
            <p>Posted on <?= esc($post['created_at']) ?></p>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

<?php $this->endSection(); ?>
