<table class="table transaction-table table-hover">
    <thead>

    </thead>
    <tbody>
        <?php foreach ($members as $member) : ?>
            <?php $member = (object)$member; ?>
            <tr>
                <td class="transaction-details">
                    #<?php echo $member->the_member_id; ?>
                </td>
                <td class="transaction-details">
                    <span class="transaction-title"><?php echo $member->the_person_first_name . ' ' . $member->the_person_last_name; ?></span>
                </td>
                <td class="transaction-td">
                    <?php echo date('d M, Y', $member->the_date_joined); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>