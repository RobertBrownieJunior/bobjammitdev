<?php

/**
 * This file contains scripts and styles that will be enqueued to the website.
 *
 * @package Variations
 *
 */

if (!function_exists('variations_frontend_assets')) {
    /**
     * Enqueue scripts and styles on the website frontend.
     * 
     * @return void
     */
    function variations_frontend_assets()
    {

        /**
         *  Frontend Styles.
         * */
        wp_enqueue_style(
            'variations-frontend-style',
            get_template_directory_uri() . '/assets/css/frontend.css',
            array(),
            VARIATIONS_THEME_VERSION
        );
    }
}
add_action('wp_enqueue_scripts', 'variations_frontend_assets');

if (!function_exists('variations_editor_assets')) {
    /**
     * Enqueue scripts and styles for the website editor.
     * 
     * @return void
     */
    function variations_editor_assets()
    {
        /**
         * Editor Styles.
         * */
        wp_enqueue_style(
            'variations-editor-style',
            get_template_directory_uri() . '/assets/css/editor.css',
            array(),
            VARIATIONS_THEME_VERSION
        );
    }
}
add_action('enqueue_block_editor_assets', 'variations_editor_assets');

if (!function_exists('variations_editor_frontend_assets')) {
    /**
     * Enqueue scripts and styles for the website editor and frontend.
     * 
     * @return void
     */
    function variations_editor_frontend_assets()
    {
        /**
         * Editor/Frontend Styles.
         * */
        wp_enqueue_style(
            'variations-editor-frontend-style',
            get_template_directory_uri() . '/assets/css/editor-frontend.css',
            array(),
            VARIATIONS_THEME_VERSION
        );
    }
}
add_action('enqueue_block_assets', 'variations_editor_frontend_assets');
