<header>
    <div class="container fluid fill-height">
        <div class="row block fill-height fl-sm-align-content-center">
            <div class="fl-box fl-sm-8 fl-lg-5 fl-ut-auto">
                <a href="<?= base_url() ?>" title="Flexo Css">
                    <img id="logo-header" src="<?= base_url('assets/img/logo-flexo-on-dark.svg') ?>" alt="Logo Flexo" title="Logo Flexo">
                </a>
            </div>
            <div class="fl-box fl-sm-8 fl-lg-11 text-right fl-ut-auto">
                <div class="row fluid fill-height fl-sm-justify-end fl-sm-align-content-center position-relative">
                    <div class="fl-box">
                        <div id="icon-nav">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="lucide lucide-menu-icon lucide-menu icons">
                                <path d="M4 5h16"/>
                                <path d="M4 12h16"/>
                                <path d="M4 19h16"/>
                            </svg>
                        </div>
                    </div>
                    <div class="fl-box" id="box-nav-menu">
                        <nav>
                            <ul>
                                <li>
                                    <a href="<?= base_url(service('request')->getLocale() . '/docs/getting-started') ?>" class="link on-dark"><?= lang('Website.nav_documentation') ?></a>
                                </li>
                                <li>
                                    <a href="<?= base_url(service('request')->getLocale() . '/customize') ?>" class="link on-dark"><?= lang('Website.nav_customize') ?></a>
                                </li>
                                <li>
                                    <a href="<?= base_url('/assets/file/package-flexo/package-flexo.zip') ?>" class="link on-dark"><?= lang('Website.nav_download') ?></a>
                                </li>
                                <li>
                                    <a href="<?= base_url(service('request')->getLocale() . '/contact') ?>" class="link on-dark"><?= lang('Website.nav_contacts') ?></a>
                                </li>
                                <li>
                                    <a href="<?= SITE_GITHUB ?>" target="_blank" class="link on-dark">GitHub</a>
                                </li>
                                <li class="fl-sm-hidden fl-lg-visible color-white sep">

                                </li>
                                <li class="lang-switcher">
                                    <a href="javascript:void(0)" class="link on-dark lang-current"><?= lang('Website.nav_lang') ?> <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg></a>
                                    <ul class="lang-dropdown">
                                        <li><a href="/en/">English</a></li>
                                        <li><a href="/it/">Italiano</a></li>
                                        <li><a href="/fr/">Fran&ccedil;ais</a></li>
                                        <li><a href="/es/">Espa&ntilde;ol</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
