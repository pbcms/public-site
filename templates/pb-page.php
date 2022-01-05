<?php
    /**
     * Template: pb-page
     * Authors: The PBCMS developers
     * Description: This template is used for the normal pages.
     * 
     * ==== REQUIRED DATA ATTRIBUTES ====
     * - title;         The title of the page. " - SITE TITLE" will be put behind the title.
     * - description;   The description of the page. Used for meta generation.
     * - copyright;     The copyright message placed at the bottom of the page.
     * 
     * ==== OPTIONAL DATA ATTRIBUTES ====
     * - meta;          Additional meta tags to be included by the Meta Batch definition.
     * - head;          Additional head assets to be included by the Assets Batch function definition. (eg. styles)
     * - body;          Additional body assets to be included by the Assets Batch function definition. (eg. scripts)
     */

    use Library\Meta;
    use Library\Language;

    $meta = new Meta;
    $meta->set('robots', 'index, nofollow');
    $meta->set('title', (isset($data->title) ? $data['title'] . ' - ' : '') . SITE_TITLE);
    $meta->set('description', (isset($data['description']) ? $data['description'] : SITE_DESCRIPTION));
    if (isset($data['meta'])) $meta->batch($data['meta']);

    Core::SystemAssets();
    $assets = new \Library\Assets;
    $assets->registerHead('style', 'https://fonts.gstatic.com', array("rel" => "preconnect"));
    $assets->registerHead('style', 'https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap');
    $assets->registerHead('script', 'https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js');
    $assets->registerHead('style', 'pb-page.css', array("origin" => "dynamic"));
    $assets->registerBody('script', 'pb-page.js', array("origin" => "dynamic"));

    if (isset($data['head'])) $assets->registerBatch('head', $data['head']);
    if (isset($data['body'])) $assets->registerBatch('body', $data['body']);
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <?php 
            echo $meta->generate(); 
            echo $assets->generateHead();
        ?>
    </head>
    <body>
        <nav>
            <div class="pb-logo">
                <?php echo file_get_contents(SITE_LOCATION . 'pb-pubfiles/img/pb-logos/full-white.svg'); ?>
            </div>

            <div class="source-links">
                <a toggle-darkmode>
                    <i data-feather="moon"></i>
                </a>
                <a href="https://github.com/pbcms/pbcms" target="_blank">
                    <i data-feather="github"></i>
                </a>
                <a href="<?php echo SITE_LOCATION; ?>pb-auth/signin">
                    <i data-feather="<?php echo ($this->user->signedin() ? 'user' : 'log-in'); ?>"></i>
                </a>
            </div>
        </nav>

        <div class="content">
            <?php echo $content; ?>
        </div>

        <footer>

        </footer>
        
        <?php
            echo $assets->generateBody();
        ?>

        <script>
            feather.replace();
        </script>
    </body>
</html>