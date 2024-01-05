<?php
/*
/*
 * Plugin Name:       CSS Addons For GP
 * Plugin URI:        https://www.Teckshop.net/our-plugin/
 * Description:       A simple WordPress plugin that add custom CSS code to the style.css file of the GP Theme. And make your website More Beautifull.
 * Version:           1.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Teckshop.net
 * Author URI:        https://www.Teckshop.net
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://www.Teckshop.net/our-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */


function custom_css_enqueue() {
    $background_color = get_option( 'background_color' );
    $color = get_option( 'color' );
    $custom_css = ".banner-section {
         background-color: {$background_color} !important; 
         color: {$color} !important; }
         
         /* GeneratePress Site CSS */ 
         .inside-article,
.sidebar .widget,
.comments-area {
	border-bottom: 2px solid rgba(0, 0, 0, 0.07);
	box-shadow: 0 0 10px rgba(232, 234, 237, 0.5);
}

/* Featured widget */
.sidebar .widget:first-child,
.sidebar .widget:first-child .widget-title{
	background-color: {$color} !important;
	color: #fff;
}
.sidebar .widget:first-child a,
.sidebar .widget:first-child a:hover {
	color: #fff !important;
}
.sidebar .widget a{
	color: {$color} !important;
}
.separate-containers .page-header {
	background: transparent;
	padding-top: 20px;
	padding-bottom: 20px;
}

.page-header h1 {
	font-size: 1.5em;
}

.button, .wp-block-button .wp-block-button__link {
	padding: 15px 25px;
}

@media (max-width: 768px) {
	.post-image img {
		max-width: 100%;
	}
} /* End GeneratePress Site CSS */
/*GeneratePress Customization by Teckshop.net*/
.page-header-image-single .attachment-full{
box-shadow: rgba(2,43,99,.3) 0 7px 28px;
border-radius:25px;
}
.entry-content h2{

    margin-bottom: 20px;
    font-weight: 600;
    padding: 10px 80px 10px 10px;
    border-left: 7px solid {$color};
    background-color: #F6F9FE;
    border-radius: 2px;
    color: #232323 !important;
    box-shadow: rgb(99 99 99 / 20%) 0px 2px 8px 0px;
    display: inline-block;
}
.entry-content h3{

    margin-bottom: 20px;
    font-weight: 600;
    padding: 10px 80px 10px 10px;
    border-left: 7px solid {$color};
    background-color: #F6F9FE;
    border-radius: 2px;
    color: #232323 !important;
    box-shadow: rgb(99 99 99 / 20%) 0px 2px 8px 0px;
    display: inline-block;
}
.entry-content h4{

    margin-bottom: 20px;
    font-weight: 600;
    padding: 10px 80px 10px 10px;
    border-left: 7px solid {$color};
    background-color: #F6F9FE;
    border-radius: 2px;
    color: #232323 !important;
    box-shadow: rgb(99 99 99 / 20%) 0px 2px 8px 0px;
    display: inline-block;
}

.main-navigation ul li:hover {
	background: {$color} !important;
}

.main-navigation .main-nav ul li a, .menu-toggle, .main-navigation .menu-bar-item > a {
    line-height: 40px !important;
}

a.button.light {
    background-color: {$color};
    border: 1px solid;
}


