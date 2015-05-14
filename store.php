<?php
    include '_templates/sitewide.php';
    $page['title'] = 'Store &sdot; elementary';
    include $template['header'];
?>
            <div class="row">
                <h1>Store</h1>
                <h4>Our store currently only supports US orders.</h4>
            </div>
            <div class="row">
                <a href='https://mkt.com/elementary-llc' class='sq-embed-menu' data-menu-item-images='large' data-menu-accent-color='04a9dc' data-menu-template='column' data-menu-border='hide' data-menu-item-descriptions='show' >Order Online</a>
                <script src="https://cdn.sq-api.com/market/embed.js" charset="utf-8"></script>
            </div>

<?php
    include $template['footer'];
?>