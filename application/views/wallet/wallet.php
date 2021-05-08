<div class="row">
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
		<div class="col-sm-8">
			<div class="panelCard">
				<p class="transfer-title">Transfer to your other wallets</p>
				<div class="transfer-from-this">
					<div class="transfer-amount-details">
						<span>You send</span>
						<input type="number" value="1000" />
					</div>
					<div class="transfer-wallet-details">
						<img src="<?php echo base_url('assets/images/flags/') . strtolower(substr($wallet->the_wallet_currency, 0, 2)); ?>.svg" />
						<span><?php echo $wallet->the_wallet_currency; ?></span>
						<span class="entypo-down-open" style="color: #F7F7F9;"></span>
					</div>
				</div>
				<div class="transfer-to-this">
					<div class="transfer-amount-details">
						<span>They receive</span>
						<input type="number" value="1000" />
					</div>
					<div class="transfer-wallet-details">
						<img src="<?php echo base_url('assets/images/flags/') . strtolower(substr($currencies[0]['code'], 0, 2)); ?>.svg" />
						<span><?php echo $currencies[0]['code']; ?></span>
						<span class="entypo-down-open"></span>
					</div>
					<div class="currency-drop">
						<?php foreach ($currencies as $key => $currency) : ?>
							<?php if ($key > 0) : ?>
								<div class="currency-select" onclick="change_detail_currency('<?php echo $currency['code']; ?>', '<?php echo base_url('assets/images/flags/') . strtolower(substr($currency['code'], 0, 2)); ?>.svg')">
									<img src="<?php echo base_url('assets/images/flags/') . strtolower(substr($currency['code'], 0, 2)); ?>.svg" />
									<span><?php echo $currency['code']; ?></span>
								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="transfer-bottom">
					<div class="converted-amount">
						<span>Amount we'll convert</span>
						<span>1,000 KES</span>
					</div>
					<div class="conversion-fees">
						<span>Total fees</span>
						<span>1,000 KES</span>
					</div>
					<button>SEND MONEY</button>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="walletBalanceCard">
				<span class="gp-txt">Total balance</span>
				<span class="gp-bals"> <?php echo '<sup>' . $wallet->the_wallet_currency . '</sup> ' . $wallet->the_wallet_balance; ?></span>
				<span class="gp-grow"><span class="entypo-up-thin"></span> 4.76%</span>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="panelCard">
				<?php foreach ($transactions as $key => $date) : ?>
					<span>
						<?php
						if ($key == date('j\<\s\u\p\>S\<\/\s\u\p\> M', time())) {
							echo 'Today';
						} else if ($key == date('j\<\s\u\p\>S\<\/\s\u\p\> M', strtotime("-1 days"))) {
							echo 'Yesterday';
						} else {
							echo $key;
						}
						?>
					</span>
					<table class="table transaction-table table-hover">
						<?php foreach ($date as $transaction) : ?>
							<tr>
								<td class="transaction-details">
									<span class="transaction-title"><?php echo $transaction['the_transaction_purpose']; ?></span>
									<?php if ($transaction['the_transaction_status'] == 1) : ?>
										<span class="transaction-status complete">
											complete
										</span>
									<?php else : ?>
										<span class="transaction-status">
											failed
										</span>
									<?php endif; ?>
								</td>
								<td class="transaction-td">
									<span class="transaction-amount <?php if ($transaction['the_transaction_type'] == 1) {
																		echo "complete";
																	} ?>"><?php echo $transaction['the_transaction_currency'] . ' ' . number_format($transaction['the_transaction_amount']) ?></span>
									<span class="transaction-time"><?php echo date('h:i:s a', $transaction['the_transaction_date']); ?></span>
								</td>
							</tr>
						<?php endforeach; ?>
					</table>
					<hr />
				<?php endforeach; ?>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="panelCard">
				<div class="exchange-rates">
					<div class="exchange-top">
						<span>Transaction Overview</span>
						<span><span class="entypo-record in"></span> Money in</span>
						<span><span class="entypo-record out"></span> Money out</span>
					</div>
					<div id="line-chart" class="morrischart" style="height: 300px; position: relative;"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="row group-switched group-transacts" style="display: none;">
		<div class="panelCard">
			<?php foreach ($transactions as $key => $date) : ?>
				<span>
					<?php
					if ($key == date('j\<\s\u\p\>S\<\/\s\u\p\> M', time())) {
						echo 'Today';
					} else if ($key == date('j\<\s\u\p\>S\<\/\s\u\p\> M', strtotime("-1 days"))) {
						echo 'Yesterday';
					} else {
						echo $key;
					}
					?>
				</span>
				<table class="table transaction-table table-hover">
					<?php foreach ($date as $transaction) : ?>
						<tr>
							<td class="transaction-details">
								<span class="transaction-title"><?php echo $transaction['the_transaction_purpose']; ?></span>
								<?php if ($transaction['the_transaction_status'] == 1) : ?>
									<span class="transaction-status complete">
										complete
									</span>
								<?php else : ?>
									<span class="transaction-status">
										failed
									</span>
								<?php endif; ?>
							</td>
							<td class="transaction-td">
								<span class="transaction-amount <?php if ($transaction['the_transaction_type'] == 1) {
																	echo "complete";
																} ?>"><?php echo $transaction['the_transaction_currency'] . ' ' . number_format($transaction['the_transaction_amount']) ?></span>
								<span class="transaction-time"><?php echo date('h:i:s a', $transaction['the_transaction_date']); ?></span>
							</td>
						</tr>
					<?php endforeach; ?>
				</table>
				<hr />
			<?php endforeach; ?>
		</div>
	</div>
	<div class="row group-switched group-topup" style="display: none;">
		<div class="col-sm-6 col-xs-12 text-center">
			<div class="group-balance-preview">
				<form>
					<div class="input-group">
						<input class="form-control" name="phone_number" />
						<?php
						$csrf = array(
							'name' => $this->security->get_csrf_token_name(),
							'hash' => $this->security->get_csrf_hash()
						);
						?>
						<input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
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

<script>
	jQuery(document).ready(function($) {

		var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
		// Line Charts
		var line_chart_demo = $("#line-chart");
		var line_chart = Morris.Line({
			element: 'line-chart',
			data: [
				<?php for ($m = 7; $m > -1; $m--) : ?> {
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

	});

	function getRandomInt(min, max) {
		return Math.floor(Math.random() * (max - min + 1)) + min;
	}
</script>