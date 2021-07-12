<?php if (count($invites) > 0) : ?>
    <table class="table transaction-table table-hover">
        <thead>
            <tr>
                <th>Invitation</th>
                <th>Created/Last Sent</th>
                <th>Expires</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($invites as $invite) : ?>
                <?php
                $invite = (object) $invite;
                ?>
                <tr>
                    <td><?php echo $invite->sent_to; ?></td>
                    <td><?php echo $invite->last_sent; ?></td>
                    <td><?php echo $invite->expire_date; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>