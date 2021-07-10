-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 12:18 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prycely`
--

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `id` int(11) NOT NULL,
  `country` varchar(36) NOT NULL,
  `currency` varchar(39) NOT NULL,
  `code` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`id`, `country`, `currency`, `code`) VALUES
(1, 'Afghanistan', 'Afghan afghani', 'AFN'),
(2, 'Akrotiri and Dhekelia (UK)', 'European euro', 'EUR'),
(3, 'Aland Islands (Finland)', 'European euro', 'EUR'),
(4, 'Albania', 'Albanian lek', 'ALL'),
(5, 'Algeria', 'Algerian dinar', 'DZD'),
(6, 'American Samoa (USA)', 'United States dollar', 'USD'),
(7, 'Andorra', 'European euro', 'EUR'),
(8, 'Angola', 'Angolan kwanza', 'AOA'),
(9, 'Anguilla (UK)', 'East Caribbean dollar', 'XCD'),
(10, 'Antigua and Barbuda', 'East Caribbean dollar', 'XCD'),
(11, 'Argentina', 'Argentine peso', 'ARS'),
(12, 'Armenia', 'Armenian dram', 'AMD'),
(13, 'Aruba (Netherlands)', 'Aruban florin', 'AWG'),
(14, 'Ascension Island (UK)', 'Saint Helena pound', 'SHP'),
(15, 'Australia', 'Australian dollar', 'AUD'),
(16, 'Austria', 'European euro', 'EUR'),
(17, 'Azerbaijan', 'Azerbaijan manat', 'AZN'),
(18, 'Bahamas', 'Bahamian dollar', 'BSD'),
(19, 'Bahrain', 'Bahraini dinar', 'BHD'),
(20, 'Bangladesh', 'Bangladeshi taka', 'BDT'),
(21, 'Barbados', 'Barbadian dollar', 'BBD'),
(22, 'Belarus', 'Belarusian ruble', 'BYN'),
(23, 'Belgium', 'European euro', 'EUR'),
(24, 'Belize', 'Belize dollar', 'BZD'),
(25, 'Benin', 'West African CFA franc', 'XOF'),
(26, 'Bermuda (UK)', 'Bermudian dollar', 'BMD'),
(27, 'Bhutan', 'Bhutanese ngultrum', 'BTN'),
(28, 'Bolivia', 'Bolivian boliviano', 'BOB'),
(29, 'Bonaire (Netherlands)', 'United States dollar', 'USD'),
(30, 'Bosnia and Herzegovina', 'Bosnia and Herzegovina convertible mark', 'BAM'),
(31, 'Botswana', 'Botswana pula', 'BWP'),
(32, 'Brazil', 'Brazilian real', 'BRL'),
(33, 'British Indian Ocean Territory (UK)', 'United States dollar', 'USD'),
(34, 'British Virgin Islands (UK)', 'United States dollar', 'USD'),
(35, 'Brunei', 'Brunei dollar', 'BND'),
(36, 'Bulgaria', 'Bulgarian lev', 'BGN'),
(37, 'Burkina Faso', 'West African CFA franc', 'XOF'),
(38, 'Burundi', 'Burundi franc', 'BIF'),
(39, 'Cabo Verde', 'Cape Verdean escudo', 'CVE'),
(40, 'Cambodia', 'Cambodian riel', 'KHR'),
(41, 'Cameroon', 'Central African CFA franc', 'XAF'),
(42, 'Canada', 'Canadian dollar', 'CAD'),
(43, 'Caribbean Netherlands (Netherlands)', 'United States dollar', 'USD'),
(44, 'Cayman Islands (UK)', 'Cayman Islands dollar', 'KYD'),
(45, 'Central African Republic', 'Central African CFA franc', 'XAF'),
(46, 'Chad', 'Central African CFA franc', 'XAF'),
(47, 'Chatham Islands (New Zealand)', 'New Zealand dollar', 'NZD'),
(48, 'Chile', 'Chilean peso', 'CLP'),
(49, 'China', 'Chinese Yuan Renminbi', 'CNY'),
(50, 'Christmas Island (Australia)', 'Australian dollar', 'AUD'),
(51, 'Cocos (Keeling) Islands (Australia)', 'Australian dollar', 'AUD'),
(52, 'Colombia', 'Colombian peso', 'COP'),
(53, 'Comoros', 'Comorian franc', 'KMF'),
(54, 'Congo, Democratic Republic of the', 'Congolese franc', 'CDF'),
(55, 'Congo, Republic of the', 'Central African CFA franc', 'XAF'),
(56, 'Cook Islands (New Zealand)', 'Cook Islands dollar', '---'),
(57, 'Costa Rica', 'Costa Rican colon', 'CRC'),
(58, 'Cote d\'Ivoire', 'West African CFA franc', 'XOF'),
(59, 'Croatia', 'Croatian kuna', 'HRK'),
(60, 'Cuba', 'Cuban peso', 'CUP'),
(61, 'Curacao (Netherlands)', 'Netherlands Antillean guilder', 'ANG'),
(62, 'Cyprus', 'European euro', 'EUR'),
(63, 'Czechia', 'Czech koruna', 'CZK'),
(64, 'Denmark', 'Danish krone', 'DKK'),
(65, 'Djibouti', 'Djiboutian franc', 'DJF'),
(66, 'Dominica', 'East Caribbean dollar', 'XCD'),
(67, 'Dominican Republic', 'Dominican peso', 'DOP'),
(68, 'Ecuador', 'United States dollar', 'USD'),
(69, 'Egypt', 'Egyptian pound', 'EGP'),
(70, 'El Salvador', 'United States dollar', 'USD'),
(71, 'Equatorial Guinea', 'Central African CFA franc', 'XAF'),
(72, 'Eritrea', 'Eritrean nakfa', 'ERN'),
(73, 'Estonia', 'European euro', 'EUR'),
(74, 'Eswatini (formerly Swaziland)', 'Swazi lilangeni', 'SZL'),
(75, 'Ethiopia', 'Ethiopian birr', 'ETB'),
(76, 'Falkland Islands (UK)', 'Falkland Islands pound', 'FKP'),
(77, 'Faroe Islands (Denmark)', 'Faroese krona', '---'),
(78, 'Fiji', 'Fijian dollar', 'FJD'),
(79, 'Finland', 'European euro', 'EUR'),
(80, 'France', 'European euro', 'EUR'),
(81, 'French Guiana (France)', 'European euro', 'EUR'),
(82, 'French Polynesia (France)', 'CFP franc', 'XPF'),
(83, 'Gabon', 'Central African CFA franc', 'XAF'),
(84, 'Gambia', 'Gambian dalasi', 'GMD'),
(85, 'Georgia', 'Georgian lari', 'GEL'),
(86, 'Germany', 'European euro', 'EUR'),
(87, 'Ghana', 'Ghanaian cedi', 'GHS'),
(88, 'Gibraltar (UK)', 'Gibraltar pound', 'GIP'),
(89, 'Greece', 'European euro', 'EUR'),
(90, 'Greenland (Denmark)', 'Danish krone', 'DKK'),
(91, 'Grenada', 'East Caribbean dollar', 'XCD'),
(92, 'Guadeloupe (France)', 'European euro', 'EUR'),
(93, 'Guam (USA)', 'United States dollar', 'USD'),
(94, 'Guatemala', 'Guatemalan quetzal', 'GTQ'),
(95, 'Guernsey (UK)', 'Guernsey Pound', 'GGP'),
(96, 'Guinea', 'Guinean franc', 'GNF'),
(97, 'Guinea-Bissau', 'West African CFA franc', 'XOF'),
(98, 'Guyana', 'Guyanese dollar', 'GYD'),
(99, 'Haiti', 'Haitian gourde', 'HTG'),
(100, 'Honduras', 'Honduran lempira', 'HNL'),
(101, 'Hong Kong (China)', 'Hong Kong dollar', 'HKD'),
(102, 'Hungary', 'Hungarian forint', 'HUF'),
(103, 'Iceland', 'Icelandic krona', 'ISK'),
(104, 'India', 'Indian rupee', 'INR'),
(105, 'Indonesia', 'Indonesian rupiah', 'IDR'),
(106, 'International Monetary Fund (IMF)', 'SDR (Special Drawing Right)', 'XDR'),
(107, 'Iran', 'Iranian rial', 'IRR'),
(108, 'Iraq', 'Iraqi dinar', 'IQD'),
(109, 'Ireland', 'European euro', 'EUR'),
(110, 'Isle of Man (UK)', 'Manx pound', 'IMP'),
(111, 'Israel', 'Israeli new shekel', 'ILS'),
(112, 'Italy', 'European euro', 'EUR'),
(113, 'Jamaica', 'Jamaican dollar', 'JMD'),
(114, 'Japan', 'Japanese yen', 'JPY'),
(115, 'Jersey (UK)', 'Jersey pound', 'JEP'),
(116, 'Jordan', 'Jordanian dinar', 'JOD'),
(117, 'Kazakhstan', 'Kazakhstani tenge', 'KZT'),
(118, 'Kenya', 'Kenyan shilling', 'KES'),
(119, 'Kiribati', 'Australian dollar', 'AUD'),
(120, 'Kosovo', 'European euro', 'EUR'),
(121, 'Kuwait', 'Kuwaiti dinar', 'KWD'),
(122, 'Kyrgyzstan', 'Kyrgyzstani som', 'KGS'),
(123, 'Laos', 'Lao kip', 'LAK'),
(124, 'Latvia', 'European euro', 'EUR'),
(125, 'Lebanon', 'Lebanese pound', 'LBP'),
(126, 'Lesotho', 'Lesotho loti', 'LSL'),
(127, 'Liberia', 'Liberian dollar', 'LRD'),
(128, 'Libya', 'Libyan dinar', 'LYD'),
(129, 'Liechtenstein', 'Swiss franc', 'CHF'),
(130, 'Lithuania', 'European euro', 'EUR'),
(131, 'Luxembourg', 'European euro', 'EUR'),
(132, 'Macau (China)', 'Macanese pataca', 'MOP'),
(133, 'Madagascar', 'Malagasy ariary', 'MGA'),
(134, 'Malawi', 'Malawian kwacha', 'MWK'),
(135, 'Malaysia', 'Malaysian ringgit', 'MYR'),
(136, 'Maldives', 'Maldivian rufiyaa', 'MVR'),
(137, 'Mali', 'West African CFA franc', 'XOF'),
(138, 'Malta', 'European euro', 'EUR'),
(139, 'Marshall Islands', 'United States dollar', 'USD'),
(140, 'Martinique (France)', 'European euro', 'EUR'),
(141, 'Mauritania', 'Mauritanian ouguiya', 'MRU'),
(142, 'Mauritius', 'Mauritian rupee', 'MUR'),
(143, 'Mayotte (France)', 'European euro', 'EUR'),
(144, 'Mexico', 'Mexican peso', 'MXN'),
(145, 'Micronesia', 'United States dollar', 'USD'),
(146, 'Moldova', 'Moldovan leu', 'MDL'),
(147, 'Monaco', 'European euro', 'EUR'),
(148, 'Mongolia', 'Mongolian tugrik', 'MNT'),
(149, 'Montenegro', 'European euro', 'EUR'),
(150, 'Montserrat (UK)', 'East Caribbean dollar', 'XCD'),
(151, 'Morocco', 'Moroccan dirham', 'MAD'),
(152, 'Mozambique', 'Mozambican metical', 'MZN'),
(153, 'Myanmar (formerly Burma)', 'Myanmar kyat', 'MMK'),
(154, 'Namibia', 'Namibian dollar', 'NAD'),
(155, 'Nauru', 'Australian dollar', 'AUD'),
(156, 'Nepal', 'Nepalese rupee', 'NPR'),
(157, 'Netherlands', 'European euro', 'EUR'),
(158, 'New Caledonia (France)', 'CFP franc', 'XPF'),
(159, 'New Zealand', 'New Zealand dollar', 'NZD'),
(160, 'Nicaragua', 'Nicaraguan cordoba', 'NIO'),
(161, 'Niger', 'West African CFA franc', 'XOF'),
(162, 'Nigeria', 'Nigerian naira', 'NGN'),
(163, 'Niue (New Zealand)', 'New Zealand dollar', 'NZD'),
(164, 'Norfolk Island (Australia)', 'Australian dollar', 'AUD'),
(165, 'Northern Mariana Islands (USA)', 'United States dollar', 'USD'),
(166, 'North Korea', 'North Korean won', 'KPW'),
(167, 'North Macedonia (formerly Macedonia)', 'Macedonian denar', 'MKD'),
(168, 'Norway', 'Norwegian krone', 'NOK'),
(169, 'Oman', 'Omani rial', 'OMR'),
(170, 'Pakistan', 'Pakistani rupee', 'PKR'),
(171, 'Palau', 'United States dollar', 'USD'),
(172, 'Palestine', 'Israeli new shekel', 'ILS'),
(173, 'Panama', 'United States dollar', 'USD'),
(174, 'Papua New Guinea', 'Papua New Guinean kina', 'PGK'),
(175, 'Paraguay', 'Paraguayan guarani', 'PYG'),
(176, 'Peru', 'Peruvian sol', 'PEN'),
(177, 'Philippines', 'Philippine peso', 'PHP'),
(178, 'Pitcairn Islands (UK)', 'New Zealand dollar', 'NZD'),
(179, 'Poland', 'Polish zloty', 'PLN'),
(180, 'Portugal', 'European euro', 'EUR'),
(181, 'Puerto Rico (USA)', 'United States dollar', 'USD'),
(182, 'Qatar', 'Qatari riyal', 'QAR'),
(183, 'Reunion (France)', 'European euro', 'EUR'),
(184, 'Romania', 'Romanian leu', 'RON'),
(185, 'Russia', 'Russian ruble', 'RUB'),
(186, 'Rwanda', 'Rwandan franc', 'RWF'),
(187, 'Saba (Netherlands)', 'United States dollar', 'USD'),
(188, 'Saint Barthelemy (France)', 'European euro', 'EUR'),
(189, 'Saint Helena (UK)', 'Saint Helena pound', 'SHP'),
(190, 'Saint Kitts and Nevis', 'East Caribbean dollar', 'XCD'),
(191, 'Saint Lucia', 'East Caribbean dollar', 'XCD'),
(192, 'Saint Martin (France)', 'European euro', 'EUR'),
(193, 'Saint Pierre and Miquelon (France)', 'European euro', 'EUR'),
(194, 'Saint Vincent and the Grenadines', 'East Caribbean dollar', 'XCD'),
(195, 'Samoa', 'Samoan tala', 'WST'),
(196, 'San Marino', 'European euro', 'EUR'),
(197, 'Sao Tome and Principe', 'Sao Tome and Principe dobra', 'STN'),
(198, 'Saudi Arabia', 'Saudi Arabian riyal', 'SAR'),
(199, 'Senegal', 'West African CFA franc', 'XOF'),
(200, 'Serbia', 'Serbian dinar', 'RSD'),
(201, 'Seychelles', 'Seychellois rupee', 'SCR'),
(202, 'Sierra Leone', 'Sierra Leonean leone', 'SLL'),
(203, 'Singapore', 'Singapore dollar', 'SGD'),
(204, 'Sint Eustatius (Netherlands)', 'United States dollar', 'USD'),
(205, 'Sint Maarten (Netherlands)', 'Netherlands Antillean guilder', 'ANG'),
(206, 'Slovakia', 'European euro', 'EUR'),
(207, 'Slovenia', 'European euro', 'EUR'),
(208, 'Solomon Islands', 'Solomon Islands dollar', 'SBD'),
(209, 'Somalia', 'Somali shilling', 'SOS'),
(210, 'South Africa', 'South African rand', 'ZAR'),
(211, 'South Georgia Island (UK)', 'Pound sterling', 'GBP'),
(212, 'South Korea', 'South Korean won', 'KRW'),
(213, 'South Sudan', 'South Sudanese pound', 'SSP'),
(214, 'Spain', 'European euro', 'EUR'),
(215, 'Sri Lanka', 'Sri Lankan rupee', 'LKR'),
(216, 'Sudan', 'Sudanese pound', 'SDG'),
(217, 'Suriname', 'Surinamese dollar', 'SRD'),
(218, 'Svalbard and Jan Mayen (Norway)', 'Norwegian krone', 'NOK'),
(219, 'Sweden', 'Swedish krona', 'SEK'),
(220, 'Switzerland', 'Swiss franc', 'CHF'),
(221, 'Syria', 'Syrian pound', 'SYP'),
(222, 'Taiwan', 'New Taiwan dollar', 'TWD'),
(223, 'Tajikistan', 'Tajikistani somoni', 'TJS'),
(224, 'Tanzania', 'Tanzanian shilling', 'TZS'),
(225, 'Thailand', 'Thai baht', 'THB'),
(226, 'Timor-Leste', 'United States dollar', 'USD'),
(227, 'Togo', 'West African CFA franc', 'XOF'),
(228, 'Tokelau (New Zealand)', 'New Zealand dollar', 'NZD'),
(229, 'Tonga', 'Tongan pa’anga', 'TOP'),
(230, 'Trinidad and Tobago', 'Trinidad and Tobago dollar', 'TTD'),
(231, 'Tristan da Cunha (UK)', 'Pound sterling', 'GBP'),
(232, 'Tunisia', 'Tunisian dinar', 'TND'),
(233, 'Turkey', 'Turkish lira', 'TRY'),
(234, 'Turkmenistan', 'Turkmen manat', 'TMT'),
(235, 'Turks and Caicos Islands (UK)', 'United States dollar', 'USD'),
(236, 'Tuvalu', 'Australian dollar', 'AUD'),
(237, 'Uganda', 'Ugandan shilling', 'UGX'),
(238, 'Ukraine', 'Ukrainian hryvnia', 'UAH'),
(239, 'United Arab Emirates', 'UAE dirham', 'AED'),
(240, 'United Kingdom', 'Pound sterling', 'GBP'),
(241, 'United States of America', 'United States dollar', 'USD'),
(242, 'Uruguay', 'Uruguayan peso', 'UYU'),
(243, 'US Virgin Islands (USA)', 'United States dollar', 'USD'),
(244, 'Uzbekistan', 'Uzbekistani som', 'UZS'),
(245, 'Vanuatu', 'Vanuatu vatu', 'VUV'),
(246, 'Vatican City (Holy See)', 'European euro', 'EUR'),
(247, 'Venezuela', 'Venezuelan bolivar', 'VES'),
(248, 'Vietnam', 'Vietnamese dong', 'VND'),
(249, 'Wake Island (USA)', 'United States dollar', 'USD'),
(250, 'Wallis and Futuna (France)', 'CFP franc', 'XPF'),
(251, 'Yemen', 'Yemeni rial', 'YER'),
(252, 'Zambia', 'Zambian kwacha', 'ZMW'),
(253, 'Zimbabwe', 'United States dollar', 'USD');

-- --------------------------------------------------------

--
-- Table structure for table `errors`
--

CREATE TABLE `errors` (
  `error` longtext NOT NULL,
  `error_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `errors`
