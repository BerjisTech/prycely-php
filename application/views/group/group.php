<script>
    const active_user_id = '<?php echo $this->session->the_person_id; ?>'
    const active_group_id = '<?php echo $group->the_group_id; ?>'
    const active_group_name = '<?php echo $group->the_group_name; ?>'
    const active_group_currency = '<?php echo $group->the_group_currency; ?>'
    const active_flag_id = '<?php echo base_url('assets/images/flags/') . strtolower(substr($group->the_group_currency, 0, 2)); ?>.svg'
    const active_country_id = '<?php echo $this->session->the_person_id; ?>'
    const group = <?php echo json_encode($group); ?>;
    const currencies = <?php echo json_encode($currencies); ?>;
    const transactions = <?php echo json_encode($transactions); ?>;

    let topup_currency = active_group_currency
    let topup_amount = 1000
    $('.tu-amount').val(topup_amount)
</script>

<div class="row">
    <div class="col-sm-8 left-card">
        <div class="row row-tabs visible-xs">
            <span class="switch-tab active" data-hide="switch-transactions">Group</span>
            <span class="switch-tab" data-hide="switch-card">Chats</span>
        </div>
        <div class="switch-transactions">
            <div class="row">
                <div class="group-cover col-xs-12">
                    <h3><?php echo $group->the_group_name; ?></h3>
                    <p class="group-goal"><?php echo $group->the_group_purpose; ?></p>
                </div>
            </div>

            <div class="row group-switched group-overview">
                <div class="col-sm-6 col-xs-12 text-center">
                    <div class="group-balance-preview group50Top">
                        <span class="gp-txt">Total balance</span>
                        <span class="gp-bals"><sup><?php echo $group->the_group_currency; ?></sup><?php echo $group_total; ?></span>
                        <span class="gp-grow"><span class="entypo-up-thin"></span> 4.76%</span>
                        <div class="topUp-withdraw">
                            <span onclick="goToTopUp()">Top Up</span>
                            <span onclick="goToWithdraw()">Withdraw</span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="group-balance-preview">
                        <div id="donut-chart" style="width: 250px"></div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="group-balance-chart">
                        <div class="gbc-top">
                            <span>Transaction Overview</span>
                            <span><span class="entypo-record savings"></span> Savings</span>
                            <span><span class="entypo-record expenses"></span> Expenses</span>
                        </div>
                        <div id="line-chart" class="morrischart" style="height: 300px; position: relative;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4 hidden-xs right-card switch-card chat-card featureSidePanel">
        <p class="transaction-title">Activated Group Features</p>
        <div class="featureCard panelCard">
            <div class="featureDetails">
                <span>Members</span>
                <span>You currently have <?php echo $group_total_members; ?> members</span>
            </div>
            <a href="<?php echo base_url('group/f/' . $group_id . '/members'); ?>" class="goFeature">View</a>
        </div>
        <div class="divider"></div>
        <p class="transaction-title">Inactive Group Features</p>
        <div class="featureCard panelCard">
            <div class="featureDetails">
                <span>Activities</span>
                <span>You currently have <?php echo $group_total_members; ?> members</span>
            </div>
            <a href="<?php echo base_url('group/f/' . $group_id . '/activities'); ?>" class="goFeature">ACTIVATE</a>
        </div>
        <div class="featureCard panelCard">
            <div class="featureDetails">
                <span>Contributions</span>
                <span>You currently have <?php echo $group_total_members; ?> members</span>
            </div>
            <a href="<?php echo base_url('group/f/' . $group_id . '/contributions'); ?>" class="goFeature">ACTIVATE</a>
        </div>
        <div class="featureCard panelCard">
            <div class="featureDetails">
                <span>Projects</span>
                <span>You currently have <?php echo $group_total_members; ?> members</span>
            </div>
            <a href="<?php echo base_url('group/f/' . $group_id . '/projects'); ?>" class="goFeature">ACTIVATE</a>
        </div>
        <div class="featureCard panelCard">
            <div class="featureDetails">
                <span>Income</span>
                <span>You currently have <?php echo $group_total_members; ?> members</span>
            </div>
            <a href="<?php echo base_url('group/f/' . $group_id . '/income'); ?>" class="goFeature">ACTIVATE</a>
        </div>
        <div class="featureCard panelCard">
            <div class="featureDetails">
                <span>Assets</span>
                <span>You currently have <?php echo $group_total_members; ?> members</span>
            </div>
            <a href="<?php echo base_url('group/f/' . $group_id . '/assets'); ?>" class="goFeature">ACTIVATE</a>
        </div>
        <div class="featureCard panelCard">
            <div class="featureDetails">
                <span>Expenses</span>
                <span>You currently have <?php echo $group_total_members; ?> members</span>
            </div>
            <a href="<?php echo base_url('group/f/' . $group_id . '/expenses'); ?>" class="goFeature">ACTIVATE</a>
        </div>
        <div class="featureCard panelCard">
            <div class="featureDetails">
                <span>Loans</span>
                <span>You currently have <?php echo $group_total_members; ?> members</span>
            </div>
            <a href="<?php echo base_url('group/f/' . $group_id . '/loans'); ?>" class="goFeature">ACTIVATE</a>
        </div>
        <div style="height: 50px;"></div>
    </div>

