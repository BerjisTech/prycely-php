<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="row">
    <div class="col-sm-8">
        <div class="row">
            <div class="col-sm-12">
                <h3>Overview</h3>
                <small>Hi Fraser, some unneccesary greetings text here</small>
                <br /><br />
            </div>
        </div>

        <div class="row slide-icons-parent">
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

        <div class="row row-tabs hidden-lg hidden-sm hidden-md visible-xs-*">
            <span class="switch-tab active" data-hide="switch-transactions">Transactions</span>
            <span class="switch-tab" data-hide="switch-card">Wallets</span>
        </div>

        <div class="row switch-transactions">
            <div class="col-sm-12 transactions-card wallet-panel left-card">
                <p class="transaction-title">Transactions</p>
                <?php foreach ($transactions as $key => $date) : ?>
                    <span><?php echo date('d M, Y', $key); ?></span>
                    <table class="table transaction-table table-hover">
                        <?php foreach ($date as $transaction) : ?>
                            <tr>
                                <td class="t-img">
                                    <p class="transaction-image" style="background: url('https://yt3.ggpht.com/ytc/AAUvwni_LdnpDi-SOIhjp4Kxo2l_yVBoYsfdDCpUM5VDzg=s900-c-k-c0x00ffffff-no-rj');"></p>
                                </td>
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
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="col-sm-4 wallet-panel right-card switch-card hidden-xs">
        <div class="row">
            <div class="col-sm-12 overviewWallets">
                <p class="transaction-title">My Wallets</p>
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
                <span class="more_groups"><a href="<?php echo base_url('wallet'); ?>">View all wallets<span class="fal fa fa-arrow-right"></span></a></span>
            </div>
            <div class="col-sm-12 overviewGroups">
                <p class="transaction-title">My Groups</p>
                <table class="table transaction-table table-hover">
                    <tr class="go_to_group" data-id="group_id">
                        <td class="t-img">
                            <p class="transaction-image" style="background: url('https://www.capitalfm.co.ke/business/files/2017/07/Java-House.jpg');"></p>
                        </td>
                        <td class="transaction-details">
                            <span class="transaction-title">Diani Vacay</span>
                            <span class="transaction-status">Complete</span>
                        </td>
                    </tr>
                    <tr class="go_to_group" data-id="group_id">
                        <td class="t-img">
                            <p class="transaction-image" style="background: url('https://pbs.twimg.com/profile_images/1269971823090978817/748sBk9P_400x400.jpg');"></p>
                        </td>
                        <td class="transaction-details">
                            <span class="transaction-title">Happy Sisters</span>
                            <span class="transaction-status">Processing</span>
                        </td>
                    </tr>
                    <tr class="go_to_group" data-id="group_id">
                        <td class="t-img">
                            <p class="transaction-image" style="background: url('https://storage.googleapis.com/gweb-uniblog-publish-prod/images/logo_google_adsense_color_1x_web_512dp.max-500x500.png');"></p>
                        </td>
                        <td class="transaction-details">
                            <span class="transaction-title">Google Experts</span>
                            <span class="transaction-status">Complete</span>
                        </td>
                    </tr>
                </table>
                <span class="more_groups"><a href="<?php echo base_url('group'); ?>">View all groups<span class="fal fa fa-arrow-right"></span></a></span>
            </div>
            <div class="col-sm-12 overviewCards">
                <p class="transaction-title">Cards</p>
                <div class="cc visa">
                    <svg style="width:100%; opacity: 0.3;">
                        <path d="M 0 0 C 50 50 250 0 300 87"></path>
                    </svg>
                    <div class="container">
                        <div class="type">
                            Debit
                        </div>
                        <div class="circuit">
                            <i class="fa fa-cc-visa fa-2x"></i>
                        </div>
                    </div>
                    <div class="holder">
                        <span class="name">Holder Name</span>
                        <span class="number">************3456</span>
                    </div>
                </div>

                <div class="cc mastercard">
                    <svg style="width:100%; opacity: 0.3;">
                        <path d="M 0 0 C 50 50 250 0 300 87"></path>
                    </svg>
                    <div class="container">
                        <div class="type">
                            Debit
                        </div>
                        <div class="circuit">
                            <i class="fa fa-cc-mastercard fa-2x"></i>
                        </div>
                    </div>
                    <div class="holder">
                        <span class="name">Holder Name</span>
                        <span class="number">************3456</span>
                    </div>
                </div>
                <span class="more_groups"><a href="<?php echo base_url('card'); ?>">View all cards<span class="fal fa fa-arrow-right"></span></a></span>

            </div>
        </div>
    </div>
</div>
<!--?php include('tour.php'); ?-->