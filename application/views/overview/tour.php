<style>
    .TB-Cover {
        width: 100vw;
        height: 100vw;
        position: absolute;
        background: #ffffff;
        opacity: 0.9;
        top: 0px;
        left: 0px;
        z-index: 20000;
    }

    .tourBox {
        position: absolute;
        background: #ffffff;
        border-radius: 10px;
        padding: 10px;
        z-index: 40000;
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.27);
        backdrop-filter: blur(6.5px);
        -webkit-backdrop-filter: blur(6.5px);
    }

    .TB-Icons {
        margin-top: 110px;
    }

    .slide-icons {
        z-index: 30000;
    }

    .tourStep,
    .tourBody {
        border-bottom: 0.4px solid rgba(3, 3, 3, 0.1);
        padding-bottom: 10px;
        margin-bottom: 10px;
    }

    .tourCTA span:last-child {
        color: #7E8EFE;
        float: right;
    }

    .tourCTA span:first-of-type {
        color: #B5252E;
    }


    @media only screen and (max-width: 767px) {

        .TB-Icons {
            margin-top: 10px;
        }
    }
</style>
<div class="TB-Cover"></div>
<div class="tourBox TB-Icons">
    <div class="tourStep">Quick icons</div>
    <div class="tourBody">Use this to quickly access<br />the essential services</div>
    <div class="tourCTA">
        <span class="entypo-cancel TB-Close"></span>
        <span class="entypo-right-thin TB-Next"></span>
    </div>
</div>
<div class="tourBox TB-Transactions">
    <div class="tourStep">Recent Transactions</div>
    <div class="tourBody">Use this to quickly access<br />the essential services</div>
    <div class="tourCTA">
        <span class="entypo-cancel TB-Close"></span>
        <span class="entypo-right-thin TB-Next"></span>
    </div>
</div>
<div class="tourBox TB-Wallets">
    <div class="tourStep">Quick icons</div>
    <div class="tourBody">Use this to quickly access<br />the essential services</div>
    <div class="tourCTA">
        <span class="entypo-cancel TB-Close"></span>
        <span class="entypo-right-thin TB-Next"></span>
    </div>
</div>
<div class="tourBox TB-Groups">
    <div class="tourStep">Quick icons</div>
    <div class="tourBody">Use this to quickly access<br />the essential services</div>
    <div class="tourCTA">
        <span class="entypo-cancel TB-Close"></span>
        <span class="entypo-right-thin TB-Next"></span>
    </div>
</div>
<div class="tourBox TB-Cards">
    <div class="tourStep">Quick icons</div>
    <div class="tourBody">Use this to quickly access<br />the essential services</div>
    <div class="tourCTA">
        <span class="entypo-cancel TB-Close"></span>
        <span class="entypo-right-thin TB-Next"></span>
    </div>
</div>

<script>
    $('.tourBox').hide()
    $('.TB-Icons').insertAfter($('.slide-icons'))
    $('.TB-Icons').show()

    $('.TB-Icons .TB-Next').on('click', () => {
        $('.TB-Icons').hide()
        $('.slide-icons').css('z-index', '10000')
        $('.transactions-card').css('z-index', '30000')
        $('TB-Transactions').insertBefore($('.transactions-card'))
        $('TB-Transactions').show()
    })
</script>