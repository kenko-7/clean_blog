<ul class="navbar-nav ml-auto">
    <?php foreach($pages as $page): ?>    
        <li class="nav-item">
            <a class="nav-link" href="page/<?php echo $page['id']; ?>">
                <?php echo $page['titreMenu']; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>