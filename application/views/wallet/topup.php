<div class="wallet-switched wallet-topup" style="display: none;">
    <div class="topUpPanel">
        <span class="entypo-left-thin back-text-arrow-buttons wallet-switcher" data-show="wallet-overview"> Back to wallet</span>
        <div class="col-sm-12 panelCard">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <p class="tu-title">Topup your <?php echo $wallet->the_wallet_currency; ?> wallet</p>
                <div class="tu-from-this">
                    <div class="tu-amount-details">
                        <span>Add</span>
                        <input type="number" class="tu-amount" value="1000" />
                    </div>
                    <div class="tu-wallet-details" data-currency="<?php echo $wallet->the_wallet_currency; ?>">
                        <img src="<?php echo base_url('assets/images/flags/') . strtolower(substr($wallet->the_wallet_currency, 0, 2)); ?>.svg" />
                        <span><?php echo $wallet->the_wallet_currency; ?></span>
                        <span class="entypo-down-open" style="color: #F7F7F9;"></span>
                    </div>
                </div>
                <div class="tu-to-this">
                    <span>Paying with</span>
                    <div class="tu-wallet-details twd" onmouseover="currency_dropper('<?php echo $wallet->the_wallet_currency; ?>')">
                        <img src="<?php echo base_url('assets/images/flags/') . strtolower(substr($wallet->the_wallet_currency, 0, 2)); ?>.svg" />
                        <span><?php echo $wallet->the_wallet_currency; ?></span>
                        <span class="entypo-down-open"></span>
                    </div>
                    <div class="tu-currency-drop">
                        <input type="search" name="sCurrency" data-wallet="<?php echo $wallet->the_wallet_currency; ?>" placeholder="Search currency" />
                        <?php foreach ($currencies as $key => $currency) : ?>
                            <div class="currency-select" onclick="change_tu_currency('<?php echo $wallet->the_wallet_currency; ?>','<?php echo $currency['code']; ?>', '<?php echo $currency['currency']; ?>', '<?php echo base_url('assets/images/flags/') . strtolower(substr($currency['code'], 0, 2)); ?>.svg')">
                                <img src="<?php echo base_url('assets/images/flags/') . strtolower(substr($currency['code'], 0, 2)); ?>.svg" />
                                <span><?php echo $currency['currency']; ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="tu-bottom">
                    <div class="tu-bottom-breakdown">
                        <div class="bd bdPay">
                            <span class="breakDownTitle">You will pay</span>
                            <span class="breakDownValue">1,616.41 KES</span>
                        </div>
                        <div class="bd bdFee">
                            <span class="breakDownTitle">Total Fees</span>
                            <span class="breakDownValue">-1,616.41 KES</span>
                        </div>
                        <div class="bd bdConvert">
                            <span class="breakDownTitle">Amount we'll convert</span>
                            <span class="breakDownValue">1,616.41 KES</span>
                        </div>
                        <div class="bd bdRate">
                            <span class="breakDownTitle">Guaranteed rate (for 20 hours)</span>
                            <span class="breakDownValue">0.107</span>
                        </div>
                    </div>
                    <button class="goToPayChoice" onclick="goToPayChoice()">SEND MONEY</button>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</div>