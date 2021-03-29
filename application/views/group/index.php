<div class="row">
    <div class="col-sm-8 left-card">
        <div class="row slide-icons-parent top">
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
            <span class="switch-tab active" data-hide="switch-transactions">Groups</span>
            <span class="switch-tab" data-hide="switch-card">Invites</span>
        </div>
        <div class="switch-transactions">
            <div class="row top">
                <div class="col-md-8 col-sm-7 col-xs-6 transaction-title">
                    My Groups
                </div>
                <div class="col-md-4 col-sm-5 col-xs-6 text-right">
                    <a href="<?php echo base_url('group/create'); ?>">Create New Group <span class="entypo-plus"></span></a>
                </div>
            </div>
            <table class="table transaction-table table-hover">
                <tr class="go_to_group" data-id="group_id">
                    <td class="t-img">
                        <p class="transaction-image" style="background: url('https://upload.wikimedia.org/wikipedia/commons/c/c7/Diani_Beach_Sunrise_Kenya.jpg');"></p>
                    </td>
                    <td class="transaction-details">
                        <span class="transaction-title">Diani Vacay</span>
                        <span class="transaction-status">KES</span>
                    </td>
                    <td class="transaction-td">
                        <span class="transaction-amount complete">KES 230,000 (Total)</span>
                        <span class="transaction-time">KES 2,300 (me)</span>
                    </td>
                </tr>
                <tr class="go_to_group" data-id="group_id">
                    <td class="t-img">
                        <p class="transaction-image" style="background: url('<?php echo base_url('assets/images/flags/jm.svg'); ?>');"></p>
                    </td>
                    <td class="transaction-details">
                        <span class="transaction-title">MonMax Investors</span>
                        <span class="transaction-status">USD</span>
                    </td>
                    <td class="transaction-td">
                        <span class="transaction-amount complete">$ 23,000 (total)</span>
                        <span class="transaction-time">$ 200 (me)</span>
                    </td>
                </tr>
                <tr class="go_to_group" data-id="group_id">
                    <td class="t-img">
                        <p class="transaction-image" style="background: url('https://cdn-us1.hash.ai/site/stonks.jpg');"></p>
                    </td>
                    <td class="transaction-details">
                        <span class="transaction-title">GameStonks Autists</span>
                        <span class="transaction-status">GBP</span>
                    </td>
                    <td class="transaction-td">
                        <span class="transaction-amount complete">GBP 23.890 (total)</span>
                        <span class="transaction-time">GBP 500 (me)</span>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-sm-4 hidden-xs right-card switch-card">
        <div class="input-group">
            <input type="search" placeholder="Search groups by name" class="form-control input-lg" />
            <span class="input-group-addon entypo-search"></span>
        </div>
        <p class="transaction-title">My Invites</p>
        <table class="table transaction-table table-hover">
            <tr>
                <td class="t-img">
                    <p class="transaction-image" style="background: url('https://www.capitalfm.co.ke/business/files/2017/07/Java-House.jpg');"></p>
                </td>
                <td class="transaction-details">
                    <span class="transaction-title">Diani Vacay</span>
                    <span class="transaction-status">Invited by Irene</span>
                </td>
                <td class="transaction-details">
                    <span class="transaction-title complete">Join</span>
                    <span class="transaction-status text-danger">Reject</span>
                </td>
            </tr>
            <tr>
                <td class="t-img">
                    <p class="transaction-image" style="background: url('https://pbs.twimg.com/profile_images/1269971823090978817/748sBk9P_400x400.jpg');"></p>
                </td>
                <td class="transaction-details">
                    <span class="transaction-title">Happy Sisters</span>
                    <span class="transaction-status">Invited by lord_Sombo</span>
                </td>
                <td class="transaction-details">
                    <span class="transaction-title complete">Join</span>
                    <span class="transaction-status text-danger">Reject</span>
                </td>
            </tr>
            <tr>
                <td class="t-img">
                    <p class="transaction-image" style="background: url('https://storage.googleapis.com/gweb-uniblog-publish-prod/images/logo_google_adsense_color_1x_web_512dp.max-500x500.png');"></p>
                </td>
                <td class="transaction-details">
                    <span class="transaction-title">Google Experts</span>
                    <span class="transaction-status">Invited by Tanveer</span>
                </td>
                <td class="transaction-details">
                    <span class="transaction-title complete">Join</span>
                    <span class="transaction-status text-danger">Reject</span>
                </td>
            </tr>
        </table>
    </div>

</div>