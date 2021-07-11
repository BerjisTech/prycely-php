<div class="row wallet-switched wallet-overview">
    <div class="col-sm-8">
        <div class="panelCard">
            <p class="transfer-title">Transfer to your other wallets</p>
            <div class="transfer-from-this">
                <div class="transfer-amount-details">
                    <span>You send</span>
                    <input type="number" value="1000" />
                </div>
                <div class="transfer-wallet-details">
                    <img src="<?php echo base_url('assets/images/flags/') . strtolower(substr($wallet->the_wallet_currency, 0, 2)); ?>.svg" />
                    <span><?php echo $wallet->the_wallet_currency; ?></span>
                    <span class="entypo-down-open" style="color: #F7F7F9;"></span>
                </div>
            </div>
            <div class="transfer-to-this">
                <div class="transfer-amount-details">
                    <span>They receive</span>
                    <input type="number" value="1000" />
                </div>
                <div class="transfer-wallet-details">
                    <img src="<?php echo base_url('assets/images/flags/') . strtolower(substr($wallets[0]['the_wallet_currency'], 0, 2)); ?>.svg" />
                    <span><?php echo $wallets[0]['the_wallet_currency']; ?></span>
                    <span class="entypo-down-open" <?php if (count($wallets) == 1) {
                                                        echo 'style="color: #F7F7F9;"';
                                                    } ?>></span>
                </div>
                <?php if (count($wallets) > 1) : ?>
                    <div class="currency-drop">
                        <?php foreach ($wallets as $key => $other_wallet) : ?>
                            <?php if ($other_wallet['the_wallet_currency'] != $wallet->the_wallet_currency || $key > 0) : ?>
                                <div class="currency-select" onclick="change_detail_currency('<?php echo $other_wallet['the_wallet_currency']; ?>', '<?php echo base_url('assets/images/flags/') . strtolower(substr($other_wallet['the_wallet_currency'], 0, 2)); ?>.svg')">
                                    <img src="<?php echo base_url('assets/images/flags/') . strtolower(substr($other_wallet['the_wallet_currency'], 0, 2)); ?>.svg" />
                                    <span><?php echo $other_wallet['the_wallet_currency']; ?></span>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="transfer-bottom">
                <div class="converted-amount">
                    <span>Amount we'll convert</span>
                    <span>1,000 KES</span>
                </div>
                <div class="conversion-fees">
                    <span>Total fees</span>
                    <span>1,000 KES</span>
                </div>
                <button>SEND MONEY</button>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="walletBalanceCard">
            <span class="gp-txt">Total balance</span>
            <span class="gp-bals"> <?php echo '<sup>' . $wallet->the_wallet_currency . '</sup> ' . $wallet->the_wallet_balance; ?></span>
            <span class="gp-grow"><span class="entypo-up-thin"></span> 4.76%</span>
            <div class="topUp-withdraw">
                <span onclick="goToTopUp()">Top Up</span>
                <span>Withdraw</span>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="panelCard">
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
    <div class="col-sm-8">
        <div class="panelCard">
            <div class="exchange-rates">
                <div class="exchange-top">
                    <span>Transaction Overview</span>
                    <span><span class="entypo-record in"></span> Money in</span>
                    <span><span class="entypo-record out"></span> Money out</span>
                </div>
                <div id="line-chart" class="morrischart" style="height: 450px; position: relative;"></div>
            </div>
        </div>
    </div>
</div>