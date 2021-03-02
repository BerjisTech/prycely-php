<div class="row">
    <div class="col-sm-8 left-card">
        <div class="row slide-icons-parent top">
            <div class="col-sm-12 slide-icons">
                <div class="slide-icon">
                    <p>
                        <span class="group-user-image" style="background: url('<?php echo base_url('assets/images/flags/ke.svg'); ?>');"></span>
                    </p>
                </div>
                <div class="slide-icon">
                    <p>
                        <span class="group-user-image" style="background: url('<?php echo base_url('assets/images/flags/ke.svg'); ?>');"></span>
                    </p>
                </div>
                <div class="slide-icon">
                    <p>
                        <span class="group-user-image" style="background: url('<?php echo base_url('assets/images/flags/ke.svg'); ?>');"></span>
                    </p>
                </div>
                <div class="slide-icon">
                    <p>
                        <span class="group-user-image" style="background: url('<?php echo base_url('assets/images/flags/ke.svg'); ?>');"></span>
                    </p>
                </div>
                <div class="slide-icon">
                    <p>
                        <span class="group-user-image" style="background: url('<?php echo base_url('assets/images/flags/ke.svg'); ?>');"></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="row row-tabs hidden-lg hidden-sm hidden-md visible-xs-*">
            <span class="switch-tab active" data-hide="switch-transactions">Group</span>
            <span class="switch-tab" data-hide="switch-card">Chats</span>
        </div>
    </div>
    <div class="col-sm-4 hidden-xs right-card switch-card chat-card">

        <div class="input-group">
            <span class="visible-xs input-group-addon entypo-cancel btn-danger" onclick="$(this).parent().parent().addClass('hidden-xs');$('.switch-tab[data-hide=\'switch-transactions\']').trigger('click');"></span>
            <input type="search" placeholder="Search groups by name" class="form-control input-lg" />
            <span class="input-group-addon entypo-search"></span>
        </div>
    </div>

</div>