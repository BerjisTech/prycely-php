<div class="row">
    <div class="col-sm-8 left-card">
        <div class="row row-tabs visible-xs">
            <span class="switch-tab active" data-hide="switch-transactions">Group</span>
            <span class="switch-tab" data-hide="switch-card">Chats</span>
        </div>
        <div class="switch-transactions">
            <div class="row">
                <div class="group-cover col-xs-12">
                    <h3>Group Name</h3>
                    <p class="group-goal">Group Goal here</p>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12">
                    <div class="group-navi">
                        <div class="group-entypo col-sm-3 col-xs-6 entypo-current" data-show="group-overview">
                            <div class="entypo-inner text-center">
                                <span class="entypo-logout"></span>
                                <span class="hidden-xs">Overview</span>
                            </div>
                        </div>
                        <div class="group-entypo col-sm-3 col-xs-6" data-show="group-transacts">
                            <div class="entypo-inner text-center">
                                <span class="entypo-doc-text"></span>
                                <span class="hidden-xs">Statements</span>
                            </div>
                        </div>
                        <div class="group-entypo col-sm-3 col-xs-6" data-show="group-topup">
                            <div class="entypo-inner text-center">
                                <span class="entypo-publish"></span>
                                <span class="hidden-xs">Top Up</span>
                            </div>
                        </div>
                        <div class="group-entypo col-sm-3 col-xs-6" data-show="group-more">
                            <div class="entypo-inner text-center">
                                <span class="entypo-dot-3"></span>
                                <span class="hidden-xs">More</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row group-switched group-overview">
                <div class="col-sm-6 col-xs-12 text-center">
                    <div class="group-balance-preview">
                        <span class="gp-txt">Total balance</span>
                        <span class="gp-bals"><sup>$</sup>12,319</span>
                        <span class="gp-grow"><span class="entypo-up-thin"></span> 4.76%</span>
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
            <div class="row group-switched group-transacts" style="display: none;">
                <table class="datatable" id="transTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User</th>
                            <th>Amount</th>
                            <th>Type</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 1; $i <= 100; $i++) : ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td>Jina Ya Mtu</td>
                                <td><?php echo mt_rand(900, 99000); ?></td>
                                <td>Deposit,<br /> Withdraw,<br />Loan</td>
                                <td><?php echo date('d M, Y', strtotime('-' . $i - mt_rand(0, 9) . ' days')) ?></td>
                                <td>Complete,<br />Pending,<br />Cancelled</td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
            <div class="row group-switched group-topup" style="display: none;">
                <div class="col-sm-6 col-xs-12 text-center">
                    <div class="group-balance-preview">
                        <form>
                            <div class="input-group">
                                <input class="form-control" name="phone_number" />
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="group-balance-preview">

                    </div>
                </div>
            </div>
            <div class="row group-switched group-more" style="display: none;">
                More acrtions here
            </div>
        </div>
    </div>
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
                <?php
                for ($m = 30; $m > -1; $m -= 6) : ?> {
                        y: '<?php echo date('Y-m-d', strtotime('-' . $m . ' days')); ?>',
                        a: getRandomInt(10000, 1000),
                        b: getRandomInt(10000, 1000)
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
                    value: getRandomInt(10, 50)
                },
                {
                    label: "Project Expenses",
                    value: getRandomInt(10, 50)
                },
                {
                    label: "Withdrawals & Refunds",
                    value: getRandomInt(10, 50)
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