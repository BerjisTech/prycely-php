<?php if (gettype($transactions) != 'array') {
    $transactions = json_decode($transactions, TRUE);
} ?>
<div class="row wallet-switched wallet-transacts">
    <div class="col-sm-12">
        <div class="panelCard">
            <?php if (sizeof($transactions) < 1) : ?>
                <span>You have no tracsations yet.</span>
                <span onclick="goToTopUp();" class="back-text-arrow-buttons">Top up wallet</span>
            <?php endif; ?>
            <?php foreach ($transactions as $key => $date) : ?>
                <span>
                    <?php
                    if ($key == date('j\<\s\u\p\>S\<\/\s\u\p\> M', time())) {
                        echo 'Today';
                    } else if ($key == date('j\<\s\u\p\>S\<\/\s\u\p\> M', strtotime("-1 days"))) {
                        echo 'Yesterday';
                    } else {
                        echo $key;
                    }
                    ?>
                </span>
                <table class="table transaction-table table-hover">
                    <?php foreach ($date as $transaction) : ?>
                        <tr>
                            <td class="transaction-details">
                                <span class="transaction-title"><?php echo $transaction['the_transaction_purpose']; ?></span>
                                <?php if ($transaction['the_transaction_status'] == 1) : ?>
                                    <span class="transaction-status complete">
                                        complete
                                    </span>
                                <?php else : ?>
                                    <span class="transaction-status">
                                        failed
                                    </span>
                                <?php endif; ?>
                            </td>
                            <td class="transaction-td">
                                <span class="transaction-amount <?php if ($transaction['the_transaction_type'] == 1) {
                                                                    echo "complete";
                                                                } ?>"><?php echo $transaction['the_transaction_currency'] . ' ' . number_format($transaction['the_transaction_amount']) ?></span>
                                <span class="transaction-time"><?php echo date('h:i:s a', $transaction['the_transaction_date']); ?></span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <hr />
            <?php endforeach; ?>
        </div>
    </div>
</div>