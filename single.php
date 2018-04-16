<?php get_header(); ?>
		<!-- banner start -->
		<!-- ================ -->
		<div id="banner " class="banner top" >
				<h1 class="text-center" style="color:#fff;" ><span>【<?php $cat = get_the_category(); echo $cat[0]->name ?>】<?php the_title(); ?></span></h1>
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
								<div class="col-md-8">
									<h2 id="about" class="title" >【<?php $cat = get_the_category(); echo $cat[0]->name ?>】<?php the_title(); ?></h2>
<?php
if(have_posts()):while(have_posts()):the_post();
								the_content();							
endwhile; endif; ?>
								</div>
								<?php get_sidebar() ?>
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
				<div class="col-md-8">
					<h2 class="title" id="portfolio">記事一覧</h2>
				    <div class="filters">
							<ul class="nav nav-pills">
								<li class="active"><a href="#" data-filter="*">All</a></li>
                <?php 
                        $categories =  get_categories();
                        foreach($categories as $val){
                        echo '<li><a href="#" data-filter=".'. $val->cat_ID.'">'. $val->name .'</a></li>';
                        } 
                ?>
							</ul>
						</div>
						<!-- portfolio items start -->
						<div class="isotope-container row" style="margin-left:2em;display:block !important">
				    <?php 
												$arg = array(
        								     'posts_per_page' => -1, // 表示する件数
        								     'orderby' => 'date', // 日付でソート
        								     'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
        								);
												$posts = get_posts( $arg );
  											if( $posts ): 
																foreach ( $posts as $post ) :
																setup_postdata( $post ); 
																$cat_list = get_the_category();
																				if( $cat_list ): 
				      ?>
                <div class="isotope-item <?php foreach ($cat_list as $cat) : echo $cat->cat_ID .' '; endforeach; ?>" style="margin-bottom:0;display:block">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				        </div>
								<?php 
																				endif;
																endforeach;
												endif;
								?>
            </div>
				</div>
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