.entry-content h2{
font-size:25px!important;
}
.entry-content h3{
font-size:21px!important;
}
.entry-content h4{
font-size:17px!important;
}
.entry-content h5{
font-size:15px!important;
}
.entry-content h6{
font-size:13px!important;
}
.comment-respond .comment-reply-title{
padding: 10px 10px 10px 25px;
background-image: {$background_color};
border-radius:10px;
font-weight:600;
color:white!important;
font-size:22px!important;
box-shadow: rgba(23,43,99,.3) 0 7px 28px;
}
/*End of Article Page Design*/
/*Sidebar Universal*/
.widget-title{
padding: 10px 10px;
background-image: {$background_color};
border-radius:10px;
font-weight:500;
color:white!important;
font-size:18px!important; text-align:center;
box-shadow: rgba(23,43,99,.3) 0 7px 28px;
}
.sidebar .widget {
box-shadow: rgba(23,43,99,.3) 0 6px 18px;
border-radius: 5px;
}
.sidebar .widget:first-child {background-image: {$background_color};}
.button.light {
background-color: #fff;
border-radius: 50px;
font-weight: 700;
color:#333;
}
.button.light:hover {
background: #333;
color: #fff;
}
/*End of sidebar code*/
/*End of sidebar code*/
@media (min-width: 769px) {
.post-image-aligned-left .post-image img {
margin-top: -20px;
border-radius: 12px;
box-shadow: rgba(23,43,99,.2) 0 7px 28px!important;
}
}
/* Mobile query */
@media (max-width: 768px) {
.post-image-aligned-left .post-image img {
margin-top: -20px;
border-radius: 12px;
box-shadow: rgba(23,43,99,.2) 0 7px 28px!important;
}
}
/* Widget Sticky */
@media (min-width: 769px) {
.site-content {
display: flex;
}
.inside-right-sidebar {
height: 100%;
}
.inside-right-sidebar aside:last-child {
position: -webkit-sticky;
position: sticky;
top: 10px;
}
}
/* Read More button Style */
a.read-more.button {background-image: {$background_color};}
a.read-more.button {
font-size:14px;
padding: 10px 25px;
text-align: center;
transition: 0.5s;
background-size: 200% auto;
color: white;
box-shadow: rgba(23,43,99,.3) 0 7px 28px;
border-radius: 120px;
}
a.read-more.button:hover {
background-position: right center; /* change the direction of the change here */
color: #fff;
text-decoration: none;
}
/* Read More button Style */
blockquote {
background: #dcdcdc54;
border-left: 5px solid {$color};
padding: 15px;
font-style: inherit;
font-size: 18px;
margin: 0 0 1.5em;
}
.main-navigation, .main-navigation, ul u{
	background: {$background_color};!important;
}

.page-header-image-single .attachment-full {
    box-shadow: 0 19px 38px rgb(0 0 0 / 30%), 0 15px 12px rgb(0 0 0 / 22%);
    border-radius: 25px;
}
.post-image-aligned-left .post-image img {
    margin-top: -20px;
    box-shadow: 0 19px 38px rgb(0 0 0 / 30%), 0 15px 12px rgb(0 0 0 / 22%) !important;
    border-radius: 12px;
    
}
.elementor-214 .elementor-element.elementor-element-5cb066e3:not(.elementor-motion-effects-element-type-background), .elementor-214 .elementor-element.elementor-element-5cb066e3 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
    background-color: #000000;
    background-image: {$background_color};
}

.main-navigation li:hover {
    position: relative;
	hover
}
.main-navigation .main-nav ul li a, .menu-toggle, .main-navigation .menu-bar-item > a {
    line-height: 40px;
}
li :hover{
	color: blink !important;
	border-radius: 6%;
	
}
input#submit {
    color: white;
    background-image: {$background_color};
}
         .comment-form-comment textarea {
    resize: vertical;
    border-radius: 15px;
    border-color: {$color};
}
         
   .main-navigation .main-nav ul li.current-menu-item > a,
.main-navigation .main-nav ul li.current-menu-ancestor > a {
    color: var(--base-3);
    background-color:  {$color} !important;
    border-radius: 5% !important;
    border: 1px solid white !important;
    margin: 5px !important;
}
#heading{
           
    display: flex;
    align-items: center;
    justify-content: center;
 }
}


         
         
         
         ";
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
    wp_add_inline_style( 'style', $custom_css );






















}
add_action( 'wp_enqueue_scripts', 'custom_css_enqueue' );

function custom_css_settings_page() {
    add_options_page( 'Custom CSS', 'Custom CSS', 'manage_options', 'custom-css', 'custom_css_options_page' );
}
add_action( 'admin_menu', 'custom_css_settings_page' );

function custom_css_options_page() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    if ( isset( $_POST['background_color'] ) && isset( $_POST['color'] ) ) {
        update_option( 'background_color', sanitize_text_field( $_POST['background_color'] ) );
        update_option( 'color', sanitize_text_field( $_POST['color'] ) );
    }

    $background_color = get_option( 'background_color', 'black' );
    $color = get_option( 'color', 'white' );
    ?>
    <div class="wrap">
        <h1>Custom CSS</h1>
        <form method="post">
            <table class="form-table">
                <tbody>
                    <tr>
                        <th scope="row">
                            <label for="background_color">Background Color</label>
                        </th>
                        <td>
                            <input type="text" name="background_color" id="background_color" value="<?php echo esc_attr( $background_color ); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <label for="color">Color</label>
                        </th>
                        <td>
                            <input type="text" name="color" id="color" value="<?php echo esc_attr( $color ); ?>">
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php submit_button(); ?>
            <p id="heading">Powered By <a href="https://teckshop.net/">Teckshop </a></p>
        </form>
    </div>
    <?php
}