--

INSERT INTO `errors` (`error`, `error_id`) VALUES
('', 1),
('nowCallback', 2),
('{\"mpesa_trans_id\":\"\",\"merchant_req_id\":\"\",\"checkout_req_id\":\"\",\"status\":\"1\",\"response_result_code\":\"\",\"response_result_desc\":\"\"}', 3),
('', 4),
('nowCallback', 5),
('{\"mpesa_trans_id\":\"\",\"merchant_req_id\":\"\",\"checkout_req_id\":\"\",\"status\":\"1\",\"response_result_code\":\"\",\"response_result_desc\":\"\"}', 6),
('null', 7),
('{\"Body\":{\"stkCallback\":{\"MerchantRequestID\":\"2519-20066063-1\",\"CheckoutRequestID\":\"ws_CO_03062021003241933954\",\"ResultCode\":1101,\"ResultDesc\":\"Invalid Input parameter \'Prompt message prefix\', length should be less than 94 characters\"}}}', 8),
('{\"Body\":{\"stkCallback\":{\"MerchantRequestID\":\"90149-20323689-1\",\"CheckoutRequestID\":\"ws_CO_03062021003328584206\",\"ResultCode\":1032,\"ResultDesc\":\"Request cancelled by user\"}}}', 9),
('{\"Body\":{\"stkCallback\":{\"MerchantRequestID\":\"90157-20324067-1\",\"CheckoutRequestID\":\"ws_CO_03062021003415922837\",\"ResultCode\":1032,\"ResultDesc\":\"Request cancelled by user\"}}}', 10),
('{\"Body\":{\"stkCallback\":{\"MerchantRequestID\":\"95501-10242422-1\",\"CheckoutRequestID\":\"ws_CO_03062021003505533533\",\"ResultCode\":1032,\"ResultDesc\":\"Request cancelled by user\"}}}', 11),
('{\"Body\":{\"stkCallback\":{\"MerchantRequestID\":\"100132-9379153-1\",\"CheckoutRequestID\":\"ws_CO_03062021003529798251\",\"ResultCode\":1037,\"ResultDesc\":\"DS timeout.\"}}}', 12),
('{\"Body\":{\"stkCallback\":{\"MerchantRequestID\":\"9064-20717217-1\",\"CheckoutRequestID\":\"ws_CO_03062021003618507425\",\"ResultCode\":1032,\"ResultDesc\":\"Request cancelled by user\"}}}', 13),
('{\"Body\":{\"stkCallback\":{\"MerchantRequestID\":\"7752-20719161-1\",\"CheckoutRequestID\":\"ws_CO_03062021003723220295\",\"ResultCode\":1,\"ResultDesc\":\"The balance is insufficient for the transaction\"}}}', 14),
('{\"Body\":{\"stkCallback\":{\"MerchantRequestID\":\"2518-20068045-1\",\"CheckoutRequestID\":\"ws_CO_03062021003710383139\",\"ResultCode\":1031,\"ResultDesc\":\"Request cancelled by user\"}}}', 15),
('{\"Body\":{\"stkCallback\":{\"MerchantRequestID\":\"2509-20068721-1\",\"CheckoutRequestID\":\"ws_CO_03062021003849403411\",\"ResultCode\":1101,\"ResultDesc\":\"Invalid Input parameter \'Prompt message prefix\', length should be less than 94 characters\"}}}', 16),
('{\"Body\":{\"stkCallback\":{\"MerchantRequestID\":\"2520-20069044-1\",\"CheckoutRequestID\":\"ws_CO_03062021003942379224\",\"ResultCode\":1101,\"ResultDesc\":\"Invalid Input parameter \'Prompt message prefix\', length should be less than 94 characters\"}}}', 17),
('{\"Body\":{\"stkCallback\":{\"MerchantRequestID\":\"7754-20721297-1\",\"CheckoutRequestID\":\"ws_CO_03062021004215421201\",\"ResultCode\":1032,\"ResultDesc\":\"Request cancelled by user\"}}}', 18),
('{\"Body\":{\"stkCallback\":{\"MerchantRequestID\":\"95508-10246343-1\",\"CheckoutRequestID\":\"ws_CO_03062021004405488532\",\"ResultCode\":1,\"ResultDesc\":\"The balance is insufficient for the transaction\"}}}', 19),
('{\"Body\":{\"stkCallback\":{\"MerchantRequestID\":\"100129-9383056-1\",\"CheckoutRequestID\":\"ws_CO_03062021004442157587\",\"ResultCode\":1032,\"ResultDesc\":\"Request cancelled by user\"}}}', 20),
('{\"Body\":{\"stkCallback\":{\"MerchantRequestID\":\"90149-20329752-1\",\"CheckoutRequestID\":\"ws_CO_03062021004708021317\",\"ResultCode\":1,\"ResultDesc\":\"The balance is insufficient for the transaction\"}}}', 21),
('{\"Body\":{\"stkCallback\":{\"MerchantRequestID\":\"14245-20539653-1\",\"CheckoutRequestID\":\"ws_CO_03062021004752207828\",\"ResultCode\":1,\"ResultDesc\":\"The balance is insufficient for the transaction\"}}}', 22),
('{\"Body\":{\"stkCallback\":{\"MerchantRequestID\":\"6067-9045972-1\",\"CheckoutRequestID\":\"ws_CO_03062021004809331023\",\"ResultCode\":1031,\"ResultDesc\":\"Request cancelled by user\"}}}', 23),
('{\"Body\":{\"stkCallback\":{\"MerchantRequestID\":\"7751-20724241-1\",\"CheckoutRequestID\":\"ws_CO_03062021004905563624\",\"ResultCode\":1,\"ResultDesc\":\"The balance is insufficient for the transaction\"}}}', 24),
('{\"Body\":{\"stkCallback\":{\"MerchantRequestID\":\"7766-20724614-1\",\"CheckoutRequestID\":\"ws_CO_03062021005000865204\",\"ResultCode\":1,\"ResultDesc\":\"The balance is insufficient for the transaction\"}}}', 25),
('{\"Body\":{\"stkCallback\":{\"MerchantRequestID\":\"10883-20076506-1\",\"CheckoutRequestID\":\"ws_CO_03062021005058705858\",\"ResultCode\":1,\"ResultDesc\":\"The balance is insufficient for the transaction\"}}}', 26),
('{\"Body\":{\"stkCallback\":{\"MerchantRequestID\":\"9088-20724283-1\",\"CheckoutRequestID\":\"ws_CO_03062021005245290836\",\"ResultCode\":1,\"ResultDesc\":\"The balance is insufficient for the transaction\"}}}', 27),
('{\"Body\":{\"stkCallback\":{\"MerchantRequestID\":\"2517-20074629-1\",\"CheckoutRequestID\":\"ws_CO_03062021005318077178\",\"ResultCode\":1,\"ResultDesc\":\"The balance is insufficient for the transaction\"}}}', 28),
('{\"TransactionType\":\"Pay Bill\",\"TransID\":\"PFE34BTXMT\",\"TransTime\":\"20210614021004\",\"TransAmount\":\"10.00\",\"BusinessShortCode\":\"4072015\",\"BillRefNumber\":\"PrycelyTest\",\"InvoiceNumber\":\"\",\"OrgAccountBalance\":\"80.00\",\"ThirdPartyTransID\":\"\",\"MSISDN\":\"254725227513\",\"FirstName\":\"BENEDICT\",\"MiddleName\":\"OUMA\",\"LastName\":\"OURU\"}', 29),
('{\"Body\":{\"stkCallback\":{\"MerchantRequestID\":\"81491-4401517-1\",\"CheckoutRequestID\":\"ws_CO_14062021034251236848\",\"ResultCode\":0,\"ResultDesc\":\"The service request is processed successfully.\",\"CallbackMetadata\":{\"Item\":[{\"Name\":\"Amount\",\"Value\":1000.00},{\"Name\":\"MpesaReceiptNumber\",\"Value\":\"PFE94C35H3\"},{\"Name\":\"Balance\"},{\"Name\":\"TransactionDate\",\"Value\":20210614034256},{\"Name\":\"PhoneNumber\",\"Value\":254725227513}]}}}}', 30),
('nowCallback', 31),
('{\"mpesa_trans_id\":\"PFE94C35H3\",\"merchant_req_id\":\"81491-4401517-1\",\"checkout_req_id\":\"ws_CO_14062021034251236848\",\"status\":\"1\",\"response_result_code\":\"0\",\"response_result_desc\":\"The service request is processed successfully.\"}', 32),
('{\"TransactionType\":\"Pay Bill\",\"TransID\":\"PFE94C35H3\",\"TransTime\":\"20210614034256\",\"TransAmount\":\"1000.00\",\"BusinessShortCode\":\"4072015\",\"BillRefNumber\":\"Prycely Wallet TopUp\",\"InvoiceNumber\":\"\",\"OrgAccountBalance\":\"1080.00\",\"ThirdPartyTransID\":\"\",\"MSISDN\":\"254725227513\",\"FirstName\":\"BENEDICT\",\"MiddleName\":\"OUMA\",\"LastName\":\"OURU\"}', 33);

