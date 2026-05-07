<aside id="docs-sidebar">
        <nav>
                <ul>
                        <li class="<?= $slug === 'getting-started' ? 'active' : '' ?>">
                                <a href="<?= base_url(service('request')->getLocale() . '/docs/getting-started') ?>"><?= lang('Docs.nav_getting_started') ?></a>
                        </li>
                        <li class="<?= $slug === 'grid' ? 'active' : '' ?>">
                                <a href="<?= base_url(service('request')->getLocale() . '/docs/grid') ?>"><?= lang('Docs.nav_grid') ?></a>
                        </li>
                        <li class="<?= $slug === 'gap-and-area' ? 'active' : '' ?>">
                                <a href="<?= base_url(service('request')->getLocale() . '/docs/gap-and-area') ?>"><?= lang('Docs.nav_gap_and_area') ?></a>
                        </li>
                        <li class="<?= $slug === 'breakpoints' ? 'active' : '' ?>">
                                <a href="<?= base_url(service('request')->getLocale() . '/docs/breakpoints') ?>"><?= lang('Docs.nav_breakpoints') ?></a>
                        </li>
                        <li class="<?= $slug === 'utilities' ? 'active' : '' ?>">
                                <a href="<?= base_url(service('request')->getLocale() . '/docs/utilities') ?>"><?= lang('Docs.nav_utilities') ?></a>
                        </li>
                        <li class="<?= $slug === 'wireframe' ? 'active' : '' ?>">
                                <a href="<?= base_url(service('request')->getLocale() . '/docs/wireframe') ?>"><?= lang('Docs.nav_wireframe') ?></a>
                        </li>
                        <li class="<?= $slug === 'customization' ? 'active' : '' ?>">
                                <a href="<?= base_url(service('request')->getLocale() . '/docs/customization') ?>"><?= lang('Docs.nav_customization') ?></a>
                        </li>
                        <li>
                                <a href="<?= base_url('scaffold-demo') ?>"><?= lang('Docs.nav_scaffold') ?></a>
                        </li>
                </ul>
        </nav>
</aside>
