								<div class="col-md-4">
									<div class="box29">
										<div class="box-title">最新記事</div>
				    <?php 
												$arg = array(
        								     'posts_per_page' => 5, // 表示する件数
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
											<p>
												<a href="<?php echo the_permalink(get_the_ID()); ?>">【<?php $cat = get_the_category(); echo $cat[0]->name ?>】<?php the_title(); ?></a>
											</p>
								<?php 
																				endif;
																endforeach;
												endif;
								?>
								  </div>
								  <div class="box29">
										<div class="box-title">カテゴリ一覧</div>
								  </div>
							<ul class="nav nav-pills">
<?php 
$categories =  get_categories('parent=0');
foreach($categories as $val){
		//カテゴリのリンクURLを取得
		$cat_link = get_category_link($val->cat_ID);
		//親カテゴリのリスト出力
		echo '<li><a href="' . $cat_link . '">' . $val -> name . '</a></li>';
    $child_cat_num = count(get_term_children($val->cat_ID,'category'));
        //子カテゴリが存在する場合
		if($child_cat_num > 0){
			//子カテゴリの一覧取得条件
			$category_children_args = array('parent'=>$val->cat_ID);
			//子カテゴリの一覧取得
			$category_children = get_categories($category_children_args);
			//子カテゴリの数だけリスト出力
			foreach($category_children as $child_val){
				$cat_link = get_category_link($child_val -> cat_ID);
		    echo '<li><a href="' . $cat_link . '">' . $child_val -> name . '</a></li>';
			}
		}
}
?>
</ul>
								</div>
