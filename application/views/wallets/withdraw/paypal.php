<div class="col-12 panelCard">
    <div class="col-sm-3"></div>
    <div class="col-sm-6 withdrawPanel">
        <span class="entypo-left-thin ctpd-title back-text-arrow-buttons" onclick="goToWithdraw()"> Back</span>
        <p>You're about to withdraw from your wallet</p>
        <form class="withdrawForm mpesaWithdrawForm">
            <span>How much do you want to withdraw?</span>
            <input type="number" value="0.00" />
            <span>Recepient paypal email</span>
            <input type="email" placeholder="" />
            <div class="withdrawProceedCancel">
                <span class="back-text-arrow-buttons" onclick="window.location.reload()"> Cancel</span>
                <button class="withdrawButton" type="submit">WITHDRAW</button>
            </div>
        </form>
    </div>
    <div class="col-sm-3">
    </div>
</div>