<?php
/**
 * Plugin Name: Shows All Posts // Bùi Đặng Phương Thanh
 * Plugin URI: http://webgido.com // Địa chỉ trang chủ của plugin
 * Description: Đây là plugin đầu tiên mà tôi viết dành riêng cho WordPress, chỉ để học tập mà thôi. // Phần mô tả cho plugin
 * Version: 1.0 // Đây là phiên bản đầu tiên của plugin
 * Author: Mon Bùi // Tên tác giả, người thực hiện plugin này
 * Author URI: http://thanhbuiblog.tk // Địa chỉ trang chủ của tác giả
 * License: GPLv2 or later // Thông tin license của plugin, nếu không quan tâm thì bạn cứ để GPLv2 vào đây
 */

if (!function_exists('add_action')){
	echo "hohohoohhoho sai rồi nha bro :v";
	exit;
}

define('LUGIN_BOOTSTRAP_ADD', plugin_dir_url(__FILE__));

?><link rel="stylesheet" href="<?php echo LUGIN_BOOTSTRAP_ADD.'css/bootstrap.min.css';?> ">


<?php
//Tạo shortcode tên là [test_shortcode] và sẽ thực thi code từ function create_shortcode
add_shortcode( 'test_shortcode', 'create_shortcode' );
add_shortcode( 'signature', 'create_signature');
add_shortcode( 'show_posts', 'show_all_posts');

//Khởi tạo function cho shortcode
function create_shortcode() {
        echo "Hello World!";
}

//Khởi tạo function cho shortcode
function create_signature($ts, $content){
	return "<b>".$content."</b>";
	//return "Ký tên <b>".$content."</b>";
}

function show_all_posts(){
// the query
$result_query_posts = new WP_Query( array(
			'post_type'=>'post',
			'post_status'=>'publish',
			'posts_per_page'=>-1
		));

if ( $result_query_posts->have_posts() ) :?>

<table class="table table-borderless  " style="font-size: 125%">
    <!-- the loop -->
    <?php while ( $result_query_posts->have_posts() ) : $result_query_posts->the_post(); ?>
        <tr>
        	<td rowspan="2">
        		<?php the_post_thumbnail( 'full' ); ?>
        	</td>
        	<td>
				<b><a href="<?php the_permalink(); ?>" class="text-decoration-none"><?php the_title(); ?></a></b>
			</td>
        </tr>
		<tr>
        	<td>
        		<div class="text-justify"><?php the_excerpt(); ?></div>
        	</td>
        </tr>
    <?php endwhile; ?>
    <!-- end of the loop -->
</table> 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Xin lỗi, không có bài viết nào!' ); ?></p>
<?php endif;
}


?>

