<?php
defined('BASEPATH') or exit('No direct script access allowed');


class P extends CI_Controller
{

	public function index()
	{
	}

	public function mail($template)
	{
		$data['code'] = '234567';
		$view = 'email_templates/' . $template;
		$this->load->view($view, $data);
	}

	public function currency()
	{
		$result = $this->db
			->like('currency', $this->input->get('get_wallet_currency'))
			->or_like('code', $this->input->get('get_wallet_currency'))
			->or_like('country', $this->input->get('get_wallet_currency'))
			->get('currency')->result_array();
		foreach ($result as $currency) {
			echo '<span class="currency_list" onclick="logCurrency(\'' . $currency['country'] . '\', \'' . $currency['code'] . '\', \'' . $currency['currency'] . '\')">
                    <img src="' . base_url('assets/images/flags/') . strtolower(substr($currency['code'], 0, 2)) . '.svg" style="width: 50px;" />
                    ' . $currency['currency'] . ' (' . $currency['code'] . ') ' . $currency['country'] .
				'</span>';
		}
	}

	public function search_currency($searchTerm = "")
	{
		$result = $this->db
			->like('currency', $searchTerm)
			->or_like('code', $searchTerm)
			->or_like('country', $searchTerm)
			->get('currency')->result_array();

		echo json_encode($result);
	}

	public function wrong_turn()
	{
		$this->load->view('errors/html/wrong_turn');
	}

	public function wrongturn()
	{
		$this->load->view('errors/html/wrong_turn');
	}

	public function static_files($folder, $file)
	{
		$data = $this->input->post();
		return $this->load->view($folder . '/' . $file, $data, FALSE);
	}

	public function static_sub_files($folder, $sub, $file)
	{
		$data = $this->input->post();
		return $this->load->view($folder . '/' . $sub . '/' . $file, $data, FALSE);
	}

	public function report_errors()
	{
		$this->Email->do_email(json_encode($this->input->post()), '*** ERROR REPORT *** ', 'prycely@gmail.com', 'prycely@gmail.com');
	}

	public function top_up_conversion()
	{
		if ($_SERVER['REQUEST_METHOD'] = 'POST' && isset($_POST) && count($_POST) !== 0) {
			print_r($this->input->post());
			$amount = $this->input->post('amount');
			$from_currency = $this->input->post('from_currency');
			$to_currency = $this->input->post('to_currency');

			if ($amount = 0 || $amount = '') {
				$response = array(
					'status' => 'failed',
					'message' => 'Kindly add an amount',
					'fee' => 0,
					'converted' => 0,
					'time' => 0
				);
				echo json_encode($response);
				exit;
			}

			if ($from_currency = '') {
				$response = array(
					'status' => 'failed',
					'message' => 'We need a from currency',
					'fee' => 0,
					'converted' => 0,
					'time' => 0
				);
				echo json_encode($response);
				exit;
			}

			if ($to_currency = '') {
				$response = array(
					'status' => 'failed',
					'message' => 'We need a to currency',
					'fee' => 0,
					'converted' => 0,
					'time' => 0
				);
				echo json_encode($response);
				exit;
			}

			$fee = ($amount * (1 / 100));
			$converted_amount = $this->convert($amount, $from_currency, $to_currency);

			$response = array(
				'status' => 'done',
				'message' => 'All good',
				'amount' => $amount,
				'from_currency' => $from_currency,
				'to_currency' => $to_currency,
				'fee' => $fee,
				'converted' => $converted_amount,
				'time' => time()
			);
			echo json_encode($response);
		} else {
			$response = array(
				'status' => 'failed',
				'message' => 'There was an error proccessing your data. Please reload the page and try again',
				'fee' => 0,
				'converted' => 0,
				'time' => 0
			);
			echo json_encode($response);
			exit;
		}
	}

	private function convert($amount, $from_currency, $to_currency)
	{
		$url = "http://www.xe.com/currencyconverter/convert/?Amount=$amount&From=$from_currency&To=$to_currency";

		$ch = curl_init();
		$timeout = 0;
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		curl_setopt(
			$ch,
			CURLOPT_USERAGENT,
			"Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)"
		);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

		$rawdata = curl_exec($ch);
		curl_close($ch);

		$data = explode('uccResultAmount', $rawdata);
		@$data = explode('uccToCurrencyCode', $data[1]);

		$converted = preg_replace('/[^0-9,.]/', '', $data[0]);
		return $converted;
	}
}
