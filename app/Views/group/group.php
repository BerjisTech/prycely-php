<div class="group-page row">
    <div class="col-sm-8 left-card">
        <div class="row row-tabs hidden-lg hidden-sm hidden-md visible-xs-*">
            <span class="switch-tab active" data-hide="switch-transactions">Group</span>
            <span class="switch-tab" data-hide="switch-card">Chats</span>
        </div>
        <div class="row switch-transactions">
            <div class="group-cover col-xs-12">
                <h3>Group Name</h3>
                <p class="group-goal">Group Goal here</p>
            </div>


            <div class="group-entypo col-sm-3 col-xs-6">
                <div class="entypo-inner text-center">
                    <span class="entypo-logout"></span>
                    <span class="hidden-xs">Send Money</span>
                </div>
            </div>
            <div class="group-entypo col-sm-3 col-xs-6">
                <div class="entypo-inner text-center">
                    <span class="entypo-doc-text"></span>
                    <span class="hidden-xs">Statements</span>
                </div>
            </div>
            <div class="group-entypo col-sm-3 col-xs-6">
                <div class="entypo-inner text-center">
                    <span class="entypo-publish"></span>
                    <span class="hidden-xs">Top Up</span>
                </div>
            </div>
            <div class="group-entypo col-sm-3 col-xs-6">
                <div class="entypo-inner text-center">
                    <span class="entypo-dot-3"></span>
                    <span class="hidden-xs">More</span>
                </div>
            </div>
            <div class="col-xs-12 clearfix"></div>
            <div class="col-sm-6 text-center">
                <div class="group-balance-preview">
                    <span class="gp-txt">Total balance</span>
                    <span class="gp-bals"><sup>$</sup>12,319</span>
                    <span class="gp-grow"><span class="entypo-arrow-up"></span> 4.76%</span>
                </div>
            </div>
            <div class="col-sm-6"></div>

            <div class="col-xs-12"></div>
        </div>
    </div>
    <div class="col-sm-4 hidden-xs right-card switch-card chat-card">
        <div class="chat-block">
            <div class="input-group">
                <span class="input-group-addon entypo-cancel btn-danger" onclick="$('.switch-tab[data-hide=\'switch-transactions\']').trigger('click');"></span>
                <input type="search" placeholder="Search groups by name" class="form-control input-lg" />
                <span class="input-group-addon entypo-search"></span>
            </div>
            <div class="chat-body"></div>
            <div class="input-group">
                <span class="input-group-addon text-center;"><img src="<?php echo base_url('assets/images/the_emo.png'); ?>" class="the_emoji" /></span>
                <textarea type="search" placeholder="Search groups by name" class="form-control input-lg"></textarea>
                <span class="input-group-addon entypo-paper-plane"></span>
            </div>
        </div>
    </div>

</div>