-- --------------------------------------------------------

--
-- Table structure for table `the_activity_updates`
--

CREATE TABLE `the_activity_updates` (
  `the_update_id` int(11) NOT NULL,
  `the_user_id` int(11) NOT NULL,
  `the_activity_id` int(11) NOT NULL,
  `the_activity_update` longtext NOT NULL,
  `the_update_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `the_groups`
--

CREATE TABLE `the_groups` (
  `the_group_id` int(11) NOT NULL,
  `the_group_name` text NOT NULL,
  `the_group_goal` varchar(1000) NOT NULL,
  `the_group_purpose` varchar(10000) NOT NULL,
  `the_group_currency` text NOT NULL,
  `the_group_creator` int(11) NOT NULL,
  `the_group_date` int(11) NOT NULL,
  `the_group_s1` int(11) NOT NULL,
  `the_group_s2` int(11) NOT NULL,
  `the_group_s3` int(11) NOT NULL,
  `the_group_s4` int(11) NOT NULL,
  `the_group_type` text NOT NULL,
  `the_group_photo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `the_groups`
--

INSERT INTO `the_groups` (`the_group_id`, `the_group_name`, `the_group_goal`, `the_group_purpose`, `the_group_currency`, `the_group_creator`, `the_group_date`, `the_group_s1`, `the_group_s2`, `the_group_s3`, `the_group_s4`, `the_group_type`, `the_group_photo`) VALUES
(1, 'Prycely', '1000000', 'Testing all group features', 'KES', 1, 1622197883, 0, 0, 0, 0, 'sacco', ''),
(2, 'Prycely Sacco', '1000', 'Further Tests', 'KES', 2, 1622204754, 0, 0, 0, 0, 'sacco', '');

-- --------------------------------------------------------

--
-- Table structure for table `the_group_activities`
--

CREATE TABLE `the_group_activities` (
  `the_activity_id` int(11) NOT NULL,
  `the_activity_creator` int(11) NOT NULL,
  `the_group_id` int(11) NOT NULL,
  `the_activity_title` text NOT NULL,
  `the_activity_description` longtext NOT NULL,
  `the_activity_created` int(11) NOT NULL,
  `the_activity_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `the_group_members`
--

CREATE TABLE `the_group_members` (
  `the_member_id` int(11) NOT NULL,
  `the_user_id` int(11) NOT NULL,
  `the_group_id` int(11) NOT NULL,
  `the_date_joined` int(11) NOT NULL,
  `the_member_status` tinyint(4) NOT NULL DEFAULT 0,
  `the_date_exit` int(11) NOT NULL,
  `the_member_designation` text NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `the_group_members`
--

INSERT INTO `the_group_members` (`the_member_id`, `the_user_id`, `the_group_id`, `the_date_joined`, `the_member_status`, `the_date_exit`, `the_member_designation`) VALUES
(1, 1, 1, 1622197883, 1, 0, 'admin'),
(2, 2, 2, 1622204754, 1, 0, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `the_logins`
--

CREATE TABLE `the_logins` (
  `the_login_attempt` int(11) NOT NULL,
  `the_login_user` int(11) NOT NULL,
  `the_login_time` int(11) NOT NULL,
  `the_login_ip` varchar(100) NOT NULL,
  `the_login_success` text NOT NULL,
  `the_login_password_attempt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `the_logins`
--

INSERT INTO `the_logins` (`the_login_attempt`, `the_login_user`, `the_login_time`, `the_login_ip`, `the_login_success`, `the_login_password_attempt`) VALUES
(1, 1, 1617449065, '::1', 'no', 'optirex'),
(2, 1, 1617449096, '::1', 'no', 'bokouru'),
(3, 1, 1617449214, '::1', 'no', 'bokouru'),
(4, 1, 1617449472, '::1', 'no', 'optirex'),
(5, 1, 1617449505, '::1', 'yes', 'user_1_correct_password'),
(6, 1, 1617451842, '::1', 'no', '123Death!@#'),
(7, 1, 1617451850, '::1', 'no', '123Death!@#'),
(8, 1, 1617451855, '::1', 'no', '890Berjis*()'),
(9, 1, 1617451877, '::1', 'no', '123death!@#'),
(10, 1, 1617451878, '::1', 'no', '123death!@#'),
(11, 1, 1617451878, '::1', 'no', '123death!@#'),
(12, 1, 1617451879, '::1', 'no', '123death!@#'),
(13, 1, 1617451879, '::1', 'no', '123death!@#'),
(14, 1, 1617451879, '::1', 'no', '123death!@#'),
(15, 1, 1617451879, '::1', 'no', '123death!@#'),
(16, 1, 1617451879, '::1', 'no', '123death!@#'),
(17, 1, 1617451918, '::1', 'no', '123death!@#'),
(18, 1, 1617451918, '::1', 'no', '123death!@#'),
(19, 1, 1617451919, '::1', 'no', '123death!@#'),
(20, 1, 1617451919, '::1', 'no', '123death!@#'),
(21, 1, 1617451919, '::1', 'no', '123death!@#'),
(22, 1, 1617451920, '::1', 'no', '123death!@#'),
(23, 1, 1617451920, '::1', 'no', '123death!@#'),
(24, 1, 1617451921, '::1', 'no', '123death!@#'),
(25, 1, 1617452023, '::1', 'no', '123death!@#'),
(26, 1, 1617452066, '::1', 'no', '123Death!@#'),
(27, 1, 1617452088, '::1', 'no', '890Berjis*()'),
(28, 1, 1617452094, '::1', 'no', '123Death*()'),
(29, 1, 1617452101, '::1', 'no', '123death!@#'),
(30, 1, 1617452124, '::1', 'no', '123Death'),
(31, 1, 1617452199, '::1', 'no', '890Berjis*()'),
(32, 1, 1617452207, '::1', 'no', '890Berjis*()'),
(33, 1, 1617452208, '::1', 'no', '890Berjis*()'),
(34, 1, 1617452209, '::1', 'no', '890Berjis*()'),
(35, 1, 1617452210, '::1', 'no', '890Berjis*()'),
(36, 1, 1617452388, '::1', 'yes', 'user_1_correct_password'),
(37, 1, 1618387089, '::1', 'yes', 'user_1_correct_password'),
(38, 1, 1618576092, '::1', 'yes', 'user_1_correct_password'),
(39, 1, 1618576741, '::1', 'yes', 'user_1_correct_password'),
(40, 1, 1618646890, '::1', 'no', '890Berjis*()_'),
(41, 1, 1618646898, '::1', 'yes', 'user_1_correct_password'),
(42, 1, 1618685740, '::1', 'yes', 'user_1_correct_password'),
(43, 1, 1618733298, '::1', 'yes', 'user_1_correct_password'),
(44, 1, 1618752183, '::1', 'yes', 'user_1_correct_password'),
(45, 1, 1618760436, '::1', 'no', ''),
(46, 1, 1618760445, '::1', 'yes', 'user_1_correct_password'),
(47, 1, 1618761049, '::1', 'yes', 'user_1_correct_password'),
(48, 1, 1618764225, '::1', 'yes', 'user_1_correct_password'),
(49, 1, 1618813456, '::1', 'no', '890berjis*()'),
(50, 1, 1618813481, '::1', 'no', '890berjis*()'),
(51, 1, 1618813487, '::1', 'yes', 'user_1_correct_password'),
(52, 1, 1618826392, '::1', 'yes', 'user_1_correct_password'),
(53, 1, 1618831302, '::1', 'yes', 'user_1_correct_password'),
(54, 1, 1618841185, '::1', 'no', '890Berjis*(*)'),
(55, 1, 1618841235, '::1', 'yes', 'user_1_correct_password'),
(56, 1, 1619003633, '::1', 'yes', 'user_1_correct_password'),
(57, 1, 1619429033, '::1', 'yes', 'user_1_correct_password'),
(58, 1, 1619449852, '::1', 'yes', 'user_1_correct_password'),
(59, 1, 1619534256, '::1', 'yes', 'user_1_correct_password'),
(60, 1, 1619537361, '197.237.30.235', 'no', '890Berjis!@#'),
(61, 1, 1619537369, '197.237.30.235', 'yes', 'user_1_correct_password'),
(62, 1, 1619603706, '197.237.30.235', 'yes', 'user_1_correct_password'),
(63, 1, 1619693841, '197.237.30.235', 'no', '890Berjis*(_)'),
(64, 1, 1619693846, '197.237.30.235', 'yes', 'user_1_correct_password'),
(65, 1, 1619732926, '41.90.7.49', 'no', '890Death!@#'),
(66, 1, 1619732940, '41.90.7.31', 'yes', 'user_1_correct_password'),
(67, 1, 1619984927, '197.237.30.235', 'yes', 'user_1_correct_password'),
(68, 1, 1619985233, '197.237.30.235', 'yes', 'user_1_correct_password'),
(69, 1, 1619985610, '197.237.30.235', 'yes', 'user_1_correct_password'),
(70, 1, 1620084737, '197.237.30.235', 'yes', 'user_1_correct_password'),
(71, 1, 1620217586, '197.237.30.235', 'yes', 'user_1_correct_password'),
(72, 1, 1620232873, '197.237.30.235', 'yes', 'user_1_correct_password'),
(73, 1, 1620477580, '197.237.30.235', 'yes', 'user_1_correct_password'),
(74, 1, 1620582004, '197.237.30.235', 'yes', 'user_1_correct_password'),
(75, 1, 1620845860, '197.237.30.235', 'yes', 'user_1_correct_password'),
(76, 1, 1622195281, '197.237.244.11', 'yes', 'user_1_correct_password'),
(77, 2, 1622203325, '197.237.244.11', 'yes', 'user_2_correct_password'),
(78, 1, 1622659144, '102.140.204.59', 'yes', 'user_1_correct_password'),
(79, 1, 1622667769, '102.140.204.59', 'yes', 'user_1_correct_password'),
(80, 1, 1622720798, '102.140.204.59', 'yes', 'user_1_correct_password'),
(81, 1, 1623071020, '197.237.24.130', 'no', '890Prycely*()'),
(82, 1, 1623071028, '197.237.24.130', 'yes', 'user_1_correct_password'),
(83, 1, 1623618788, '102.140.223.229', 'yes', 'user_1_correct_password'),
(84, 1, 1624971819, '41.90.7.139', 'yes', 'user_1_correct_password'),
(85, 1, 1625571570, '::1', 'yes', 'user_1_correct_password');

-- --------------------------------------------------------

--
-- Table structure for table `the_paybill`
--

CREATE TABLE `the_paybill` (
  `the_paybill_id` int(11) NOT NULL,
  `request` varchar(1000) NOT NULL,
  `TransactionType` varchar(1000) NOT NULL,
  `MpesaCode` varchar(1000) NOT NULL,
  `PayBillBalance` varchar(1000) NOT NULL,
  `ThirdPartyTransID` varchar(1000) NOT NULL,
  `InvoiceNumber` varchar(1000) NOT NULL,
  `amount` varchar(1000) NOT NULL,
  `FirstName` varchar(1000) NOT NULL,
  `LastName` varchar(1000) NOT NULL,
  `MiddleName` varchar(1000) NOT NULL,
  `phoneVals` varchar(1000) NOT NULL,
  `phone` varchar(1000) NOT NULL,
  `ShortCode` varchar(1000) NOT NULL,
  `accountNumber` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `the_paybill`
--

INSERT INTO `the_paybill` (`the_paybill_id`, `request`, `TransactionType`, `MpesaCode`, `PayBillBalance`, `ThirdPartyTransID`, `InvoiceNumber`, `amount`, `FirstName`, `LastName`, `MiddleName`, `phoneVals`, `phone`, `ShortCode`, `accountNumber`) VALUES
(1, '{\"TransactionType\":\"Pay Bill\",\"TransID\":\"PDT7DMW2U3\",\"TransTime\":\"20210429165625\",\"TransAmount\":\"1.00\",\"BusinessShortCode\":\"4072015\",\"BillRefNumber\":\"32976441\",\"InvoiceNumber\":\"\",\"OrgAccountBalance\":\"614.00\",\"ThirdPartyTransID\":\"\",\"MSISDN\":\"254725227513\",\"FirstName\":\"BENEDICT\",\"MiddleName\":\"OUMA\",\"LastName\":\"OURU\"}', 'Pay Bill', 'PDT7DMW2U3', '614.00', '', '', '1.00', 'BENEDICT', 'OURU', 'OUMA', '{\"status\":true,\"formattedPhone\":\"254725227513\"}', '254725227513', '4072015', '32976441'),
(2, '{\"TransactionType\":\"Pay Bill\",\"TransID\":\"PDT1DN8VAB\",\"TransTime\":\"20210429170255\",\"TransAmount\":\"10.00\",\"BusinessShortCode\":\"4072015\",\"BillRefNumber\":\"32976441\",\"InvoiceNumber\":\"\",\"OrgAccountBalance\":\"624.00\",\"ThirdPartyTransID\":\"\",\"MSISDN\":\"254725227513\",\"FirstName\":\"BENEDICT\",\"MiddleName\":\"OUMA\",\"LastName\":\"OURU\"}', 'Pay Bill', 'PDT1DN8VAB', '624.00', '', '', '10.00', 'BENEDICT', 'OURU', 'OUMA', '{\"status\":true,\"formattedPhone\":\"254725227513\"}', '254725227513', '4072015', '32976441'),
(3, '{\"TransactionType\":\"Pay Bill\",\"TransID\":\"PDT3DNSW3J\",\"TransTime\":\"20210429171255\",\"TransAmount\":\"10.00\",\"BusinessShortCode\":\"4072015\",\"BillRefNumber\":\"32976441\",\"InvoiceNumber\":\"\",\"OrgAccountBalance\":\"634.00\",\"ThirdPartyTransID\":\"\",\"MSISDN\":\"254725227513\",\"FirstName\":\"BENEDICT\",\"MiddleName\":\"OUMA\",\"LastName\":\"OURU\"}', 'Pay Bill', 'PDT3DNSW3J', '634.00', '', '', '10.00', 'BENEDICT', 'OURU', 'OUMA', '{\"status\":true,\"formattedPhone\":\"254725227513\"}', '254725227513', '4072015', '32976441'),
(4, '{\"TransactionType\":\"Pay Bill\",\"TransID\":\"PDT8DNZV2E\",\"TransTime\":\"20210429171623\",\"TransAmount\":\"100.00\",\"BusinessShortCode\":\"4072015\",\"BillRefNumber\":\"32976441\",\"InvoiceNumber\":\"\",\"OrgAccountBalance\":\"734.00\",\"ThirdPartyTransID\":\"\",\"MSISDN\":\"254725778511\",\"FirstName\":\"Kevin\",\"MiddleName\":\"kiprotich\",\"LastName\":\"\"}', 'Pay Bill', 'PDT8DNZV2E', '734.00', '', '', '100.00', 'Kevin', '', 'kiprotich', '{\"status\":true,\"formattedPhone\":\"254725778511\"}', '254725778511', '4072015', '32976441'),
(5, '{\"TransactionType\":\"Pay Bill\",\"TransID\":\"PDT1E3L7ZL\",\"TransTime\":\"20210429212300\",\"TransAmount\":\"10.00\",\"BusinessShortCode\":\"4072015\",\"BillRefNumber\":\"32976441\",\"InvoiceNumber\":\"\",\"OrgAccountBalance\":\"774.00\",\"ThirdPartyTransID\":\"\",\"MSISDN\":\"254725227513\",\"FirstName\":\"BENEDICT\",\"MiddleName\":\"OUMA\",\"LastName\":\"OURU\"}', 'Pay Bill', 'PDT1E3L7ZL', '774.00', '', '', '10.00', 'BENEDICT', 'OURU', 'OUMA', '{\"status\":true,\"formattedPhone\":\"254725227513\"}', '254725227513', '4072015', '32976441'),
(6, '{\"TransactionType\":\"Pay Bill\",\"TransID\":\"PDT3E3PV0P\",\"TransTime\":\"20210429212635\",\"TransAmount\":\"10.00\",\"BusinessShortCode\":\"4072015\",\"BillRefNumber\":\"with htaccess closed\",\"InvoiceNumber\":\"\",\"OrgAccountBalance\":\"784.00\",\"ThirdPartyTransID\":\"\",\"MSISDN\":\"254725227513\",\"FirstName\":\"BENEDICT\",\"MiddleName\":\"OUMA\",\"LastName\":\"OURU\"}', 'Pay Bill', 'PDT3E3PV0P', '784.00', '', '', '10.00', 'BENEDICT', 'OURU', 'OUMA', '{\"status\":true,\"formattedPhone\":\"254725227513\"}', '254725227513', '4072015', 'WITH HTACCESS CLOSED'),
(7, '{\"TransactionType\":\"Pay Bill\",\"TransID\":\"PDT1E3R6PL\",\"TransTime\":\"20210429212735\",\"TransAmount\":\"10.00\",\"BusinessShortCode\":\"4072015\",\"BillRefNumber\":\"32976441\",\"InvoiceNumber\":\"\",\"OrgAccountBalance\":\"794.00\",\"ThirdPartyTransID\":\"\",\"MSISDN\":\"254725227513\",\"FirstName\":\"BENEDICT\",\"MiddleName\":\"OUMA\",\"LastName\":\"OURU\"}', 'Pay Bill', 'PDT1E3R6PL', '794.00', '', '', '10.00', 'BENEDICT', 'OURU', 'OUMA', '{\"status\":true,\"formattedPhone\":\"254725227513\"}', '254725227513', '4072015', '32976441'),
(8, '{\"TransactionType\":\"Pay Bill\",\"TransID\":\"PDT3E3XFPX\",\"TransTime\":\"20210429213223\",\"TransAmount\":\"10.00\",\"BusinessShortCode\":\"4072015\",\"BillRefNumber\":\"32976441\",\"InvoiceNumber\":\"\",\"OrgAccountBalance\":\"804.00\",\"ThirdPartyTransID\":\"\",\"MSISDN\":\"254725227513\",\"FirstName\":\"BENEDICT\",\"MiddleName\":\"OUMA\",\"LastName\":\"OURU\"}', 'Pay Bill', 'PDT3E3XFPX', '804.00', '', '', '10.00', 'BENEDICT', 'OURU', 'OUMA', '{\"status\":true,\"formattedPhone\":\"254725227513\"}', '254725227513', '4072015', '32976441'),
(9, '{\"TransactionType\":\"Pay Bill\",\"TransID\":\"PDT7E42KC5\",\"TransTime\":\"20210429213636\",\"TransAmount\":\"10.00\",\"BusinessShortCode\":\"4072015\",\"BillRefNumber\":\"32976441\",\"InvoiceNumber\":\"\",\"OrgAccountBalance\":\"814.00\",\"ThirdPartyTransID\":\"\",\"MSISDN\":\"254725227513\",\"FirstName\":\"BENEDICT\",\"MiddleName\":\"OUMA\",\"LastName\":\"OURU\"}', 'Pay Bill', 'PDT7E42KC5', '814.00', '', '', '10.00', 'BENEDICT', 'OURU', 'OUMA', '{\"status\":true,\"formattedPhone\":\"254725227513\"}', '254725227513', '4072015', '32976441'),
(10, '{\"TransactionType\":\"Pay Bill\",\"TransID\":\"PDT1E4A2VP\",\"TransTime\":\"20210429214252\",\"TransAmount\":\"1.00\",\"BusinessShortCode\":\"4072015\",\"BillRefNumber\":\"32976441\",\"InvoiceNumber\":\"\",\"OrgAccountBalance\":\"815.00\",\"ThirdPartyTransID\":\"\",\"MSISDN\":\"254725227513\",\"FirstName\":\"BENEDICT\",\"MiddleName\":\"OUMA\",\"LastName\":\"OURU\"}', 'Pay Bill', 'PDT1E4A2VP', '815.00', '', '', '1.00', 'BENEDICT', 'OURU', 'OUMA', '{\"status\":true,\"formattedPhone\":\"254725227513\"}', '254725227513', '4072015', '32976441'),
(11, '{\"TransactionType\":\"Pay Bill\",\"TransID\":\"PDT5E4DHFR\",\"TransTime\":\"20210429214557\",\"TransAmount\":\"1.00\",\"BusinessShortCode\":\"4072015\",\"BillRefNumber\":\"32976441\",\"InvoiceNumber\":\"\",\"OrgAccountBalance\":\"816.00\",\"ThirdPartyTransID\":\"\",\"MSISDN\":\"254725227513\",\"FirstName\":\"BENEDICT\",\"MiddleName\":\"OUMA\",\"LastName\":\"OURU\"}', 'Pay Bill', 'PDT5E4DHFR', '816.00', '', '', '1.00', 'BENEDICT', 'OURU', 'OUMA', '{\"status\":true,\"formattedPhone\":\"254725227513\"}', '254725227513', '4072015', '32976441'),
(12, '{\"TransactionType\":\"Pay Bill\",\"TransID\":\"PDT4E4GQPE\",\"TransTime\":\"20210429214845\",\"TransAmount\":\"1.00\",\"BusinessShortCode\":\"4072015\",\"BillRefNumber\":\"32976441\",\"InvoiceNumber\":\"\",\"OrgAccountBalance\":\"817.00\",\"ThirdPartyTransID\":\"\",\"MSISDN\":\"254725227513\",\"FirstName\":\"BENEDICT\",\"MiddleName\":\"OUMA\",\"LastName\":\"OURU\"}', 'Pay Bill', 'PDT4E4GQPE', '817.00', '', '', '1.00', 'BENEDICT', 'OURU', 'OUMA', '{\"status\":true,\"formattedPhone\":\"254725227513\"}', '254725227513', '4072015', '32976441'),
(13, '{\"TransactionType\":\"Pay Bill\",\"TransID\":\"PDT2E4I0JC\",\"TransTime\":\"20210429214947\",\"TransAmount\":\"1.00\",\"BusinessShortCode\":\"4072015\",\"BillRefNumber\":\"32976441\",\"InvoiceNumber\":\"\",\"OrgAccountBalance\":\"818.00\",\"ThirdPartyTransID\":\"\",\"MSISDN\":\"254725227513\",\"FirstName\":\"BENEDICT\",\"MiddleName\":\"OUMA\",\"LastName\":\"OURU\"}', 'Pay Bill', 'PDT2E4I0JC', '818.00', '', '', '1.00', 'BENEDICT', 'OURU', 'OUMA', '{\"status\":true,\"formattedPhone\":\"254725227513\"}', '254725227513', '4072015', '32976441'),
(14, '{\"TransactionType\":\"Pay Bill\",\"TransID\":\"PDT5E4NVIP\",\"TransTime\":\"20210429215513\",\"TransAmount\":\"1.00\",\"BusinessShortCode\":\"4072015\",\"BillRefNumber\":\"32976441\",\"InvoiceNumber\":\"\",\"OrgAccountBalance\":\"819.00\",\"ThirdPartyTransID\":\"\",\"MSISDN\":\"254725227513\",\"FirstName\":\"BENEDICT\",\"MiddleName\":\"OUMA\",\"LastName\":\"OURU\"}', 'Pay Bill', 'PDT5E4NVIP', '819.00', '', '', '1.00', 'BENEDICT', 'OURU', 'OUMA', '{\"status\":true,\"formattedPhone\":\"254725227513\"}', '254725227513', '4072015', '32976441'),
(15, 'null', '', '', '', '', '', '', '', '', '', '{\"status\":false,\"formattedPhone\":\"\"}', '', '', ''),
(16, '{\"TransactionType\":\"Pay Bill\",\"TransID\":\"PDT6E4X848\",\"TransTime\":\"20210429220418\",\"TransAmount\":\"1.00\",\"BusinessShortCode\":\"4072015\",\"BillRefNumber\":\"32976441\",\"InvoiceNumber\":\"\",\"OrgAccountBalance\":\"820.00\",\"ThirdPartyTransID\":\"\",\"MSISDN\":\"254725227513\",\"FirstName\":\"BENEDICT\",\"MiddleName\":\"OUMA\",\"LastName\":\"OURU\"}', 'Pay Bill', 'PDT6E4X848', '820.00', '', '', '1.00', 'BENEDICT', 'OURU', 'OUMA', '{\"status\":true,\"formattedPhone\":\"254725227513\"}', '254725227513', '4072015', '32976441'),
(17, '{\"TransactionType\":\"Pay Bill\",\"TransID\":\"PE21I7S57B\",\"TransTime\":\"20210502233408\",\"TransAmount\":\"10.00\",\"BusinessShortCode\":\"4072015\",\"BillRefNumber\":\"32976441\",\"InvoiceNumber\":\"\",\"OrgAccountBalance\":\"20.00\",\"ThirdPartyTransID\":\"\",\"MSISDN\":\"254725227513\",\"FirstName\":\"BENEDICT\",\"MiddleName\":\"OUMA\",\"LastName\":\"OURU\"}', 'Pay Bill', 'PE21I7S57B', '20.00', '', '', '10.00', 'BENEDICT', 'OURU', 'OUMA', '{\"status\":true,\"formattedPhone\":\"254725227513\"}', '254725227513', '4072015', '32976441'),
(18, '{\"TransactionType\":\"Pay Bill\",\"TransID\":\"PE29I7UJUZ\",\"TransTime\":\"20210502234429\",\"TransAmount\":\"1.00\",\"BusinessShortCode\":\"4072015\",\"BillRefNumber\":\"32976441\",\"InvoiceNumber\":\"\",\"OrgAccountBalance\":\"21.00\",\"ThirdPartyTransID\":\"\",\"MSISDN\":\"254725227513\",\"FirstName\":\"BENEDICT\",\"MiddleName\":\"OUMA\",\"LastName\":\"OURU\"}', 'Pay Bill', 'PE29I7UJUZ', '21.00', '', '', '1.00', 'BENEDICT', 'OURU', 'OUMA', '{\"status\":true,\"formattedPhone\":\"254725227513\"}', '254725227513', '4072015', '32976441'),
(19, '{\"TransactionType\":\"Pay Bill\",\"TransID\":\"PES0GK8LVE\",\"TransTime\":\"20210528132512\",\"TransAmount\":\"10.00\",\"BusinessShortCode\":\"4072015\",\"BillRefNumber\":\"Prycely Group TopUp\",\"InvoiceNumber\":\"\",\"OrgAccountBalance\":\"10.00\",\"ThirdPartyTransID\":\"\",\"MSISDN\":\"254795712505\",\"FirstName\":\"BENEDICT\",\"MiddleName\":\"OUMA\",\"LastName\":\"OURU\"}', 'Pay Bill', 'PES0GK8LVE', '10.00', '', '', '10.00', 'BENEDICT', 'OURU', 'OUMA', '{\"status\":true,\"formattedPhone\":\"254795712505\"}', '254795712505', '4072015', 'PRYCELY GROUP TOPUP'),
(20, '{\"TransactionType\":\"Pay Bill\",\"TransID\":\"PES2GKKE98\",\"TransTime\":\"20210528133206\",\"TransAmount\":\"10.00\",\"BusinessShortCode\":\"4072015\",\"BillRefNumber\":\"Prycely Group TopUp\",\"InvoiceNumber\":\"\",\"OrgAccountBalance\":\"20.00\",\"ThirdPartyTransID\":\"\",\"MSISDN\":\"254795712505\",\"FirstName\":\"BENEDICT\",\"MiddleName\":\"OUMA\",\"LastName\":\"OURU\"}', 'Pay Bill', 'PES2GKKE98', '20.00', '', '', '10.00', 'BENEDICT', 'OURU', 'OUMA', '{\"status\":true,\"formattedPhone\":\"254795712505\"}', '254795712505', '4072015', 'PRYCELY GROUP TOPUP'),
(21, '{\"TransactionType\":\"Pay Bill\",\"TransID\":\"PES6GL4F1O\",\"TransTime\":\"20210528134343\",\"TransAmount\":\"10.00\",\"BusinessShortCode\":\"4072015\",\"BillRefNumber\":\"Prycely Group TopUp\",\"InvoiceNumber\":\"\",\"OrgAccountBalance\":\"30.00\",\"ThirdPartyTransID\":\"\",\"MSISDN\":\"254795712505\",\"FirstName\":\"BENEDICT\",\"MiddleName\":\"OUMA\",\"LastName\":\"OURU\"}', 'Pay Bill', 'PES6GL4F1O', '30.00', '', '', '10.00', 'BENEDICT', 'OURU', 'OUMA', '{\"status\":true,\"formattedPhone\":\"254795712505\"}', '254795712505', '4072015', 'PRYCELY GROUP TOPUP'),
(22, '{\"TransactionType\":\"Pay Bill\",\"TransID\":\"PES8GPP69W\",\"TransTime\":\"20210528151949\",\"TransAmount\":\"10.00\",\"BusinessShortCode\":\"4072015\",\"BillRefNumber\":\"Prycely Group TopUp\",\"InvoiceNumber\":\"\",\"OrgAccountBalance\":\"40.00\",\"ThirdPartyTransID\":\"\",\"MSISDN\":\"254795712505\",\"FirstName\":\"BENEDICT\",\"MiddleName\":\"OUMA\",\"LastName\":\"OURU\"}', 'Pay Bill', 'PES8GPP69W', '40.00', '', '', '10.00', 'BENEDICT', 'OURU', 'OUMA', '{\"status\":true,\"formattedPhone\":\"254795712505\"}', '254795712505', '4072015', 'PRYCELY GROUP TOPUP'),
(23, '{\"TransactionType\":\"Pay Bill\",\"TransID\":\"PES4GQ0G4C\",\"TransTime\":\"20210528152626\",\"TransAmount\":\"10.00\",\"BusinessShortCode\":\"4072015\",\"BillRefNumber\":\"Prycely Group TopUp\",\"InvoiceNumber\":\"\",\"OrgAccountBalance\":\"50.00\",\"ThirdPartyTransID\":\"\",\"MSISDN\":\"254795712505\",\"FirstName\":\"BENEDICT\",\"MiddleName\":\"OUMA\",\"LastName\":\"OURU\"}', 'Pay Bill', 'PES4GQ0G4C', '50.00', '', '', '10.00', 'BENEDICT', 'OURU', 'OUMA', '{\"status\":true,\"formattedPhone\":\"254795712505\"}', '254795712505', '4072015', 'PRYCELY GROUP TOPUP'),
(24, 'null', '', '', '', '', '', '', '', '', '', '{\"status\":false,\"formattedPhone\":\"\"}', '', '', ''),
(25, '{\"TransactionType\":\"Pay Bill\",\"TransID\":\"PFE34BTXMT\",\"TransTime\":\"20210614021004\",\"TransAmount\":\"10.00\",\"BusinessShortCode\":\"4072015\",\"BillRefNumber\":\"PrycelyTest\",\"InvoiceNumber\":\"\",\"OrgAccountBalance\":\"80.00\",\"ThirdPartyTransID\":\"\",\"MSISDN\":\"254725227513\",\"FirstName\":\"BENEDICT\",\"MiddleName\":\"OUMA\",\"LastName\":\"OURU\"}', 'Pay Bill', 'PFE34BTXMT', '80.00', '', '', '10.00', 'BENEDICT', 'OURU', 'OUMA', '{\"status\":true,\"formattedPhone\":\"254725227513\"}', '254725227513', '4072015', 'PRYCELYTEST'),
(26, '{\"TransactionType\":\"Pay Bill\",\"TransID\":\"PFE94C35H3\",\"TransTime\":\"20210614034256\",\"TransAmount\":\"1000.00\",\"BusinessShortCode\":\"4072015\",\"BillRefNumber\":\"Prycely Wallet TopUp\",\"InvoiceNumber\":\"\",\"OrgAccountBalance\":\"1080.00\",\"ThirdPartyTransID\":\"\",\"MSISDN\":\"254725227513\",\"FirstName\":\"BENEDICT\",\"MiddleName\":\"OUMA\",\"LastName\":\"OURU\"}', 'Pay Bill', 'PFE94C35H3', '1080.00', '', '', '1000.00', 'BENEDICT', 'OURU', 'OUMA', '{\"status\":true,\"formattedPhone\":\"254725227513\"}', '254725227513', '4072015', 'PRYCELY WALLET TOPUP');

-- --------------------------------------------------------

--
-- Table structure for table `the_people`
--

CREATE TABLE `the_people` (
  `the_person_id` int(11) NOT NULL,
  `the_person_email` varchar(1000) NOT NULL,
  `the_person_password` varchar(1000) NOT NULL,
  `the_person_phone` int(11) NOT NULL,
  `the_person_first_name` text NOT NULL,
  `the_person_last_name` text NOT NULL,
  `the_person_photo` varchar(1000) NOT NULL,
  `the_person_join` int(11) NOT NULL,
  `the_person_details_date` int(11) DEFAULT NULL,
  `the_person_deactivate_date` int(11) DEFAULT NULL,
  `the_person_verified` tinyint(1) NOT NULL DEFAULT 0,
  `the_person_country` text NOT NULL,
  `the_person_county` text NOT NULL,
  `the_person_city` text NOT NULL,
  `the_person_street` text NOT NULL,
  `the_person_address` text NOT NULL,
  `the_person_postal` text NOT NULL,
  `the_person_type` tinyint(1) NOT NULL DEFAULT 1,
  `the_person_tour` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `the_people`
--

INSERT INTO `the_people` (`the_person_id`, `the_person_email`, `the_person_password`, `the_person_phone`, `the_person_first_name`, `the_person_last_name`, `the_person_photo`, `the_person_join`, `the_person_details_date`, `the_person_deactivate_date`, `the_person_verified`, `the_person_country`, `the_person_county`, `the_person_city`, `the_person_street`, `the_person_address`, `the_person_postal`, `the_person_type`, `the_person_tour`) VALUES
(1, 'bo.kouru@gmail.com', '$2y$10$Lu3NfYlARxwcK7jud2P9a.L2NuG84KV1swQgg/ZT096MpF2ZIb8Oa', 0, 'Benedict', 'Ouma', '356a192b7913b04c54574d18c28d46e6395428ab.png', 1617443092, 1618738452, NULL, 1, 'US', 'Colorado', 'Denver', 'Denver, Colorado', '271', '19808', 1, 0),
(2, 'prycely@gmail.com', '$2y$10$7UZhHY0x7nwD2mGIX.dm3OaikoG8IC6Z2xpYlPMcCAayShLLJ/tsq', 0, 'Prycely', 'Admin', 'da39a3ee5e6b4b0d3255bfef95601890afd80709.jpg', 1622202267, 1622202725, NULL, 1, 'KE', 'Province', 'State', 'street', 'address', 'code', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `the_privates`
--

CREATE TABLE `the_privates` (
  `the_key` varchar(100) NOT NULL DEFAULT 'TrnEPlNA2DD32e81MwGuqFm4Buliif5c',
  `the_secret` varchar(100) NOT NULL DEFAULT 'qz9R5oXJAA3IH3yu',
  `the_app` int(11) NOT NULL,
  `the_passkey` varchar(1000) NOT NULL DEFAULT 'b87283b3be82ed37fdfbed3209156575757720419a85088aec920583d05bcabc'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `the_privates`
--

INSERT INTO `the_privates` (`the_key`, `the_secret`, `the_app`, `the_passkey`) VALUES
('TrnEPlNA2DD32e81MwGuqFm4Buliif5c', 'qz9R5oXJAA3IH3yu', 1, 'b87283b3be82ed37fdfbed3209156575757720419a85088aec920583d05bcabc'),
('a0rdeuPwoSqGv0HIlGBqZeMEocwIfjha', 'GC2ScUskImTOSaVR', 2, 'b87283b3be82ed37fdfbed3209156575757720419a85088aec920583d05bcabc'),
('H9sp7IZjvZofvKIqmbDMFGu39N95FOEj', 'Rv52lKuXA0jfHBgE', 3, 'mdlhTIiKm9B2y9gLxqSXvK/a7IPzGfCfLxU4lPcBMh4ZSiEuVElydgkofl6dJTbHv4rgdPPz4+16JoWWrG/g0rPv6QWlBLnUpAroZgIrN/vLHuMGPXpUVUDV/zNXLq6LppXfOTIRWTzFex2KpBqcQInl2/AXu2WAUN+l3kp+b8S/cEgAF0vGmH8qKS210W1fguTX11GxVdR+hhCoJSioCVtKYeRRyJ7IbgJUd1P7LkkCicM0QMP6A6pa6MWqfS14uHZhziQZPkjgZCOIuRx7MHHDebyjOPR4LEtYO9c0/1A4tBpVPCdOT+vtUJ1I5jBbg0ipKTBv63dM0FK9H1y2Cw==');

-- --------------------------------------------------------

--
-- Table structure for table `the_projects`
--

CREATE TABLE `the_projects` (
  `the_project_id` int(11) NOT NULL,
  `the_project_title` text NOT NULL,
  `the_project_description` varchar(10000) NOT NULL,
  `the_project_amount` int(11) NOT NULL,
  `the_project_status` tinyint(1) NOT NULL DEFAULT 0,
  `the_project_start` int(11) NOT NULL,
  `the_project_end` int(11) DEFAULT NULL,
  `the_project_creator` int(11) NOT NULL,
  `the_project_currency` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `the_stk`
--

CREATE TABLE `the_stk` (
  `the_stk_id` int(11) NOT NULL,
  `mpesa_trans_id` varchar(1000) NOT NULL,
  `merchant_req_id` varchar(1000) NOT NULL,
  `checkout_req_id` varchar(1000) NOT NULL,
  `response_code` varchar(1000) NOT NULL,
  `response_desc` varchar(1000) NOT NULL,
  `cust_message` varchar(1000) NOT NULL,
  `status` text NOT NULL,
  `response_result_code` text NOT NULL,
  `response_result_desc` varchar(1000) NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `the_stk`
--

INSERT INTO `the_stk` (`the_stk_id`, `mpesa_trans_id`, `merchant_req_id`, `checkout_req_id`, `response_code`, `response_desc`, `cust_message`, `status`, `response_result_code`, `response_result_desc`, `phone`) VALUES
(1, 'PDT7DMW2U3', '8001-5896884-1', 'ws_CO_29042021165620694678', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '0', 'The service request is processed successfully.', '254725227513'),
(2, '', '16308-3887449-1', 'ws_CO_29042021170135085474', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254725227513'),
(3, 'PDT1DN8VAB', '8633-5425097-1', 'ws_CO_29042021170248895199', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '0', 'The service request is processed successfully.', '254725227513'),
(4, 'PDT3DNSW3J', '46421-6004201-1', 'ws_CO_29042021171250280656', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '0', 'The service request is processed successfully.', '254725227513'),
(5, '', '14368-3902114-1', 'ws_CO_29042021171351786365', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254725227513'),
(6, '', '72821-3891702-1', 'ws_CO_29042021171556300942', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254725227513'),
(7, 'PDT8DNZV2E', '46433-6010303-1', 'ws_CO_29042021171615372203', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '0', 'The service request is processed successfully.', '254725778511'),
(8, '', '22238-2218260-1', 'ws_CO_29042021211801119189', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254725227513'),
(9, 'PDT1E3L7ZL', '22252-2226846-1', 'ws_CO_29042021212251634735', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '0', 'The service request is processed successfully.', '254725227513'),
(10, 'PDT1E3R6PL', '46424-6448583-1', 'ws_CO_29042021212729894488', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '0', 'The service request is processed successfully.', '254725227513'),
(11, 'PDT3E3XFPX', '46422-6457202-1', 'ws_CO_29042021213217061529', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '0', 'The service request is processed successfully.', '254725227513'),
(12, 'PDT7E42KC5', '8629-5901031-1', 'ws_CO_29042021213629537514', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '0', 'The service request is processed successfully.', '254725227513'),
(13, 'PDT1E4A2VP', '124593-5959785-1', 'ws_CO_29042021214243088861', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '0', 'The service request is processed successfully.', '254725227513'),
(14, 'PDT5E4DHFR', '1012-4379005-1', 'ws_CO_29042021214550802949', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '0', 'The service request is processed successfully.', '254725227513'),
(15, 'PDT4E4GQPE', '46421-6485104-1', 'ws_CO_29042021214839447766', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '0', 'The service request is processed successfully.', '254725227513'),
(16, 'PDT2E4I0JC', '8641-5923255-1', 'ws_CO_29042021214937603525', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '0', 'The service request is processed successfully.', '254725227513'),
(17, 'PDT5E4NVIP', '92303-4392327-1', 'ws_CO_29042021215507430084', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '0', 'The service request is processed successfully.', '254725227513'),
(18, 'PDT6E4X848', '92302-4408120-1', 'ws_CO_29042021220412353458', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '0', 'The service request is processed successfully.', '254725227513'),
(19, '', '16306-9371338-1', 'ws_CO_02052021233225719064', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254725227513'),
(20, 'PE21I7S57B', '8019-11291300-1', 'ws_CO_02052021233401590592', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '0', 'The service request is processed successfully.', '254725227513'),
(21, 'PE29I7UJUZ', '46422-11486764-1', 'ws_CO_02052021234423452817', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '0', 'The service request is processed successfully.', '254725227513'),
(22, '', '8012-18325905-1', 'ws_CO_07052021031016247088', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254725227513'),
(23, '', '124608-18035902-1', 'ws_CO_07052021031031536792', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254725227513'),
(24, '', '16305-16540263-1', 'ws_CO_07052021031056558329', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254725227513'),
(25, '', '124598-18037094-1', 'ws_CO_07052021031105841998', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254725227513'),
(26, '', '14359-16576991-1', 'ws_CO_07052021104901639760', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254725227513'),
(27, '', '92301-16521070-1', 'ws_CO_07052021031150314483', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254725227513'),
(28, '', '100137-696185-1', 'ws_CO_28052021125722420936', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254725227513'),
(29, '', '6053-345182-1', 'ws_CO_28052021125740330180', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254725227513'),
(30, '', '7761-11987487-1', 'ws_CO_28052021125748734541', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254725227513'),
(31, '', '10889-11531034-1', 'ws_CO_28052021125812046959', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254725227513'),
(32, '', '14240-11811034-1', 'ws_CO_28052021125837052126', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254725227513'),
(33, '', '95503-1551906-1', 'ws_CO_28052021125857505020', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254725227513'),
(34, '', '2504-11528352-1', 'ws_CO_28052021125924736302', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254725227513'),
(35, '', '6062-348088-1', 'ws_CO_28052021125948913034', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254795712505'),
(36, '', '2517-11530311-1', 'ws_CO_28052021130054995299', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254795712505'),
(37, '', '100124-701285-1', 'ws_CO_28052021130109333292', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254795712505'),
(38, '', '61927-11682593-1', 'ws_CO_28052021130141917826', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254795712505'),
(39, '', '2520-11533195-1', 'ws_CO_28052021130312313621', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254795712505'),
(40, '', '14230-11821392-1', 'ws_CO_28052021130636516953', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254795712505'),
(41, '', '90140-11694791-1', 'ws_CO_28052021130807771625', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254795712505'),
(42, '', '95504-1564694-1', 'ws_CO_28052021130847052509', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254795712505'),
(43, '', '10876-11545400-1', 'ws_CO_28052021130924282718', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254795712505'),
(44, '', '90154-11697627-1', 'ws_CO_28052021131016409137', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254795712505'),
(45, '', '90146-11697917-1', 'ws_CO_28052021131030530519', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254790494969'),
(46, '', '90155-11698647-1', 'ws_CO_28052021131103916877', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254721303166'),
(47, '', '100135-714887-1', 'ws_CO_28052021131136680391', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254704272379'),
(48, '', '95492-1568735-1', 'ws_CO_28052021131150252975', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254790494969'),
(49, '', '9080-12010086-1', 'ws_CO_28052021131450208057', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254790494969'),
(50, '', '2506-11550048-1', 'ws_CO_28052021131620697326', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254704272379'),
(51, '', '100133-723899-1', 'ws_CO_28052021131830214705', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254704272379'),
(52, '', '100136-724424-1', 'ws_CO_28052021131856100013', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254790494969'),
(53, '', '61940-11705365-1', 'ws_CO_28052021131921123732', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254795712505'),
(54, '', '9064-12017776-1', 'ws_CO_28052021132042914452', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254795712505'),
(55, '', '2514-11556008-1', 'ws_CO_28052021132100916104', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254795712505'),
(56, '', '95508-1585464-1', 'ws_CO_28052021132439411088', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254708920430'),
(57, 'PES0GK8LVE', '95503-1586076-1', 'ws_CO_28052021132507636314', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '0', 'The service request is processed successfully.', '254795712505'),
(58, '', '6064-384376-1', 'ws_CO_28052021132744197237', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254708920430'),
(59, 'PES2GKKE98', '2521-11570190-1', 'ws_CO_28052021133159856568', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '0', 'The service request is processed successfully.', '254795712505'),
(60, 'PES6GL4F1O', '7763-12047770-1', 'ws_CO_28052021134335757554', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '0', 'The service request is processed successfully.', '254795712505'),
(61, '', '95499-1665402-1', 'ws_CO_28052021142317498763', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254790494969'),
(62, 'PES8GPP69W', '61937-11868055-1', 'ws_CO_28052021151935607368', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '0', 'The service request is processed successfully.', '254795712505'),
(63, 'PES4GQ0G4C', '6057-546143-1', 'ws_CO_28052021152621803003', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '0', 'The service request is processed successfully.', '254795712505'),
(64, '', '9065-20565175-1', 'ws_CO_02062021213256799280', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254713640924'),
(65, '', '100130-9230983-1', 'ws_CO_02062021213344411529', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254713640924'),
(66, '', '95498-10094732-1', 'ws_CO_02062021213430359592', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254713640924'),
(67, '', '90146-20177423-1', 'ws_CO_02062021213507342248', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254713640924'),
(68, '', '61929-20174424-1', 'ws_CO_02062021213531012769', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254713640924'),
(69, '', '10893-19926109-1', 'ws_CO_02062021213610039741', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254725227513'),
(70, '', '9071-20570155-1', 'ws_CO_02062021213639897522', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254725227513'),
(71, '', '90148-20180754-1', 'ws_CO_02062021213736305852', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254725227513'),
(72, '', '2520-19926919-1', 'ws_CO_02062021213806374227', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254713640924'),
(73, '', '9068-20576442-1', 'ws_CO_02062021214125042772', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254713640924'),
(74, '', '95508-10104432-1', 'ws_CO_02062021214146111928', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254713640924'),
(75, '', '95508-10105541-1', 'ws_CO_02062021214235932990', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254795712505'),
(76, '', '61937-20296796-1', 'ws_CO_02062021234822786181', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254790494969'),
(77, '', '6052-9019422-1', 'ws_CO_02062021235307099748', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254704272379'),
(78, '', '7758-20699532-1', 'ws_CO_02062021235752375920', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254704272379'),
(79, '', '2511-20049388-1', 'ws_CO_02062021235811894286', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254790494969'),
(80, '', '6067-9023625-1', 'ws_CO_03062021000042601953', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254704272379'),
(81, '', '61933-20304090-1', 'ws_CO_03062021000059874706', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254704272379'),
(82, '', '7754-20701556-1', 'ws_CO_03062021000136778998', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254725227513'),
(83, '', '6059-9025310-1', 'ws_CO_03062021000352319653', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254725227513'),
(84, '', '61935-20309190-1', 'ws_CO_03062021001029412388', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254790494969'),
(85, '', '2519-20066063-1', 'ws_CO_03062021003241933954', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254790494969'),
(86, '', '90149-20323689-1', 'ws_CO_03062021003328584206', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254790494969'),
(87, '', '90157-20324067-1', 'ws_CO_03062021003415922837', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254713640924'),
(88, '', '95501-10242422-1', 'ws_CO_03062021003505533533', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254790494969'),
(89, '', '100132-9379153-1', 'ws_CO_03062021003529798251', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254704272379'),
(90, '', '9064-20717217-1', 'ws_CO_03062021003618507425', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254746942784'),
(91, '', '2518-20068045-1', 'ws_CO_03062021003710383139', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254746942784'),
(92, '', '7752-20719161-1', 'ws_CO_03062021003723220295', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254704272379'),
(93, '', '2509-20068721-1', 'ws_CO_03062021003849403411', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254790494969'),
(94, '', '2520-20069044-1', 'ws_CO_03062021003942379224', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254790494969'),
(95, '', '7754-20721297-1', 'ws_CO_03062021004215421201', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254790494969'),
(96, '', '95508-10246343-1', 'ws_CO_03062021004405488532', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254716095990'),
(97, '', '100129-9383056-1', 'ws_CO_03062021004442157587', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254790494969'),
(98, '', '90149-20329752-1', 'ws_CO_03062021004708021317', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254790970833'),
(99, '', '14245-20539653-1', 'ws_CO_03062021004752207828', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254716873099'),
(100, '', '6067-9045972-1', 'ws_CO_03062021004809331023', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254716873099'),
(101, '', '7751-20724241-1', 'ws_CO_03062021004905563624', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254716873099'),
(102, '', '7766-20724614-1', 'ws_CO_03062021005000865204', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254717228163'),
(103, '', '10883-20076506-1', 'ws_CO_03062021005058705858', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254715507801'),
(104, '', '9088-20724283-1', 'ws_CO_03062021005245290836', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254114629931'),
(105, '', '2517-20074629-1', 'ws_CO_03062021005318077178', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '', '', '254114629931'),
(106, 'PFE94C35H3', '81491-4401517-1', 'ws_CO_14062021034251236848', '0', 'Success. Request accepted for processing', 'Success. Request accepted for processing', '1', '0', 'The service request is processed successfully.', '254725227513');

-- --------------------------------------------------------

--
-- Table structure for table `the_transactions`
--

CREATE TABLE `the_transactions` (
  `the_transaction_id` int(11) NOT NULL,
  `the_transaction_user` int(11) NOT NULL,
  `the_transaction_date` int(11) NOT NULL,
  `the_transaction_start` int(11) NOT NULL,
  `the_transaction_end` int(11) NOT NULL,
  `the_transaction_amount` int(11) NOT NULL,
  `the_transaction_status` tinyint(4) NOT NULL,
  `the_transaction_currency` text NOT NULL,
  `the_transaction_reference` varchar(100) NOT NULL,
  `the_transaction_category` tinyint(4) DEFAULT NULL,
  `the_transaction_level` tinyint(4) NOT NULL,
  `the_transaction_type` tinyint(4) NOT NULL,
  `the_transaction_wallet` int(11) DEFAULT NULL,
  `the_transaction_group` int(11) DEFAULT NULL,
  `the_transaction_purpose` text NOT NULL,
  `the_transaction_comment` text NOT NULL,
  `the_transaction_mode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `the_transactions`
--

INSERT INTO `the_transactions` (`the_transaction_id`, `the_transaction_user`, `the_transaction_date`, `the_transaction_start`, `the_transaction_end`, `the_transaction_amount`, `the_transaction_status`, `the_transaction_currency`, `the_transaction_reference`, `the_transaction_category`, `the_transaction_level`, `the_transaction_type`, `the_transaction_wallet`, `the_transaction_group`, `the_transaction_purpose`, `the_transaction_comment`, `the_transaction_mode`) VALUES
(1, 1, 1619704586, 1619704586, 1619704586, 1, 1, 'KES', 'PDT7DMW2U3', NULL, 1, 1, 1, NULL, 'deposit', 'Showing STK', 'Mpesa STK'),
(2, 1, 1619704895, 1619704895, 1619704895, 10, 2, 'KES', '16308-3887449-1', NULL, 1, 1, 1, NULL, 'deposit', 'Showing STK', 'Mpesa STK'),
(3, 1, 1619704969, 1619704969, 1619704976, 10, 1, 'KES', 'PDT1DN8VAB', NULL, 1, 1, 1, NULL, 'deposit', 'Showing STK', 'Mpesa STK'),
(4, 1, 1619705570, 1619705570, 1619705577, 10, 1, 'KES', 'PDT3DNSW3J', NULL, 1, 1, 1, NULL, 'deposit', 'Showing STK', 'Mpesa STK'),
(5, 1, 1619705632, 1619705632, 1619705632, 100, 2, 'KES', '14368-3902114-1', NULL, 1, 1, 1, NULL, 'deposit', 'Showing STK', 'Mpesa STK'),
(6, 1, 1619705756, 1619705756, 1619705756, 100, 2, 'KES', '72821-3891702-1', NULL, 1, 1, 1, NULL, 'deposit', 'Showing STK', 'Mpesa STK'),
(7, 1, 1619705775, 1619705775, 1619705786, 100, 1, 'KES', 'PDT8DNZV2E', NULL, 1, 1, 1, NULL, 'deposit', 'Showing STK', 'Mpesa STK'),
(8, 1, 1619720281, 1619720281, 1619720281, 10, 2, 'KES', '22238-2218260-1', NULL, 1, 1, 1, NULL, 'deposit', 'Showing STK', 'Mpesa STK'),
(9, 1, 1619720572, 1619720572, 1619720581, 10, 1, 'KES', 'PDT1E3L7ZL', NULL, 1, 1, 1, NULL, 'deposit', 'Showing STK', 'Mpesa STK'),
(10, 1, 1619720796, 1619720796, 1619720796, 10, 1, 'KES', 'PDT3E3PV0P', 0, 0, 1, 0, 0, 'deposit', 'Paybill Payment', 'Mpesa Paybill'),
(11, 1, 1619720850, 1619720850, 1619720850, 10, 2, 'KES', '46424-6448583-1', NULL, 1, 1, 1, NULL, 'deposit', 'Showing STK', 'Mpesa STK'),
(12, 0, 1619720856, 1619720856, 1619720856, 10, 1, 'KES', 'PDT1E3R6PL', 0, 0, 1, 0, 0, 'deposit', 'Paybill Payment', 'Mpesa Paybill'),
(13, 1, 1619721137, 1619721137, 1619721145, 10, 1, 'KES', 'PDT3E3XFPX', NULL, 1, 1, 1, NULL, 'deposit', 'Showing STK', 'Mpesa STK'),
(14, 1, 1619721389, 1619721389, 1619721389, 10, 2, 'KES', '8629-5901031-1', NULL, 1, 1, 1, NULL, 'deposit', 'Showing STK', 'Mpesa STK'),
(15, 0, 1619721397, 1619721397, 1619721397, 10, 1, 'KES', 'PDT7E42KC5', 0, 0, 1, 0, 0, 'deposit', 'Paybill Payment', 'Mpesa Paybill'),
(16, 1, 1619721763, 1619721763, 1619721763, 1, 2, 'KES', '124593-5959785-1', NULL, 1, 1, 1, NULL, 'deposit', 'Showing STK', 'Mpesa STK'),
(17, 0, 1619721774, 1619721774, 1619721774, 1, 1, 'KES', 'PDT1E4A2VP', 0, 0, 1, 0, 0, 'deposit', 'Paybill Payment', 'Mpesa Paybill'),
(18, 1, 1619721951, 1619721951, 1619721951, 1, 2, 'KES', '1012-4379005-1', NULL, 1, 1, 1, NULL, 'deposit', 'Showing STK', 'Mpesa STK'),
(19, 0, 1619721958, 1619721958, 1619721958, 1, 1, 'KES', 'PDT5E4DHFR', 0, 0, 1, 0, 0, 'deposit', 'Paybill Payment', 'Mpesa Paybill'),
(20, 1, 1619722119, 1619722119, 1619722127, 1, 1, 'KES', 'PDT4E4GQPE', NULL, 1, 1, 1, NULL, 'deposit', 'Showing STK', 'Mpesa STK'),
(21, 1, 1619722178, 1619722178, 1619722188, 1, 1, 'KES', 'PDT2E4I0JC', NULL, 1, 1, 1, NULL, 'KE Wallet Deposit', 'Showing STK', 'Mpesa STK'),
(22, 1, 1619722508, 1619722508, 1619722514, 1, 1, 'KES', 'PDT5E4NVIP', 0, 1, 1, 1, 0, 'KE Wallet Deposit', 'Showing STK', 'Mpesa STK'),
(23, 0, 1619722879, 1619722879, 1619722879, 0, 1, 'KES', '', 0, 0, 1, 0, 0, 'deposit', 'Paybill Payment', 'Mpesa Paybill'),
(24, 1, 1619723052, 1619723052, 1619723060, 1, 1, 'KES', 'PDT6E4X848', 0, 1, 1, 1, 0, 'KE Wallet Deposit', 'Showing STK', 'Mpesa STK'),
(25, 1, 1619987546, 1619987546, 1619987546, 10, 2, 'KES', '16306-9371338-1', 0, 1, 1, 1, 0, 'Money test bebe', 'Showing STK', 'Mpesa STK'),
(26, 1, 1619987641, 1619987641, 1619987649, 10, 1, 'KES', 'PE21I7S57B', 0, 1, 1, 1, 0, 'Money test bebe', 'Showing STK', 'Mpesa STK'),
(27, 1, 1619988263, 1619988263, 1619988271, 1, 1, 'KES', 'PE29I7UJUZ', 0, 1, 1, 1, 0, 'Tuma Shilingi', 'Showing STK', 'Mpesa STK'),
(28, 0, 1620346216, 1620346216, 1620346216, 20, 2, 'KES', '8012-18325905-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(29, 0, 1620346231, 1620346231, 1620346231, 20, 2, 'KES', '124608-18035902-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(30, 0, 1620346256, 1620346256, 1620346256, 20, 2, 'KES', '16305-16540263-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(31, 0, 1620346266, 1620346266, 1620346266, 10, 2, 'KES', '124598-18037094-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(32, 0, 1620346280, 1620346280, 1620346280, 10, 2, 'KES', '14359-16576991-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(33, 0, 1620346310, 1620346310, 1620346310, 100, 2, 'KES', '92301-16521070-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(34, 1, 1622195842, 1622195842, 1622195842, 10, 2, 'KES', '100137-696185-1', 0, 1, 1, 1, 0, 'Wallet Top Up', 'Showing STK', 'Mpesa STK'),
(35, 1, 1622195860, 1622195860, 1622195860, 10, 2, 'KES', '6053-345182-1', 0, 1, 1, 1, 0, 'Wallet Top Up', 'Showing STK', 'Mpesa STK'),
(36, 1, 1622195869, 1622195869, 1622195869, 10, 2, 'KES', '7761-11987487-1', 0, 1, 1, 1, 0, 'Wallet Top Up', 'Showing STK', 'Mpesa STK'),
(37, 1, 1622195892, 1622195892, 1622195892, 10, 2, 'KES', '10889-11531034-1', 0, 1, 1, 1, 0, 'Wallet Top Up', 'Showing STK', 'Mpesa STK'),
(38, 1, 1622195917, 1622195917, 1622195917, 10, 2, 'KES', '14240-11811034-1', 0, 1, 1, 1, 0, 'Wallet Top Up', 'Showing STK', 'Mpesa STK'),
(39, 1, 1622195937, 1622195937, 1622195937, 10, 2, 'KES', '95503-1551906-1', 0, 1, 1, 1, 0, 'Wallet', 'Showing STK', 'Mpesa STK'),
(40, 1, 1622195965, 1622195965, 1622195965, 100, 2, 'KES', '2504-11528352-1', 0, 1, 1, 1, 0, 'Wallet', 'Showing STK', 'Mpesa STK'),
(41, 1, 1622195989, 1622195989, 1622195989, 10, 2, 'KES', '6062-348088-1', 0, 1, 1, 1, 0, 'Wallet Top Up', 'Showing STK', 'Mpesa STK'),
(42, 1, 1622196055, 1622196055, 1622196055, 100, 2, 'KES', '2517-11530311-1', 0, 1, 1, 1, 0, 'Wallet', 'Showing STK', 'Mpesa STK'),
(43, 1, 1622196069, 1622196069, 1622196069, 10, 2, 'KES', '100124-701285-1', 0, 1, 1, 1, 0, 'Wallet', 'Showing STK', 'Mpesa STK'),
(44, 1, 1622196102, 1622196102, 1622196102, 100, 2, 'KES', '61927-11682593-1', 0, 1, 1, 1, 0, 'Wallet', 'Showing STK', 'Mpesa STK'),
(45, 1, 1622196192, 1622196192, 1622196192, 100, 2, 'KES', '2520-11533195-1', 0, 1, 1, 1, 0, 'Wallet', 'Showing STK', 'Mpesa STK'),
(46, 1, 1622196396, 1622196396, 1622196396, 100, 2, 'KES', '14230-11821392-1', 0, 1, 1, 1, 0, 'Wallet', 'Showing STK', 'Mpesa STK'),
(47, 1, 1622196488, 1622196488, 1622196488, 10000, 2, 'KES', '90140-11694791-1', 0, 1, 1, 1, 0, 'Wallet Top Up', 'Showing STK', 'Mpesa STK'),
(48, 1, 1622196527, 1622196527, 1622196527, 10000, 2, 'KES', '95504-1564694-1', 0, 1, 1, 1, 0, 'Wallet Top Up', 'Showing STK', 'Mpesa STK'),
(49, 1, 1622196564, 1622196564, 1622196564, 10000, 2, 'KES', '10876-11545400-1', 0, 1, 1, 1, 0, 'Wallet Top Up', 'Showing STK', 'Mpesa STK'),
(50, 1, 1622196616, 1622196616, 1622196616, 10000, 2, 'KES', '90154-11697627-1', 0, 1, 1, 1, 0, 'Wallet Top Up', 'Showing STK', 'Mpesa STK'),
(51, 1, 1622196631, 1622196631, 1622196631, 10000, 2, 'KES', '90146-11697917-1', 0, 1, 1, 1, 0, 'Wallet Top Up', 'Showing STK', 'Mpesa STK'),
(52, 1, 1622196664, 1622196664, 1622196664, 10000, 2, 'KES', '90155-11698647-1', 0, 1, 1, 1, 0, 'Wallet', 'Showing STK', 'Mpesa STK'),
(53, 1, 1622196697, 1622196697, 1622196697, 1000, 2, 'KES', '100135-714887-1', 0, 1, 1, 1, 0, 'Wallet', 'Showing STK', 'Mpesa STK'),
(54, 1, 1622196710, 1622196710, 1622196710, 1000, 2, 'KES', '95492-1568735-1', 0, 1, 1, 1, 0, 'Wallet', 'Showing STK', 'Mpesa STK'),
(55, 1, 1622196890, 1622196890, 1622196890, 1000, 2, 'KES', '9080-12010086-1', 0, 1, 1, 1, 0, 'Wallet', 'Showing STK', 'Mpesa STK'),
(56, 1, 1622196981, 1622196981, 1622196981, 1000, 2, 'KES', '2506-11550048-1', 0, 1, 1, 1, 0, 'Wallet', 'Showing STK', 'Mpesa STK'),
(57, 1, 1622197110, 1622197110, 1622197110, 1000, 2, 'KES', '100133-723899-1', 0, 1, 1, 1, 0, 'Wallet', 'Showing STK', 'Mpesa STK'),
(58, 1, 1622197136, 1622197136, 1622197136, 1000, 2, 'KES', '100136-724424-1', 0, 1, 1, 1, 0, 'Wallet', 'Showing STK', 'Mpesa STK'),
(59, 1, 1622197161, 1622197161, 1622197161, 1000, 2, 'KES', '61940-11705365-1', 0, 1, 1, 1, 0, 'Wallet', 'Showing STK', 'Mpesa STK'),
(60, 1, 1622197243, 1622197243, 1622197243, 10, 2, 'KES', '9064-12017776-1', 0, 1, 1, 1, 0, 'Wallet Top Up', 'Showing STK', 'Mpesa STK'),
(61, 1, 1622197261, 1622197261, 1622197261, 10, 2, 'KES', '2514-11556008-1', 0, 1, 1, 1, 0, 'Wallet Top Up', 'Showing STK', 'Mpesa STK'),
(62, 1, 1622197479, 1622197479, 1622197479, 10, 2, 'KES', '95508-1585464-1', 0, 1, 1, 1, 0, 'Wallet', 'Showing STK', 'Mpesa STK'),
(63, 1, 1622197507, 1622197507, 1622197514, 10, 1, 'KES', 'PES0GK8LVE', 0, 1, 1, 1, 0, 'Wallet Top Up', 'Showing STK', 'Mpesa STK'),
(64, 1, 1622197664, 1622197664, 1622197664, 1000, 2, 'KES', '6064-384376-1', 0, 1, 1, 1, 0, 'Wallet', 'Showing STK', 'Mpesa STK'),
(65, 1, 1622197920, 1622197920, 1622197927, 10, 1, 'KES', 'PES2GKKE98', 0, 1, 1, 1, 0, 'Group Top Up', 'Showing STK', 'Mpesa STK'),
(66, 1, 1622198616, 1622198616, 1622198625, 10, 1, 'KES', 'PES6GL4F1O', 0, 2, 1, 0, 1, 'Group Top Up', 'Showing STK', 'Mpesa STK'),
(67, 0, 1622200997, 1622200997, 1622200997, 10, 2, 'KES', '95499-1665402-1', 0, 1, 1, 1, 0, 'Wallet', 'Showing STK', 'Mpesa STK'),
(68, 2, 1622204375, 1622204375, 1622204390, 10, 1, 'KES', 'PES8GPP69W', 0, 1, 1, 4, 0, 'Wallet Top Up', 'Showing STK', 'Mpesa STK'),
(69, 2, 1622204782, 1622204782, 1622204788, 10, 1, 'KES', 'PES4GQ0G4C', 0, 2, 1, 0, 2, 'Group Top Up', 'Showing STK', 'Mpesa STK'),
(70, 0, 1622658777, 1622658777, 1622658777, 1, 2, 'KES', '9065-20565175-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(71, 0, 1622658824, 1622658824, 1622658824, 1, 2, 'KES', '100130-9230983-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(72, 0, 1622658870, 1622658870, 1622658870, 1000, 2, 'KES', '95498-10094732-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(73, 0, 1622658907, 1622658907, 1622658907, 1000, 2, 'KES', '90146-20177423-1', 0, 1, 1, 1, 0, 'something', 'Showing STK', 'Mpesa STK'),
(74, 0, 1622658932, 1622658932, 1622658932, 100, 2, 'KES', '61929-20174424-1', 0, 1, 1, 1, 0, 'something', 'Showing STK', 'Mpesa STK'),
(75, 0, 1622658970, 1622658970, 1622658970, 10000, 2, 'KES', '10893-19926109-1', 0, 1, 1, 1, 0, 'something', 'Showing STK', 'Mpesa STK'),
(76, 0, 1622659000, 1622659000, 1622659000, 10000, 2, 'KES', '9071-20570155-1', 0, 1, 1, 1, 0, 'something', 'Showing STK', 'Mpesa STK'),
(77, 0, 1622659056, 1622659056, 1622659056, 10000, 2, 'KES', '90148-20180754-1', 0, 1, 1, 1, 0, 'something', 'Showing STK', 'Mpesa STK'),
(78, 0, 1622659086, 1622659086, 1622659086, 1, 2, 'KES', '2520-19926919-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(79, 1, 1622659285, 1622659285, 1622659285, 1000, 2, 'KES', '9068-20576442-1', 0, 2, 1, 0, 1, 'Group Top Up', 'Showing STK', 'Mpesa STK'),
(80, 1, 1622659306, 1622659306, 1622659306, 1000, 2, 'KES', '95508-10104432-1', 0, 2, 1, 0, 1, 'Group Top Up', 'Showing STK', 'Mpesa STK'),
(81, 1, 1622659356, 1622659356, 1622659356, 1000, 2, 'KES', '95508-10105541-1', 0, 2, 1, 0, 1, 'Group Top Up', 'Showing STK', 'Mpesa STK'),
(82, 0, 1622666903, 1622666903, 1622666903, 1000, 2, 'KES', '61937-20296796-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(83, 0, 1622667187, 1622667187, 1622667187, 1000, 2, 'KES', '6052-9019422-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(84, 0, 1622667472, 1622667472, 1622667472, 1000, 2, 'KES', '7758-20699532-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(85, 0, 1622667492, 1622667492, 1622667492, 1000, 2, 'KES', '2511-20049388-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(86, 0, 1622667642, 1622667642, 1622667642, 1000, 2, 'KES', '6067-9023625-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(87, 1, 1622667660, 1622667660, 1622667660, 1000, 2, 'KES', '61933-20304090-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(88, 1, 1622667697, 1622667697, 1622667697, 10, 2, 'KES', '7754-20701556-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(89, 1, 1622667832, 1622667832, 1622667832, 10, 2, 'KES', '6059-9025310-1', 0, 1, 1, 1, 0, 'Wallet Top Up', 'Showing STK', 'Mpesa STK'),
(90, 0, 1622668214, 1622668214, 1622668214, 0, 1, 'KES', '', 0, 0, 1, 0, 0, '', 'Paybill Payment', 'Mpesa Paybill'),
(91, 1, 1622668229, 1622668229, 1622668229, 1000, 2, 'KES', '61935-20309190-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(92, 1, 1622669562, 1622669562, 1622669562, 1000, 2, 'KES', '2519-20066063-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(93, 1, 1622669608, 1622669608, 1622669608, 1000, 2, 'KES', '90149-20323689-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(94, 1, 1622669656, 1622669656, 1622669656, 1, 2, 'KES', '90157-20324067-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(95, 1, 1622669705, 1622669705, 1622669705, 1, 2, 'KES', '95501-10242422-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(96, 1, 1622669730, 1622669730, 1622669730, 1, 2, 'KES', '100132-9379153-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(97, 1, 1622669778, 1622669778, 1622669778, 1, 2, 'KES', '9064-20717217-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(98, 1, 1622669830, 1622669830, 1622669830, 1000, 2, 'KES', '2518-20068045-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(99, 1, 1622669843, 1622669843, 1622669843, 1000, 2, 'KES', '7752-20719161-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(100, 1, 1622669929, 1622669929, 1622669929, 1000, 2, 'KES', '2509-20068721-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(101, 1, 1622669982, 1622669982, 1622669982, 1000, 2, 'KES', '2520-20069044-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(102, 1, 1622670135, 1622670135, 1622670135, 1000, 2, 'KES', '7754-20721297-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(103, 1, 1622670245, 1622670245, 1622670245, 1000, 2, 'KES', '95508-10246343-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(104, 1, 1622670282, 1622670282, 1622670282, 1000, 2, 'KES', '100129-9383056-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(105, 1, 1622670428, 1622670428, 1622670428, 1000, 2, 'KES', '90149-20329752-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(106, 1, 1622670472, 1622670472, 1622670472, 1000, 2, 'KES', '14245-20539653-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(107, 1, 1622670489, 1622670489, 1622670489, 10, 2, 'KES', '6067-9045972-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(108, 1, 1622670546, 1622670546, 1622670546, 1000, 2, 'KES', '7751-20724241-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(109, 1, 1622670601, 1622670601, 1622670601, 1000, 2, 'KES', '7766-20724614-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(110, 1, 1622670658, 1622670658, 1622670658, 1000, 2, 'KES', '10883-20076506-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(111, 1, 1622670766, 1622670766, 1622670766, 1000, 2, 'KES', '9088-20724283-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(112, 1, 1622670798, 1622670798, 1622670798, 500, 2, 'KES', '2517-20074629-1', 0, 1, 1, 1, 0, 'deposit', 'Showing STK', 'Mpesa STK'),
(113, 1, 1623625806, 1623625806, 1623631181, 10, 1, 'KES', 'pfe34btxmt', 0, 2, 1, 0, 1, 'Prycely Top Up', 'Paybill Payment', 'Mpesa Paybill'),
(114, 1, 1623631371, 1623631371, 1623631378, 1000, 1, 'KES', 'PFE94C35H3', 0, 1, 1, 1, 0, 'Wallet Top Up', 'Showing STK', 'Mpesa STK');

-- --------------------------------------------------------

--
-- Table structure for table `the_wallets`
--

CREATE TABLE `the_wallets` (
  `the_wallet_id` int(11) NOT NULL,
  `the_wallet_user` int(11) NOT NULL,
  `the_wallet_currency` text NOT NULL,
  `the_wallet_balance` int(11) NOT NULL,
  `the_wallet_balance_pending` int(11) NOT NULL,
  `the_wallet_open_date` int(11) NOT NULL,
  `the_wallet_status` tinyint(4) NOT NULL,
  `the_wallet_close_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `the_wallets`
--

INSERT INTO `the_wallets` (`the_wallet_id`, `the_wallet_user`, `the_wallet_currency`, `the_wallet_balance`, `the_wallet_balance_pending`, `the_wallet_open_date`, `the_wallet_status`, `the_wallet_close_date`) VALUES
(1, 1, 'KES', 1206, 89396, 1618844296, 1, 0),
(2, 1, 'AUD', 0, 0, 1618844413, 1, 0),
(4, 2, 'KES', 10, 0, 1622203778, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `errors`
--
ALTER TABLE `errors`
  ADD PRIMARY KEY (`error_id`);

--
-- Indexes for table `the_activity_updates`
--
ALTER TABLE `the_activity_updates`
  ADD PRIMARY KEY (`the_update_id`);

--
-- Indexes for table `the_groups`
--
ALTER TABLE `the_groups`
  ADD PRIMARY KEY (`the_group_id`);

--
-- Indexes for table `the_group_activities`
--
ALTER TABLE `the_group_activities`
  ADD PRIMARY KEY (`the_activity_id`);

--
-- Indexes for table `the_group_members`
--
ALTER TABLE `the_group_members`
  ADD PRIMARY KEY (`the_member_id`);

--
-- Indexes for table `the_logins`
--
ALTER TABLE `the_logins`
  ADD PRIMARY KEY (`the_login_attempt`);

--
-- Indexes for table `the_paybill`
--
ALTER TABLE `the_paybill`
  ADD PRIMARY KEY (`the_paybill_id`);

--
-- Indexes for table `the_people`
--
ALTER TABLE `the_people`
  ADD PRIMARY KEY (`the_person_id`);

--
-- Indexes for table `the_privates`
--
ALTER TABLE `the_privates`
  ADD PRIMARY KEY (`the_app`);

--
-- Indexes for table `the_projects`
--
ALTER TABLE `the_projects`
  ADD PRIMARY KEY (`the_project_id`);

--
-- Indexes for table `the_stk`
--
ALTER TABLE `the_stk`
  ADD PRIMARY KEY (`the_stk_id`);

--
-- Indexes for table `the_transactions`
--
ALTER TABLE `the_transactions`
  ADD PRIMARY KEY (`the_transaction_id`);

--
-- Indexes for table `the_wallets`
--
ALTER TABLE `the_wallets`
  ADD PRIMARY KEY (`the_wallet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `errors`
--
ALTER TABLE `errors`
  MODIFY `error_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `the_activity_updates`
--
ALTER TABLE `the_activity_updates`
  MODIFY `the_update_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `the_groups`
--
ALTER TABLE `the_groups`
  MODIFY `the_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `the_group_activities`
--
ALTER TABLE `the_group_activities`
  MODIFY `the_activity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `the_group_members`
--
ALTER TABLE `the_group_members`
  MODIFY `the_member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `the_logins`
--
ALTER TABLE `the_logins`
  MODIFY `the_login_attempt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `the_paybill`
--
ALTER TABLE `the_paybill`
  MODIFY `the_paybill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `the_people`
--
ALTER TABLE `the_people`
  MODIFY `the_person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `the_privates`
--
ALTER TABLE `the_privates`
  MODIFY `the_app` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `the_projects`
--
ALTER TABLE `the_projects`
  MODIFY `the_project_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `the_stk`
--
ALTER TABLE `the_stk`
  MODIFY `the_stk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `the_transactions`
--
ALTER TABLE `the_transactions`
  MODIFY `the_transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `the_wallets`
--
ALTER TABLE `the_wallets`
  MODIFY `the_wallet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
