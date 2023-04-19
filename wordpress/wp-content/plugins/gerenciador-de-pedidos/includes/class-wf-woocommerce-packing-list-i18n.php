<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.gerenciadordepedidos.com/
 * @since      2.5.0
 *
 * @package    Wf_Woocommerce_Packing_List
 * @subpackage Wf_Woocommerce_Packing_List/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      2.5.0
 * @package    Wf_Woocommerce_Packing_List
 * @subpackage Wf_Woocommerce_Packing_List/includes
 * @author     GerenciadorDePedidos <info@gerenciadordepedidos.com>
 */
class Wf_Woocommerce_Packing_List_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    2.5.0
	 */
	public function load_plugin_textdomain() {
		load_plugin_textdomain(
			'print-invoices-packing-slip-labels-for-woocommerce',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
