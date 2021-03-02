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
            <tr>
                <td class="t-img">
                    <p class="transaction-image" style="background: url('<?php echo base_url('assets/images/flags/ke.svg'); ?>');"></p>
                </td>
                <td class="transaction-details">
                    <span class="transaction-title">KES - Local</span>
                    <span class="transaction-status">Recipient and Sender</span>
                </td>
                <td class="transaction-td">
                    <span class="transaction-amount complete">KES 230,000</span>
                    <span class="transaction-time">KES 2,300</span>
                </td>
            </tr>
            <tr>
                <td class="t-img">
                    <p class="transaction-image" style="background: url('<?php echo base_url('assets/images/flags/us.svg'); ?>');"></p>
                </td>
                <td class="transaction-details">
                    <span class="transaction-title">USD - Foreign</span>
                    <span class="transaction-status">Recipient</span>
                </td>
                <td class="transaction-td">
                    <span class="transaction-amount complete">$ 23,000</span>
                    <span class="transaction-time">$ 200 pending</span>
                </td>
            </tr>
            <tr>
                <td class="t-img">
                    <p class="transaction-image" style="background: url('<?php echo base_url('assets/images/flags/gb.svg'); ?>');"></p>
                </td>
                <td class="transaction-details">
                    <span class="transaction-title">GBP - Foreign</span>
                    <span class="transaction-status">Recipient</span>
                </td>
                <td class="transaction-td">
                    <span class="transaction-amount complete">GBP 23</span>
                    <span class="transaction-time">GBP 500 pending</span>
                </td>
            </tr>
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