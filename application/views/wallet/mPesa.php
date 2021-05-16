<span class="entypo-left-thin ctdp-title" onclick="backToPayChoice()"> Pay another way</span>
<div class="ctpd-custom ctdp-mPesa">
    <span class="payWith">Pay with MPesa</span>
    <span>Enter MPesa phone number</span>
    <input type="number" class="ctdp-mpesa-number" placeholder="254 712345678" value="">
    <label class="label_save_this"><input type="checkbox" name="save_number" class="save_number" />Make this number the primary mpesa number?</label>
    <button onclick="stk($('.ctdp-mpesa-number').val(), $('.save_number').val(), $('.twd').attr('data-currency'), $('.tu-amount').val())" class="ctdp-stk">PAY NOW</button>

    <span class="divider"></span>
    <span class="dividerOr">or</span>

    <span class="payWith">Pay with payBill</span>
    <ul>
        <li>Go to your MPesa STK</li>
        <li>Choose Lipa Na Mpesa</li>
        <li>Select PayBill</li>
        <li>Enter business number <strong>4072015</strong></li>
        <li>Account number your <strong>prycely-<?php echo $this->session->the_person_id; ?></strong></li>
        <li>Enter your MPesa Pin and pay</li>
        <li>Use the transaction code to cinfirm payment below</li>
    </ul>
    <input type="text" placeholder="PDT7DMW2U3" value="">
    <button class="ctdp-paybill">CONFIRM PAYMENT</button>
</div>