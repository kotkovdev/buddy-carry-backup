<div class="wrap">
    <h1 class="wp-heading-inline">Buddy Carry Backup</h1><a href="/wp-admin/admin.php?page=buddy-carry-backup/new.php" class="page-title-action">Create new</a>
    <hr class="wp-header-end">
    <table class="wp-list-table widefat plugins fixed striped">
        <thead>
        <tr>
            <th scope="col" id="name" class="manage-column column-name column-primary"><strong>Backup name</strong> (click for download)</th>
            <th scope="col" id="description" class="manage-column column-description"><strong>Action</strong></th>
        </tr>
        </thead>
        <tbody id="the-list">
        <?php foreach ($data['backups'] as $backup) : ?>
            <tr class="inactive" data-slug="akismet" data-plugin="akismet/akismet.php">
                <td class="plugin-title column-primary">
                    <strong><a href="<?php echo BACKUPS_PATH . DIRECTORY_SEPARATOR . $backup; ?>"><?php print($backup); ?></a></strong>
                </td>
                <td class="plugin-title column-primary">
                    <a href="#">Restore</a> or <a href="#" class="delete">Remove</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

