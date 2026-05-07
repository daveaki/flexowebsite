<footer class="fl-sm-area-32 fl-lg-area-48 fl-sp-area-64 fl-ut-area-96">
        <div class="container fluid">
                <div class="footer-inner">
                        <div class="footer-logo-box">
                                <img id="logo-footer" src="<?= base_url('assets/img/logo-flexo-on-dark.svg') ?>" alt="Logo Flexo" title="Logo Flexo">
                        </div>
                        <div class="footer-separator"></div>
                        <div class="footer-right">
                                <div class="footer-links">
                                        <a href="<?= SITE_GITHUB ?>" target="_blank" class="link on-dark">GitHub</a>
                                        <a href="<?= SITE_NPM ?>" target="_blank" class="link on-dark">npm</a>
                                        <a href="<?= base_url(service('request')->getLocale() . '/docs/getting-started') ?>" class="link on-dark"><?= lang('Website.footer_documentation') ?></a>
                                </div>
                                <p class="footer-text">v<?= FLEXO_VERSION ?> &middot; MIT License &middot; <?= lang('Website.footer_made_by') ?> <a href="<?= SITE_GITHUB ?>" target="_blank" class="link on-dark footer-author">daveaki</a></p>
                                <p class="footer-copy">&copy; <?= date('Y') ?> <?= SITE_NAME ?>. <?= lang('Website.footer_all_rights') ?></p>
                        </div>
                </div>
        </div>
</footer>
