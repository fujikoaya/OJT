<!-- ヘッダーの読み込み -->
<?php get_header(); ?>
    <main>
                    <!-- メインループの記載 -->
                    <?php 
                      if(have_posts()):
                        while(have_posts()):
                            the_post();
                    ?>
                     <div class='article-wrap'>
                       <div class='container-wrap'>
                        <?php the_content(); ?>
                       </div>
                     </div>
                     <?php
                       endwhile;
                    else:
                     ?>
                     <div class='article-wrap'>
                      <h2 class='subtitle'>表示する記事がありません</h2>
                     </div>
                     <?php endif; ?>
                     <!-- <div class='article-wrap'>
                        <a href="">
                            <div class="pic">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/post_img_2.png" alt="">
                            </div>
                         <p>2018 / 5 / 19</p>
                         <p>あのネオンはいつ交換するのか！？観覧車の謎に迫る！</p>
                         <div class='readmore1'>
                             <div class='tr'>
                               <span>READ MORE</span>
                             </div>
                         </div>
                        </a>
                     </div> -->
                     <!-- <div class='article-wrap'>
                        <a href="">
                            <div class="pic">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/post_img_3.png" alt="">
                            </div>
                         <p>2018 / 5 / 18</p>
                         <p>ラソナの社内はこんなのよ</p>
                         <div class='readmore'>
                             <div class='tr'>
                               <span>READ MORE</span>
                             </div>
                         </div>
                        </a>
                     </div> -->
                     <!-- <div class='article-wrap'>
                        <a href="">
                            <div class="pic">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/post_img_4.png" alt="">
                            </div>
                         <p>2018 / 5 / 27</p>
                         <p>お隣のアラハはハワイ？</p>
                         <div class='readmore'>
                             <div class='tr'>
                               <span>READ MORE</span>
                             </div>
                         </div>
                        </a>
                     </div>
                     <div class='article-wrap'>
                        <a href="">
                            <div class="pic">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/post_img_5.png" alt="">
                            </div>
                         <p>2018 / 5 / 16</p>
                         <p>なぜテント？ラソナの人に聞いてみた</p>
                         <div class='readmore'>
                             <div class='tr'>
                               <span>READ MORE</span>
                             </div> 
                         </div>
                        </a>
                     </div>
                     <div class='article-wrap'>
                        <a href="">
                            <div class="pic">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/post_img_6.png" alt="">
                            </div>
                         <p>2018 / 5 / 15</p>
                         <p>ベイエリアおしゃれすぎる問題</p>
                         <div class='readmore'>
                             <div class='tr'>
                               <span>READ MORE</span>
                             </div>
                             
                         </div>
                        </a>
                     </div> -->
                 </div>
               </section>    
             </div>      
           </div>    
         </main>
         <!-- footerの読み込み -->
        <?php get_footer(); ?>