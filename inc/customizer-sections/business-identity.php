<?php
/**
 * Add the Site Identity Options section.
 */

keramas_Kirki::add_panel( 'business_identity', array(
	'title' => esc_html__( 'Business Identity', 'keramas' ),
	'icon'  => 'dashicons-tide',
) );



/********************************
 * Add the Menu Options section
******************************* */

keramas_Kirki::add_section( 'identity_logo', [
	'title'      => esc_attr__( 'Logo', 'keramas' ),
	'capability' => 'edit_theme_options',
	'panel'      => 'business_identity',
	'icon'       => 'dashicons-tide',
]);

	keramas_Kirki::add_field( 'keramas', [
		'type'        => 'image',
		'settings'    => 'fsc_logo',
		'option_type' => 'option',
		'option_name' => 'fsc_options',
		'label'       => __( 'Logo', 'keramas' ),
		'description' => __( 'Add or edit your logo here', 'keramas' ),
		'section'     => 'identity_logo',
		'default'     => '',
		'choices'     => [
			'save_as' => 'id',
		],
	]);


	keramas_Kirki::add_field( 'keramas', [
		'type'     => 'slider',
		'settings' => 'keramas_logo_width', //This is a THEME setting.
		'label'    => esc_attr__( 'Adjust the size of your logo here', 'keramas' ),
		'section'  => 'identity_logo',
		'default'  => 200,
		'choices'  => [
			'min'  => '100',
			'max'  => '400',
			'step' => '1',
		],
	]);


	/********************************
	 * Add the Business Info section
	******************************* */

	keramas_Kirki::add_panel( 'identity_business_info', array(
		'title' => esc_attr__( 'Business Info', 'keramas' ),
		'panel' => 'business_identity',
		'icon'  => 'dashicons-admin-network',
	));

	/**
	 * Address
	 */
	keramas_Kirki::add_section( 'identity_business_info_address', array(
		'title'       => esc_attr__( 'Name, Address, Phone', 'keramas' ),
		'capability'  => 'edit_theme_options',
		'panel'       => 'identity_business_info',
		'description' => __( 'Add or edit your logo here', 'keramas' ),
		'icon'        => 'dashicons-location-alt',

	) );

		keramas_Kirki::add_field( 'keramas', [
			'type'        => 'text',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'business_name',
			'label'       => esc_html__( 'Business Name', 'keramas' ),
			'section'     => 'identity_business_info_address',
			'transport'   => 'postMessage',
		]);

		keramas_Kirki::add_field( 'keramas', [
			'settings' => 'separator-2',
			'section'  => 'identity_business_info_address',
			'type'     => 'custom',
			'default'  => '<hr>',
		]);

		keramas_Kirki::add_field( 'keramas', [
			'type'        => 'text',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'street_address_1',
			'label'       => esc_html__( 'Address Line 1', 'keramas' ),
			'section'     => 'identity_business_info_address',
			'transport'   => 'postMessage',
		]);

		keramas_Kirki::add_field( 'keramas', [
			'type'        => 'text',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'street_address_2',
			'label'       => esc_html__( 'Address Line 2', 'keramas' ),
			'section'     => 'identity_business_info_address',
			'transport'   => 'postMessage',
		]);

		keramas_Kirki::add_field( 'keramas', [
			'type'        => 'text',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'city',
			'label'       => esc_html__( 'City', 'keramas' ),
			'section'     => 'identity_business_info_address',
			'transport'   => 'postMessage',
		]);

		keramas_Kirki::add_field( 'keramas', [
			'type'        => 'text',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'state',
			'label'       => esc_html__( 'State/Province', 'keramas' ),
			'section'     => 'identity_business_info_address',
			'transport'   => 'postMessage',
		]);

		keramas_Kirki::add_field( 'keramas', [
			'type'        => 'text',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'postal_code',
			'label'       => esc_html__( 'Postal Code', 'keramas' ),
			'section'     => 'identity_business_info_address',
			'transport'   => 'postMessage',
		]);

		keramas_Kirki::add_field( 'keramas', [
			'type'     => 'custom',
			'settings' => 'separator-3',
			'section'  => 'identity_business_info_address',
			'default'  => '<hr>',
		]);

		keramas_Kirki::add_field( 'keramas', [
			'type'        => 'text',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'phone',
			'label'       => esc_html__( 'Phone', 'keramas' ),
			'section'     => 'identity_business_info_address',
			'transport'   => 'postMessage',
		]);

		/********************************
		 * Hours
		******************************* */
		$hours = [
			'01:00' => esc_html__( '1:00 AM', 'keramas' ),
			'02:00' => esc_html__( '2:00 AM', 'keramas' ),
			'03:00' => esc_html__( '3:00 AM', 'keramas' ),
			'04:00' => esc_html__( '4:00 AM', 'keramas' ),
			'05:00' => esc_html__( '5:00 AM', 'keramas' ),
			'06:00' => esc_html__( '6:00 AM', 'keramas' ),
			'07:00' => esc_html__( '7:00 AM', 'keramas' ),
			'08:00' => esc_html__( '8:00 AM', 'keramas' ),
			'09:00' => esc_html__( '9:00 AM', 'keramas' ),
			'10:00' => esc_html__( '10:00 AM', 'keramas' ),
			'11:00' => esc_html__( '11:00 AM', 'keramas' ),
			'12:00' => esc_html__( '12:00 PM', 'keramas' ),
			'13:00' => esc_html__( '1:00 PM', 'keramas' ),
			'14:00' => esc_html__( '2:00 PM', 'keramas' ),
			'15:00' => esc_html__( '3:00 PM', 'keramas' ),
			'16:00' => esc_html__( '4:00 PM', 'keramas' ),
			'17:00' => esc_html__( '5:00 PM', 'keramas' ),
			'18:00' => esc_html__( '6:00 PM', 'keramas' ),
			'19:00' => esc_html__( '7:00 PM', 'keramas' ),
			'20:00' => esc_html__( '8:00 PM', 'keramas' ),
			'21:00' => esc_html__( '9:00 PM', 'keramas' ),
			'22:00' => esc_html__( '10:00 PM', 'keramas' ),
			'23:00' => esc_html__( '11:00 PM', 'keramas' ),
			'24:00' => esc_html__( '12:00 AM', 'keramas' ),
		];


		keramas_Kirki::add_section( 'identity_business_info_hours', array(
			'title'       => esc_attr__( 'Business Hours', 'keramas' ),
			'capability'  => 'edit_theme_options',
			'panel'       => 'identity_business_info',
			'description' => __( 'Include your business hours here. If you have a Google My Business profile, make sure they are exactly the same to avoid Local SEO conflicts.', 'keramas' ),
			'icon'        => 'dashicons-clock',
		) );

		// Monday.
		keramas_Kirki::add_field( 'keramas', [
			'type'     => 'custom',
			'settings' => 'monday',
			'section'  => 'identity_business_info_hours',
			'default'  => '<h3>Monday</h3>',
		] );

		keramas_Kirki::add_field( 'keramas', [
			'type'        => 'checkbox',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'mon_closed',
			'label'       => esc_html__( 'Closed', 'keramas' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Open',
			'multiple'    => 1,
			'transport'   => 'postMessage',
		]);

		keramas_Kirki::add_field( 'keramas', [
			'type'            => 'select',
			'option_type'     => 'option',
			'option_name'     => 'fsc_options',
			'settings'        => 'mon_hour_open',
			'label'           => esc_html__( 'Open', 'keramas' ),
			'section'         => 'identity_business_info_hours',
			'default'         => '8:00 AM',
			'multiple'        => 1,
			'transport'       => 'postMessage',
			'choices'         => $hours,
			'active_callback' => [
				[
					'setting'  => 'mon_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		keramas_Kirki::add_field( 'keramas', [
			'type'            => 'select',
			'option_type'     => 'option',
			'option_name'     => 'fsc_options',
			'settings'        => 'mon_hour_close',
			'label'           => esc_html__( 'Close', 'keramas' ),
			'section'         => 'identity_business_info_hours',
			'default'         => '5:00 PM',
			'multiple'        => 1,
			'transport'       => 'postMessage',
			'choices'         => $hours,
			'active_callback' => [
				[
					'setting'  => 'mon_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		// Tuesday.
		keramas_Kirki::add_field( 'keramas', [
			'type'     => 'custom',
			'settings' => 'tuesday',
			'section'  => 'identity_business_info_hours',
			'default'  => '<h3>Tuesday</h3>',
		] );

		keramas_Kirki::add_field( 'keramas', [
			'type'        => 'checkbox',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'tue_closed',
			'label'       => esc_html__( 'Closed', 'keramas' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Open',
			'multiple'    => 1,
			'transport'   => 'postMessage',
		]);

		keramas_Kirki::add_field( 'keramas', [
			'type'            => 'select',
			'option_type'     => 'option',
			'option_name'     => 'fsc_options',
			'settings'        => 'tue_hour_open',
			'label'           => esc_html__( 'Open', 'keramas' ),
			'section'         => 'identity_business_info_hours',
			'default'         => 'Closed',
			'multiple'        => 1,
			'transport'       => 'postMessage',
			'choices'         => $hours,
			'active_callback' => [
				[
					'setting'  => 'tue_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		keramas_Kirki::add_field( 'keramas', [
			'type'            => 'select',
			'option_type'     => 'option',
			'option_name'     => 'fsc_options',
			'settings'        => 'tue_hour_close',
			'label'           => esc_html__( 'Close', 'keramas' ),
			'section'         => 'identity_business_info_hours',
			'default'         => '',
			'multiple'        => 1,
			'transport'       => 'postMessage',
			'choices'         => $hours,
			'active_callback' => [
				[
					'setting'  => 'tue_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		// Wednesday.
		keramas_Kirki::add_field( 'keramas', [
			'type'     => 'custom',
			'settings' => 'wednesday',
			'section'  => 'identity_business_info_hours',
			'default'  => '<h3>Wednesday</h3>',
		] );


		keramas_Kirki::add_field( 'keramas', [
			'type'        => 'checkbox',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'wed_closed',
			'label'       => esc_html__( 'Closed', 'keramas' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Open',
			'multiple'    => 1,
			'transport'   => 'postMessage',
		]);

		keramas_Kirki::add_field( 'keramas', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'wed_hour_open',
			'label'       => esc_html__( 'Open', 'keramas' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Closed',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'wed_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		keramas_Kirki::add_field( 'keramas', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'wed_hour_close',
			'label'       => esc_html__( 'Close', 'keramas' ),
			'section'     => 'identity_business_info_hours',
			'default'     => '',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'wed_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		// Thursday.
		keramas_Kirki::add_field( 'keramas', [
			'type'     => 'custom',
			'settings' => 'thursday',
			'section'  => 'identity_business_info_hours',
			'default'  => '<h3>Thursday</h3>',
		] );

		keramas_Kirki::add_field( 'keramas', [
			'type'        => 'checkbox',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'thu_closed',
			'label'       => esc_html__( 'Closed', 'keramas' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Open',
			'multiple'    => 1,
			'transport'   => 'postMessage',
		]);

		keramas_Kirki::add_field( 'keramas', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'thu_hour_open',
			'label'       => esc_html__( 'Open', 'keramas' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Closed',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'thu_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		keramas_Kirki::add_field( 'keramas', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'thu_hour_close',
			'label'       => esc_html__( 'Close', 'keramas' ),
			'section'     => 'identity_business_info_hours',
			'default'     => '',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'thu_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		// Friday.
		keramas_Kirki::add_field( 'keramas', [
			'type'     => 'custom',
			'settings' => 'friday',
			'section'  => 'identity_business_info_hours',
			'default'  => '<h3>Friday</h3>',
		] );

		keramas_Kirki::add_field( 'keramas', [
			'type'        => 'checkbox',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'fri_closed',
			'label'       => esc_html__( 'Closed', 'keramas' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Open',
			'multiple'    => 1,
			'transport'   => 'postMessage',
		]);

		keramas_Kirki::add_field( 'keramas', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'fri_hour_open',
			'label'       => esc_html__( 'Open', 'keramas' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Closed',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'fri_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		keramas_Kirki::add_field( 'keramas', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'fri_hour_close',
			'label'       => esc_html__( 'Close', 'keramas' ),
			'section'     => 'identity_business_info_hours',
			'default'     => '',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'fri_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		// Saturday.
		keramas_Kirki::add_field( 'keramas', [
			'type'     => 'custom',
			'settings' => 'saturday',
			'section'  => 'identity_business_info_hours',
			'default'  => '<h3>Saturday</h3>',
		] );

		keramas_Kirki::add_field( 'keramas', [
			'type'        => 'checkbox',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'sat_closed',
			'label'       => esc_html__( 'Closed', 'keramas' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Open',
			'multiple'    => 1,
			'transport'   => 'postMessage',
		]);

		keramas_Kirki::add_field( 'keramas', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'sat_hour_open',
			'label'       => esc_html__( 'Open', 'keramas' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Closed',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'sat_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		keramas_Kirki::add_field( 'keramas', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'sat_hour_close',
			'label'       => esc_html__( 'Close', 'keramas' ),
			'section'     => 'identity_business_info_hours',
			'default'     => '',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'sat_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		// Sunday.
		keramas_Kirki::add_field( 'keramas', [
			'type'     => 'custom',
			'settings' => 'sunday',
			'section'  => 'identity_business_info_hours',
			'default'  => '<h3>Sunday</h3>',
		] );

		keramas_Kirki::add_field( 'keramas', [
			'type'        => 'checkbox',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'sun_closed',
			'label'       => esc_html__( 'Closed', 'keramas' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Open',
			'multiple'    => 1,
			'transport'   => 'postMessage',
		]);

		keramas_Kirki::add_field( 'keramas', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'sun_hour_open',
			'label'       => esc_html__( 'Open', 'keramas' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Closed',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'sun_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		keramas_Kirki::add_field( 'keramas', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'sun_hour_close',
			'label'       => esc_html__( 'Close', 'keramas' ),
			'section'     => 'identity_business_info_hours',
			'default'     => '',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'sun_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);


		/********************************
		 * Add the Social Links section - (Tied to Yoast SEO for Schema)
		 ******************************* */

		keramas_Kirki::add_section( 'social-links', array(
			'title'       => esc_attr__( 'Social Links', 'keramas' ),
			'description' => __( 'Add your social media links here.', 'keramas' ),
			'capability'  => 'edit_theme_options',
			'panel'       => 'business_identity',
			'icon'        => 'dashicons-facebook',
		) );

		keramas_Kirki::add_field( 'keramas', array(
			'type'        => 'link',
			'settings'    => 'facebook_site',
			'option_type' => 'option',
			'option_name' => 'wpseo_social',
			'label'       => __( 'Facebook URL', 'keramas' ),
			'description' => __( 'Include the https://', 'keramas' ),
			'section'     => 'social-links',
			'default'     => '',
			'transport'   => 'postMessage',
		));

		keramas_Kirki::add_field( 'keramas', array(
			'type'        => 'text',
			'settings'    => 'twitter_site',
			'option_type' => 'option',
			'option_name' => 'wpseo_social',
			'label'       => __( 'Twitter Username', 'keramas' ),
			'description' => __( 'Don\'t include @', 'keramas' ),
			'section'     => 'social-links',
			'default'     => '',
			'transport'   => 'postMessage',
		) );

		keramas_Kirki::add_field( 'keramas', array(
			'type'        => 'link',
			'settings'    => 'instagram_url',
			'option_type' => 'option',
			'option_name' => 'wpseo_social',
			'label'       => __( 'Instagram URL', 'keramas' ),
			'description' => __( 'Include the https://', 'keramas' ),
			'section'     => 'social-links',
			'default'     => '',
			'transport'   => 'postMessage',
		) );

		keramas_Kirki::add_field( 'keramas', array(
			'type'        => 'link',
			'settings'    => 'pinterest_url',
			'option_type' => 'option',
			'option_name' => 'wpseo_social',
			'label'       => __( 'Pinterest URL', 'keramas' ),
			'description' => __( 'Include the https://', 'keramas' ),
			'section'     => 'social-links',
			'default'     => '',
			'transport'   => 'postMessage',
		) );

		keramas_Kirki::add_field( 'keramas', array(
			'type'        => 'link',
			'settings'    => 'youtube_url',
			'option_type' => 'option',
			'option_name' => 'wpseo_social',
			'label'       => __( 'YouTube URL', 'keramas' ),
			'description' => __( 'Include the https://', 'keramas' ),
			'section'     => 'social-links',
			'default'     => '',
			'transport'   => 'postMessage',
		) );

		keramas_Kirki::add_field( 'keramas', array(
			'type'        => 'link',
			'settings'    => 'linkedin_url',
			'option_type' => 'option',
			'option_name' => 'wpseo_social',
			'label'       => __( 'LinkedIn URL', 'keramas' ),
			'description' => __( 'Include the https://', 'keramas' ),
			'section'     => 'social-links',
			'default'     => '',
			'transport'   => 'postMessage',
		) );
