<?php

return array(
	'index_file' => false,
	'profiling'  => false,
	
	'language'			=> 'ja',
	'language_fallback'	=> 'en',
	'locale'			=> null,
	'encoding'			=> 'UTF-8',
	'default_timezone'	=> 'Asia/Tokyo',
	
	'log_threshold'		=> Fuel::L_DEBUG,
	'log_path'			=> '/var/log/fuelphp/',
	'log_date_format'	=> 'Y-m-d H:i:s',
	
	'security' => array(
		'csrf_autoload'				=> true,
		'csrf_autoload_methods'		=> array('post', 'put', 'delete'),
		'csrf_bad_request_on_fail'	=> false,
		'csrf_token_key'			=> 'csrf_token',
		'csrf_expiration'			=> 0,
		'token_salt'				=> 'Zn5MV956RPEtGU5JpnO5rW68zTpV4jC9iXtgR1K2',
		'allow_x_headers'			=> false,
		
		'uri_filter'	=> array('htmlentities'),
		'input_filter'  => array(),
		'output_filter'	=> array('Security::htmlentities'),
		
		'htmlentities_flags'			=> ENT_QUOTES,
		'htmlentities_double_encode'	=> false,
		'auto_filter_output'			=> true,
		'whitelisted_classes'			=> array(
			'Fuel\\Core\\Presenter',
			'Fuel\\Core\\Response',
			'Fuel\\Core\\View',
			'Fuel\\Core\\ViewModel',
			'Closure',
		),
	),

	'module_paths' => array(
		APPPATH.'modules'.DS
	),
	
	'package_paths' => array(
		PKGPATH,
	),
	
	'always_load' => array(
		'packages' => array(
			'orm',
		),
		'language' => array(
			'title',
			'validation'
		),
	)
);
