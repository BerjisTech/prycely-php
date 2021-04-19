<form class="walletPage">
    <div class="walletTitle">
        Create A Wallet
    </div>

    <input type="hidden" name="the_wallet_currency" />

    <input class="the_wallet_currency" name="the_wallet_currency" placeholder="Search for your currency of choice by name, code or country" />
    <span class="the_wallet_currencies">

    </span>

    <div>
        Open A Wallet in any currency
    </div>
    <?php
    $csrf = array(
        'name' => $this->security->get_csrf_token_name(),
        'hash' => $this->security->get_csrf_hash()
    );
    ?>
    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
    <button class="the_wallet_create_button">LET'S GO <span class="entypo-right-thin"></span></button>
</form>