<?php
/**
 * Extend WooCommerce Cart Tests.
 *
 * @since   0.0.0
 * @package Extend_WooCommerce
 */
class EWC_Cart_Test extends WP_UnitTestCase {

	/**
	 * Test if our class exists.
	 *
	 * @since  0.0.0
	 */
	function test_class_exists() {
		$this->assertTrue( class_exists( 'EWC_Cart' ) );
	}

	/**
	 * Test that we can access our class through our helper function.
	 *
	 * @since  0.0.0
	 */
	function test_class_access() {
		$this->assertInstanceOf( 'EWC_Cart', extend_woocommerce()->cart );
	}

	/**
	 * Replace this with some actual testing code.
	 *
	 * @since  0.0.0
	 */
	function test_sample() {
		$this->assertTrue( true );
	}
}