</div>
<script>
    jQuery(document).ready(function($) {

        $(".chat-body").scrollTop(function() {
            return this.scrollHeight;
        });
        var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
        // Line Charts
        var line_chart_demo = $("#line-chart");
        var line_chart = Morris.Line({
            element: 'line-chart',
            data: [
                <?php for ($m = 30; $m > -1; $m--) : ?> {
                        <?php
                        $collection_date = date('dmY', strtotime('-' . $m . ' days'));
                        $deposit = $this->db->query("SELECT SUM(the_transaction_amount) as total FROM `the_transactions` WHERE `the_transaction_group` = $group_id AND `the_transaction_type` = 1 AND `the_transaction_status` != 2 AND date_format(from_unixtime(the_transaction_date), '%d%m%Y') = $collection_date")->row()->total;
                        $withdraw = $this->db->query("SELECT SUM(the_transaction_amount) as total FROM `the_transactions` WHERE `the_transaction_group` = $group_id AND `the_transaction_type` = 2 AND `the_transaction_status` != 2 AND date_format(from_unixtime(the_transaction_date), '%d%m%Y') = $collection_date")->row()->total;
                        ?>
                        y: '<?php echo date('Y-m-d', strtotime('-' . $m . ' days')); ?>',
                            a: <?php if ($deposit == '') echo 0;
                                else echo $deposit; ?>,
                            b: <?php if ($withdraw == '') echo 0;
                                else echo $withdraw; ?>
                    },
                <?php endfor; ?>
            ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Deposits', 'Withdrawals'],
            lineColors: ['#ec3b83', '#E8B51B', '#00acd6'],
            xLabelFormat: function(d) {
                return d.getDate() + ' ' + months[d.getMonth()];
            },
            dateFormat: function(x) {
                let shit = new Date(x);
                var douche = shit.getDate() + ' ' + months[shit.getMonth()];
                return douche;
            },
            resize: true,
            smooth: true,
            pointSize: 0,
            redraw: true
        });
        line_chart_demo.parent().attr('style', '');

        // Donut Chart
        var donut_chart_demo = $("#donut-chart");
        donut_chart_demo.parent().show();
        var donut_chart = Morris.Donut({
            element: 'donut-chart',
            data: [{
                    label: "Member Deposits",
                    value: <?php
                            $deposit = $this->db->query("SELECT SUM(the_transaction_amount) as total FROM `the_transactions` WHERE `the_transaction_group` = $group_id AND `the_transaction_type` = 1 AND `the_transaction_status` != 2")->row()->total;
                            if ($deposit == '') echo 0;
                            else echo $deposit;
                            ?>
                },
                {
                    label: "Project Expenses",
                    value: <?php
                            $withdraw = $this->db->query("SELECT SUM(the_transaction_amount) as total FROM `the_transactions` WHERE `the_transaction_group` = $group_id AND `the_transaction_type` = 2 AND `the_transaction_status` != 2")->row()->total;
                            if ($withdraw == '') echo 0;
                            else echo $withdraw;
                            ?>
                },
                {
                    label: "Withdrawals & Refunds",
                    value: <?php
                            $withdraw = $this->db->query("SELECT SUM(the_transaction_amount) as total FROM `the_transactions` WHERE `the_transaction_group` = $group_id AND `the_transaction_type` = 2 AND `the_transaction_status` != 2")->row()->total;
                            if ($withdraw == '') echo 0;
                            else echo $withdraw;
                            ?>
                }
            ],
            colors: ['#EC3B83', '#00ACD6', '#E8B51B']
        });
        donut_chart_demo.parent().attr('style', '');

    });

    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }
