<script>
    $('.tu-wallet-details').attr('data-currency', active_group_currency)
    $('.tu-title').html(`Topup your ${active_group_currency} wallet`)
    $('.tu-wallet-details img').attr('src', active_flag_id)
    $('.tu-wallet-details span:first').html(active_group_currency)
    $('.twd').attr('onmouseover', `currency_dropper('${active_group_currency}')`)
    $('.twd img').attr('src', active_flag_id)
    $('.twd span:first').html(active_group_currency)
    $('.sCurrency').attr('data-wallet', `${active_group_currency}`)
    $('.currency-select').remove()
    $(currencies).each((key, currency) => {
        let currency_name = currency.currency;
        let currency_code = currency.code;
        let currency_image = currency_code.substring(0, 2).toLowerCase()

        $('.tu-currency-drop').append(`
                        <div class="currency-select" onclick="change_tu_currency('${active_group_currency}','${currency_code}', '${currency_name}', '${base_url}assets/images/flags/${currency_image}.svg')">
                            <img src="${base_url}assets/images/flags/${currency_image}.svg" />
                            <span>${currency_name}</span>
                        </div>
                        `)
    })
</script>

<div class="wallet-switched wallet-topup">
    <div class="topUpPanel">
        <span class="entypo-left-thin back-text-arrow-buttons wallet-switcher" data-show="wallet-overview" onclick="window.location.reload()"> Back to wallet</span>
        <div class="col-12 panelCard">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <p class="tu-title">Topup your group wallet</p>
                <div class="tu-from-this">
                    <div class="tu-amount-details">
                        <span>Add</span>
                        <input type="number" class="tu-amount" oninput="get_conversion(active_group_currency, $('.twd').attr('data-currency'),$(this).val())" onchange="topup_amount = $(this).val()" value="1000" />
                    </div>
                    <div class="tu-wallet-details" data-currency="">
                        <img src="" />
                        <span></span>
                        <span class="entypo-down-open" style="color: #F7F7F9;"></span>
                    </div>
                </div>
                <div class="tu-to-this">
                    <span>Paying with</span>
                    <div class="tu-wallet-details twd" onmouseover="">
                        <img src="" />
                        <span></span>
                        <span class="entypo-down-open"></span>
                    </div>
                    <div class="tu-currency-drop">
                        <input type="search" name="sCurrency" data-wallet="" placeholder="Search currency" />
                    </div>
                </div>
                <div class="tu-bottom">
                    <div class="tu-bottom-breakdown">
                        <div class="bd bdPay">
                            <span class="breakDownTitle">You will pay</span>
                            <span class="breakDownValue">0</span>
                        </div>
                        <div class="bd bdFee">
                            <span class="breakDownTitle">Total Fees</span>
                            <span class="breakDownValue">-0</span>
                        </div>
                        <div class="bd bdConvert">
                            <span class="breakDownTitle">Amount we'll convert</span>
                            <span class="breakDownValue">0</span>
                        </div>
                        <div class="bd bdRate">
                            <span class="breakDownTitle">Guaranteed rate (for 20 hours)</span>
                            <span class="breakDownValue">0</span>
                        </div>
                    </div>
                    <button class="goToPayChoice" onclick="goToPayChoice()">SEND MONEY</button>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</div>