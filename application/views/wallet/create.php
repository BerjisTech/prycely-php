<form class="walletPage">
    <div class="walletTitle">
        Create A Wallet
    </div>

    <input class="the_wallet_currency" />
    <span class="the_wallet_currencies">
        <?php foreach ($map as $key => $country) : ?>
            <span><img src="<?php echo base_url('assets/images/flags/') . $country; ?>" style="width: 50px;"></span>
        <?php endforeach; ?>
    </span>

    <div>
        Open A Wallet in any currency
    </div>
    <button>LET'S GO <span class="entypo-right-thin"></span></button>
</form>