</script>
<?php ob_start(); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/js/datatables/datatables.css'); ?>" id="style-resource-1">
<script src="<?php echo base_url('assets/js/datatables/datatables.js'); ?>" id="script-resource-8"></script>
<script>
    let transTable = jQuery("#transTable");
    transTable.DataTable({
        //'aLengthMenu': [[10, 25, 50, -1], [10, 25, 50, "All"]],
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print'
        ]
    });
    // transTable.closest('.dataTables_wrapper').find('select').select2({
    //     minimumResultsForSearch: -1
    // });
</script>
<?php ob_end_flush(); ?>
<!-- <link rel="stylesheet" href="<?php echo base_url('assets/js/datatables/datatables.css'); ?>" id="style-resource-1">
<script src="<?php echo base_url('assets/js/datatables/datatables.js'); ?>" id="script-resource-8"></script> -->

<?php
if (isset($dontShowChat)) :
?>
    <div class="col-sm-4 hidden-xs right-card switch-card chat-card">
        <div class="chat-block">
            <div class="input-group">
                <span class="input-group-addon entypo-cancel btn-danger" onclick="$('.switch-tab[data-hide=\'switch-transactions\']').trigger('click');"></span>
                <input type="search" placeholder="Search groups by name" class="form-control input-lg" />
                <span class="input-group-addon entypo-search"></span>
            </div>
            <div class="chat-body">
                <div class="chat-bubble chat-out">
                    <span class="chat-img"><img src="<?php echo base_url('assets/images/logo.png'); ?>" /></span>
                    <span class="chat-text">
                        Guys what do you think about my new logo concept
                    </span>
                </div>
                <div class="chat-bubble chat-in">
                    <span class="chat-user">Xi Jin Ping</span>
                    <span class="chat-img"><img src="https://i.imgur.com/5BBABri.gif" /></span>
                    <span class="chat-text">
                        My face better than your logo. ALSO Communisim is fyucha
                    </span>
                </div>
                <div class="chat-bubble chat-out">
                    <span class="chat-text">
                        No, tentacles hentai is clearly the fyucha
                    </span>
                </div>
                <div class="chat-bubble chat-in">
                    <span class="chat-user">Kim Jong Un</span>
                    <span class="chat-img"><img src="https://www.aljazeera.com/wp-content/uploads/2020/01/5725cee6113f42b4ad829dff628f13ce_18.jpeg?resize=770%2C513" /></span>
                    <span class="chat-text">
                        Wassuuuup
                    </span>
                </div>
                <div class="chat-bubble chat-in">
                    <span class="chat-user">Obama</span>
                    <span class="chat-text">
                        C'mon dude, keep your dick in your pants. Your wife just starved to death.
                    </span>
                </div>
                <div class="chat-bubble chat-in">
                    <span class="chat-user">Putin</span>
                    <span class="chat-img"><img src="https://i.makeagif.com/media/5-08-2015/z2CvR6.gif" /></span>
                    <span class="chat-text">
                        Starving wiifffeee,
                    </span>
                </div>
                <div class="chat-bubble chat-in">
                    <span class="chat-user">Putin</span>
                    <span class="chat-text">
                        Wait you people have actual wives!!
                    </span>
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon text-center;"><img src="<?php echo base_url('assets/images/the_emo.png'); ?>" class="the_emoji" /></span>
                <textarea type="search" placeholder="Type something..." class="form-control input-lg"></textarea>
                <span class="input-group-addon entypo-paper-plane"></span>
            </div>
        </div>
    </div>
<?php endif; ?>