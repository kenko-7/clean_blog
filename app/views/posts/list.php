
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
 
    