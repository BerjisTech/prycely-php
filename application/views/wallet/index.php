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
                        <p class="transaction-image" style="background: url('<?php echo base_url('assets/images/flags/') . substr($wallet['the_wallet_currency'], 0, 2); ?>.svg');"></p>
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
        <table class="table transaction-table table-hover">
            <tr>
                <td class="transaction-details">
                    <span class="transaction-title">Netflix</span>
                    <span class="transaction-status">Processing</span>
                </td>
                <td class="transaction-td">
                    <span class="transaction-amount">$ 15</span>
                    <span class="transaction-time">3:49 pm</span>
                </td>
            </tr>
            <tr>
                <td class="transaction-details">
                    <span class="transaction-title">Heroku</span>
                    <span class="transaction-status">Processing</span>
                </td>
                <td class="transaction-td">
                    <span class="transaction-amount">$ 16.99</span>
                    <span class="transaction-time">1:26 pm</span>
                </td>
            </tr>
            <tr>
                <td class="transaction-details">
                    <span class="transaction-title">Shopify Payouts</span>
                    <span class="transaction-status">Complete</span>
                </td>
                <td class="transaction-td">
                    <span class="transaction-amount complete">+ $ 13,000</span>
                    <span class="transaction-time">10:00 am</span>
                </td>
            </tr>
        </table>
    </div>

</div>