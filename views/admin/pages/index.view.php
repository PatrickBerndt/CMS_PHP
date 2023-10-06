<h1>Admin: Seiten verwalten</h1>

<?php if(!empty($pages)): ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>SLUG</th>
                <th>TITEL</th>
                <th>AKTIONEN</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($pages AS $page): ?>
                <tr>
                    <td><?php echo e($page->id)?></td>
                    <td><?php echo e($page->slug)?></td>
                    <td><?php echo e($page->title)?></td>
                    <td>Edit</td>
                </tr>
            <?php endforeach; ?>   
        </tbody>

    </table>
<?php else: ?>
    <p>Es wuren noch keine Seiten erstellt.</p>
<?php endif; ?>