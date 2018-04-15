<?php get_header(); ?>
		<!-- banner start -->
		<!-- ================ -->
		<div id="banner " class="banner top" >
				<h1 class="text-center banner-main" style="color:#fff;" ><span>Hello world!</span></h1>
			<div class="banner-main">
			</div>
		</div>
		<!-- banner end -->
		<!-- section start -->
		<!-- ================ -->
		<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
			<div class="container">
				<div class="content">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
									<h2 id="about" class="title" >全ての記事</h2>
<?php
 $arg = array(
             'posts_per_page' => -1, // 表示する件数
             'orderby' => 'date', // 日付でソート
             'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
         );
  $posts = get_posts( $arg );
    if( $posts ): 
?>
									<ul class="cards">
<?php
      foreach ( $posts as $post ) :
        setup_postdata( $post ); 
?>
										<li class="cards__item">
										<div class="card">
                    <div class="card__image" style="background-image:url(<?php the_post_thumbnail_url( 'medium' ); ?>);">
                    <a href="<?php the_permalink(); ?>">link</a>
											</div>
										  <div class="card__content">
                      <div class="card__title"><?php the_title(); ?></div>
										  </div>
										</div>
										</li>
<?php endforeach;
endif;
 ?>
									</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->
		<!-- section start -->
		<!-- ================ -->
		<div class="section">
			<div class="container">
				<div class="col-md-4">
															<div class="box29">
											<div class="box-title">Naographについて</div>
										<ul class="list-icons" style="text-align:center;margin:5px 10px;">
											<li style="padding-bottom:0;"><i class="fa fa-envelope-o pr-10"></i> naographer@gmail.com</li>
										</ul>
											<p style="text-align:center;">これまで私が実行してきたことについて、様々な分野の記事を書いていきます。</p>
									</div>
				</div>
			</div>
		</div>
		<!-- smsection end -->
<?php get_footer(); ?>
