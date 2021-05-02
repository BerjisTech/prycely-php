<div class="row">
	<div class="col-sm-8">
		<p class="">Transfer to your other wallets</p>
		<div class="transfer-from-this">
			<div class="transfer-amount-details">
				<span>You send</span>
				<input type="number" value="1000" />
			</div>
			<div class="transfer-wallet-details">
				<img width="100" src="<?php echo base_url('assets/images/flags/') . strtolower(substr($wallet['the_wallet_currency'], 0, 2)); ?>.svg" />
				<span><?php echo $wallet->the_wallet_currency; ?></span>
			</div>
		</div>
		<div class="transfer-from-this">
			<div class="transfer-amount-details">
				<span>They receive</span>
				<input type="number" value="1000" />
			</div>
			<div class="transfer-wallet-details">
				<img src="<?php echo base_url('assets/images/flags/') . strtolower(substr($wallets[0]['the_wallet_currency'], 0, 2)); ?>.svg" />
				<span>1,000 <?php echo $wallets[0]['the_wallet_currency']; ?></span>
				</span class="entypo-down-open"></span>

				<div>
					<?php foreach ($wallets as $fetch) : ?>
						<img src="<?php echo base_url('assets/images/flags/') . strtolower(substr($fetch['the_wallet_currency'], 0, 2)); ?>.svg" />
						<span>1,000 <?php echo $fetch['the_wallet_currency']; ?></span>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<div class="transfer-bottom">
			<div class="converted-amount">
				<span>Amount we'll convert</span>
				<span>1,000 KES</span>
			</div>
			<div class="conversion-fees">
				<span>Amount we'll convert</span>
				<span>1,000 KES</span>
			</div>
			<button>SEND MONEY</button>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="exchange-rates">
			<div class="exchange-top">
				<span>Exchange Rates</span>
				<span><span class="entypo-record savings"></span> KES</span>
				<span><span class="entypo-record expenses"></span> USD</span>
			</div>
			<div id="line-chart" class="morrischart" style="height: 300px; position: relative;"></div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-6"></div>
	<div class="col-sm-6"></div>
</div>


<script>
	jQuery(document).ready(function($) {

		var days = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
		// Line Charts
		var line_chart_demo = $("#line-chart");
		var line_chart = Morris.Line({
			element: 'line-chart',
			data: [
				<?php
				for ($m = 7; $m > -1; $m--) : ?> {
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
