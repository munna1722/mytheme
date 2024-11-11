<?php get_header(); ?>

       <div id="primary" class="content-area">
          <main id="main" class="site-main" role="main">
             <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> > 
                 <header class="entry-header">
                   <h1>My Theme</h1>
                 </header> 

                 <div class="entry-content">
                    <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                 </div>
             </article>
          </main>
       </div>    
  <?php get_footer(); ?>  