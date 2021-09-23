
    <!-- ADD A POST -->
    <div class="clearfix">
        <a class="btn btn-secondary float-left" href="#">Add Post &rarr;</a>
    </div>
    
    <?php foreach($posts as $post): ?>    
        <div class="post-preview">
            <a href="post/<?php echo $post['id'] ?>">
                <h2 class="post-title">
                    <?php echo $post['titre'] ?>
                </h2>
                <h3 class="post-subtitle">
                    <?php echo $post['sousTitre'] ?>
                </h3>
            </a>
            <p class="post-meta">
                <?php 
                  $datePublication = new DateTime($post['datePublication']);
                  echo $datePublication->format('F j, Y');
                ?>
            </p>
            <hr>
        </div>
        
    <?php endforeach; ?>
 
    <!-- Pager -->
    <div class="clearfix">
        <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
    </div>