<div class="side_bar">
    <a href="" class="user_icon"></a>
    <a href="<?php if ($page_name != 'overview') {
                    echo base_url('overview');
                } else {
                    echo '#';
                } ?>" class="nav_links"><span class="fa fa-home"></span><span class="nav_link_text">Home</span></a>
    <a href="<?php if ($page_name != 'wallet') {
                    echo base_url('wallet');
                } else {
                    echo '#';
                } ?>" class="nav_links"><span class="fa fa-money"></span><span class="nav_link_text">Wallets</span></a>
    <a href="<?php if ($page_name != 'group') {
                    echo base_url('group');
                } else {
                    echo '#';
                } ?>" class="nav_links"><span class="fa fa-users"></span><span class="nav_link_text">Groups</span></a>
    <a href="<?php if ($page_name != 'settings') {
                    echo base_url('settings');
                } else {
                    echo '#';
                } ?>" class="nav_links"><span class="fa fa-cog fa-spin"></span><span class="nav_link_text">Settings</span></a>
</div>