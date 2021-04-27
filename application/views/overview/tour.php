<style>
    .TB-Cover {
        width: 100vw;
        height: 100vh;
        position: fixed;
        background: #ffffff;
        opacity: 0.9;
        top: 0px;
        left: 0px;
    }

    .tourBox {
        background: #ffffff;
        border-radius: 10px;
        padding: 10px;
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.27);
        backdrop-filter: blur(6.5px);
        z-index: 300;
    }

    .TB-Icons {
        margin-top: 110px;
        position: absolute;
    }

    .TB-Transactions {
        margin-top: -120px;
        position: absolute;
    }

    .TB-Wallets,
    .TB-Groups,
    .TB-Cards {
        margin-left: -230px;
        margin-top: 50px;
        position: absolute;
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
        cursor: pointer;
    }

    .tourCTA span:first-of-type {
        color: #B5252E;
        cursor: pointer;
    }

    .tourCTA span:hover {
        font-size: 17px;
    }


    @media only screen and (max-width: 767px) {

        .TB-Icons {
            margin-top: 10px;
        }
    }
</style>

<script>
    const finishTour = () => {
        $('.overviewCards').css('box-shadow', 'none')
        $('.overviewGroups').css('box-shadow', 'none')
        $('.overviewWallets').css('box-shadow', 'none')
        $('.transactions-card').css('box-shadow', 'none')
        $('.slide-icons').css('box-shadow', '0 0 32px 0 rgba( 31, 38, 135, 0.37)')

        $('.TB-Icons').remove()
        $('.TB-Transactions').remove()
        $('.TB-Wallets').remove()
        $('.TB-Groups').remove()
        $('.TB-Cards').remove()
    }

    const showCards = () => {
        $('.overviewGroups').css('box-shadow', 'none')
        $('.overviewCards').css('box-shadow', 'inset 0px 0px 10px #7D2AE8')
        $('.TB-Groups').hide()

        $(
            '<div class="tourBox TB-Cards">' +
            '<div class="tourStep">Your Cards</div>' +
            '<div class="tourBody">Use this to quickly access<br />the essential services</div>' +
            '<div class="tourCTA">' +
            '<span class="TB-Next" onclick="finishTour()">Finish</span>' +
            '</div>' +
            '</div>'
        ).insertBefore($('.overviewCards .transaction-title:first'))

        $('html, body').animate({
            scrollTop: $(".overviewCards").offset().top
        }, 500);
    }

    const showGroups = () => {
        $('.overviewWallets').css('box-shadow', 'none')
        $('.overviewGroups').css('box-shadow', 'inset 0px 0px 10px #7D2AE8')
        $('.TB-Wallets').hide()

        $(
            '<div class="tourBox TB-Groups">' +
            '<div class="tourStep">Your Groups</div>' +
            '<div class="tourBody">Use this to quickly access<br />the essential services</div>' +
            '<div class="tourCTA">' +
            '<span class="TB-Close" onclick="finishTour()">close</span>' +
            '<span class="entypo-right-thin TB-Next" onclick="showCards()"></span>' +
            '</div>' +
            '</div>'
        ).insertBefore($('.overviewGroups .transaction-title:first'))

        $('html, body').animate({
            scrollTop: $(".overviewGroups").offset().top
        }, 500);
    }

    const showWallets = () => {
        $('.TB-Transactions').hide()
        $('.transactions-card').css('box-shadow', 'none')
        $('.overviewWallets').css('box-shadow', 'inset 0px 0px 10px #7D2AE8')

        $(
            '<div class="tourBox TB-Wallets">' +
            '<div class="tourStep">Your Wallets</div>' +
            '<div class="tourBody">Use this to quickly access<br />the essential services</div>' +
            '<div class="tourCTA">' +
            '<span class="TB-Close" onclick="finishTour()">close</span>' +
            '<span class="entypo-right-thin TB-Next" onclick="showGroups()"></span>' +
            '</div>' +
            '</div>'
        ).insertAfter($('.overviewWallets'))
    }

    const showTrans = () => {
        $('.TB-Icons').hide()
        $('.slide-icons').css('box-shadow', '0 0 32px 0 rgba( 31, 38, 135, 0.37)')
        $('.transactions-card').css('box-shadow', 'inset 0px 0px 10px #7D2AE8')

        $(
            '<div class="tourBox TB-Transactions">' +
            '<div class="tourStep">Recent Transactions</div>' +
            '<div class="tourBody">Use this to quickly access<br />the essential services</div>' +
            '<div class="tourCTA">' +
            '<span class="TB-Close" onclick="finishTour()">close</span>' +
            '<span class="entypo-right-thin TB-Next" onclick="showWallets()"></span>' +
            '</div>' +
            '</div>'
        ).insertBefore($('.switch-transactions'))
    }

    $(
        '<div class="tourBox TB-Icons">' +
        '<div class="tourStep">Quick icons</div>' +
        '<div class="tourBody">Use this to quickly access<br />the essential services</div>' +
        '<div class="tourCTA">' +
        '<span class="TB-Close" onclick="finishTour()">close</span>' +
        '<span class="entypo-right-thin TB-Next" onclick="showTrans()"></span>' +
        '</div>' +
        '</div>'
    ).insertAfter($('.slide-icons'))
    $('.slide-icons').css('box-shadow', 'inset 0px 0px 10px #7D2AE8')
</script>