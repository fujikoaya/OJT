<!-- ヘッダーの読み込み -->
<?php get_header(); ?>
    <main>
        <div id="kv">
            <div class="posimg1"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></div>
            <picture class="posimg2">
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_text_sp.png" media='(max-width: 767px'>
                <!-- mediaの中にレスポシブサイズを記入 -->
                <img src="<?php echo get_template_directory_uri(); ?>/img/visual_text_pc.png" alt="">
            </picture>
            <ul class="slide">
                <li class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/visual_1_pc.png" />
                </li>
                <li class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/visual_3_pc.png" />
                </li>
                <li class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/visual_2_pc.png" />
                </li>
                
            </ul>
            <!-- <div class="mainvisual">
                
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>" media='(max-width: 767px)'>
                    
                    <img src="<?php echo get_template_directory_uri(); ?>/img/visual_1_pc.png" alt="">
                </picture>
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_2_sp.png" media='(max-width: 767px)'>
                    
                    <img src="<?php echo get_template_directory_uri(); ?>/img/visual_2_pc.png" alt="">
                </picture>
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_3_sp.png" media='(max-width: 767px)'>
                    
                    <img src="<?php echo get_template_directory_uri(); ?>/img/visual_3_pc.png" alt="">
                </picture>
            </div> -->
            
        </div>

        <p class='text'>進化し続ける「街」
            <br> アメリカンビレッジマガジン
        </p>
        <div class='main-titile'>
            <section class='latest article'>
                <h1>Latest Article</h1>
                 <div class='la'>
                    <!-- メインループの記載 -->
                    <?php 
                      if(have_posts()):
                        while(have_posts()):
                            the_post();
                    ?>
                     <div class='article-wrap'>
                       <a href="">
                        <div class="pic">
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="">
                        </div>                        
                         <p><?php the_time('Y/n/j'); ?></p>
                         <p><?php the_content(); ?></p>
                         <div class='readmore'>
                             <div class='tr'>
                               <span>
                                READ MORE
                               </span>
                             </div>
                         </div>
                        </a>
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