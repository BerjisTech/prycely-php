<div class="row">
    <div class="col-sm-8 left-card">
        <div class="row slide-icons-parent top">
            <div class="col-sm-12 slide-icons">
                <div class="slide-icon">
                    <span><em class="fa fa-exchange"></em></span><span>Transfer</span>
                </div>
                <div class="slide-icon">
                    <span><em class="fa fa-money"></em></span><span>Pay Bill</span>
                </div>
                <div class="slide-icon">
                    <span><em class="fa fa-plus"></em></span><span>Top Up</span>
                </div>
                <div class="slide-icon">
                    <span><em class="fa fa-file-text-o"></em></span><span>Statement</span>
                </div>
                <div class="slide-icon">
                    <span><em class="fa fa-dot-circle-o"></em></span><span>Subscription</span>
                </div>
            </div>
        </div>
        <div class="row top">
            <div class="col-md-8 col-sm-7 col-xs-6 transaction-title">
                My Wallets
            </div>
            <div class="col-md-4 col-sm-5 col-xs-6 text-right">
                <a href="<?php echo base_url('wallet/create'); ?>">Create New Wallet <span class="entypo-plus"></span></a>
            </div>
        </div>
        <table class="table transaction-table table-hover">
            <?php foreach ($wallets as $key => $wallet) : ?>
                <tr onclick="window.location.href = '<?php echo base_url('wallet/view/' . $wallet['the_wallet_id']); ?>'">
                    <td class="t-img">
                        <p class="transaction-image" style="background: url('<?php echo base_url('assets/images/flags/') . strtolower(substr($wallet['the_wallet_currency'], 0, 2)); ?>.svg');"></p>
                    </td>
                    <td class="transaction-details">
                        <span class="transaction-title"><?php echo $wallet['the_wallet_currency']; ?></span>
                        <span class="transaction-status">Opened <?php echo date('d M, Y', $wallet['the_wallet_open_date']); ?></span>
                    </td>
                    <td class="transaction-td">
                        <span class="transaction-amount complete"><?php echo $wallet['the_wallet_currency']; ?> <?php echo $wallet['the_wallet_balance']; ?></span>
                        <span class="transaction-time"><?php echo $wallet['the_wallet_currency']; ?> <?php echo $wallet['the_wallet_balance_pending']; ?> pending</span>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="col-sm-4 hidden-xs right-card">
        <p class="transaction-title">Recent Transactions</p>
        <?php foreach ($transactions as $key => $date) : ?>
            <span><?php echo date('d M, Y', $key); ?></span>
            <table class="table transaction-table table-hover">
                <?php foreach ($date as $transaction) : ?>
                    <tr>
                        <td class="t-img">
                            <p class="transaction-image" style="background: url('https://yt3.ggpht.com/ytc/AAUvwni_LdnpDi-SOIhjp4Kxo2l_yVBoYsfdDCpUM5VDzg=s900-c-k-c0x00ffffff-no-rj');"></p>
                        </td>
                        <td class="transaction-details">
                            <span class="transaction-title">Netflix</span>
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
        <?php endforeach; ?>
    </div>

</div>