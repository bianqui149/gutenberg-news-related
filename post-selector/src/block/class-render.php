<?php
namespace Custom_Gutenberg_Block;

class Block_Selector {
	public $attributes;
	public function __construct( $attributes ) {
		$this->attributes = $attributes;
	}
	public function render(){
		?>
		<article class="news news--summary news--55-81">
			<figure class="news__media">
				<a href="<?php echo esc_url( $this->attributes['url'] ); ?>" title="<?php echo esc_attr( get_the_title( $this->get_data_filtering() ) ) ; ?>">
					<img src="<?php echo esc_url( get_the_post_thumbnail_url( $this->get_data_filtering() ) ); ?>" alt="" width="215" height="120">
				</a>
			</figure>
			<div class="news__data">
				<span class="news__section">Lee También</span>
				<h2 class="news__title">
					<a href="<?php echo esc_url( $this->attributes['url'] ); ?>" title="<?php echo esc_attr( get_the_title( $this->get_data_filtering() ) ) ; ?>">
						<?php echo esc_html( get_the_title( $this->get_data_filtering() ) ) ; ?>
					</a>
				</h2>
			</div>
		</article>
		<?php
	}
	public function get_data_filtering() {
		$data  = url_to_postid( $this->attributes['url'] ) ;
		return $data;
	}
}
