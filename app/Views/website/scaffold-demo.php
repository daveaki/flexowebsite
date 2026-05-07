<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Scaffold Demo — flexocss</title>
        <meta name="description" content="A complete real-world page template built with flexocss.">
        <link rel="stylesheet" href="<?= base_url('assets/css/lib/flexo.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
        <style>
                /* ── Monochrome overrides for scaffold demo ── */
                body { background: #fff; font-family: 'Lexend', sans-serif; }

                .sd-nav { background: #000; }
                .sd-nav-logo span { color: #fff; }
                .sd-nav-cta { background: #fff; color: #000 !important; }
                .sd-nav-cta:hover { background: #e5e5e5; }

                .sd-hero { background: #0a0a0a; padding: 96px 32px 112px; text-align: center; }
                .sd-hero h1 { font-size: clamp(2rem,5vw,3.5rem); font-weight: 800; color: #fff; margin: 0 0 24px; line-height: 1.15; letter-spacing: -1.5px; }
                .sd-hero h1 em { font-style: normal; color: #aaa; }
                .sd-hero p { font-size: 1.05rem; color: #fff !important; max-width: 540px; margin: 0 auto 40px; line-height: 1.75; }
                .sd-hero-label { font-size: 0.72rem; font-weight: 700; letter-spacing: 3px; text-transform: uppercase; color: rgba(255,255,255,0.4) !important; margin: 0 0 16px; }
                .sd-hero-note { margin: 32px 0 0; font-size: 0.78rem; color: rgba(255,255,255,0.4) !important; }

                .sd-btn { display: inline-block; background: #fff; color: #000; padding: 13px 36px; border-radius: 0; font-size: 0.9rem; font-weight: 700; text-decoration: none; cursor: default; transition: background 0.2s; }
                .sd-btn:hover { background: #e5e5e5; }
                .sd-btn.outline { background: transparent; border: 1.5px solid rgba(255,255,255,0.2); color: #fff; }
                .sd-btn.outline:hover { border-color: rgba(255,255,255,0.45); }
                .sd-btn.dark { background: #111; color: #fff; }
                .sd-btn.dark:hover { background: #222; }

                .sd-tag { display: inline-block; background: #f0f0f0; color: #555; font-size: 0.72rem; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; padding: 5px 12px; border-radius: 0; margin-bottom: 16px; }

                /* Features */
                .sd-features { background: #fafafa; padding: 80px 32px; }
                .sd-features h2 { font-size: clamp(1.6rem,3vw,2.2rem); font-weight: 800; color: #0a0a0a; margin: 0 0 12px; letter-spacing: -0.5px; }
                .sd-features > .container > .row > .fl-box > p { color: #888; font-size: 0.95rem; margin: 0 0 48px; line-height: 1.7; }
                .sd-card { background: #fff; border: 1px solid #e8e8e8; border-radius: 0; padding: 28px; height: 100%; box-sizing: border-box; }
                .sd-card-icon { width: 36px; height: 36px; border-radius: 0; background: #111; margin-bottom: 18px; }
                .sd-card h4 { font-size: 1rem; font-weight: 700; color: #111; margin: 0 0 10px; }
                .sd-card p { font-size: 0.875rem; color: #888; margin: 0; line-height: 1.65; }

                /* Content */
                .sd-content { background: #fff; padding: 80px 32px; }
                .sd-content h2 { font-size: clamp(1.5rem,3vw,2rem); font-weight: 800; color: #0a0a0a; margin: 0 0 20px; letter-spacing: -0.5px; }
                .sd-content p { font-size: 0.9rem; color: #777; line-height: 1.75; margin: 0 0 16px; }
                .sd-content-alt { background: #f5f5f5; }
                .sd-visual { background: #f0f0f0; border-radius: 0; min-height: 300px; display: flex; align-items: center; justify-content: center; border: 1px solid #e0e0e0; }
                .sd-visual-code { font-family: monospace; font-size: 0.82rem; line-height: 2.1; color: #bbb; text-align: left; padding: 24px; }
                .sd-visual-code .c1 { color: #555; }
                .sd-visual-code .c2 { color: #888; }
                .sd-visual-code .c3 { color: #aaa; }
                .sd-visual-bars { display: flex; gap: 6px; flex-wrap: wrap; justify-content: center; padding: 24px; max-width: 300px; }
                .sd-visual-bar { height: 36px; border-radius: 0; flex: 0 0 calc(25% - 5px); }
                .sd-link { display: inline-flex; align-items: center; gap: 6px; font-size: 0.88rem; font-weight: 700; color: #333; text-decoration: none; }
                .sd-link:hover { color: #000; }

                /* Stats */
                .sd-stats { background: #0a0a0a; padding: 80px 32px; }
                .sd-stats h2 { font-size: clamp(1.6rem,3vw,2.2rem); font-weight: 800; color: #fff; margin: 0 0 12px; letter-spacing: -0.5px; }
                .sd-stats p { color: #fff !important; }
                .sd-stat-card { background: #111; border: 1px solid #1e1e1e; border-radius: 0; padding: 28px 24px; box-sizing: border-box; }
                .sd-stat-num { font-size: 2.2rem; font-weight: 800; color: #fff !important; margin-bottom: 6px; letter-spacing: -1px; line-height: 1; }
                .sd-stat-card h4 { font-size: 0.9rem; font-weight: 700; color: #fff !important; margin: 0 0 8px; }
                .sd-stat-card p { font-size: 0.8rem; color: #fff !important; margin: 0; line-height: 1.6; }

                /* CTA */
                .sd-cta { background: #fff; padding: 96px 32px; text-align: center; border-top: 1px solid #f0f0f0; }
                .sd-cta h2 { font-size: clamp(1.8rem,4vw,2.8rem); font-weight: 800; color: #0a0a0a; margin: 0 0 16px; letter-spacing: -1px; }
                .sd-cta p { font-size: 0.95rem; color: #888; margin: 0 0 40px; line-height: 1.75; max-width: 440px; margin-left: auto; margin-right: auto; }

                /* Footer */
                .sd-footer { background: #000; padding: 64px 32px 32px; }
                .sd-footer h4 { font-size: 0.78rem; font-weight: 700; color: rgba(255,255,255,0.35) !important; text-transform: uppercase; letter-spacing: 1.5px; margin: 0 0 16px; }
                .sd-footer ul { list-style: none; padding: 0; margin: 0; }
                .sd-footer ul li { font-size: 0.85rem; color: #fff !important; padding: 5px 0; }
                .sd-footer-brand { font-size: 1.2rem; font-weight: 800; color: #fff !important; letter-spacing: -0.5px; margin: 0 0 12px; }
                .sd-footer-desc { font-size: 0.83rem; color: #fff !important; line-height: 1.7; margin: 0; }
                .sd-footer-copy { border-top: 1px solid #1a1a1a; margin-top: 48px; padding-top: 24px; font-size: 0.75rem; color: rgba(255,255,255,0.25) !important; text-align: center; }
        </style>
</head>
<body>

<!-- Wireframe filter panel -->
<div class="wf-panel" id="wfPanel">
        <div class="wf-panel-header">Wireframe</div>
        <button class="wf-panel-btn active" data-mode="off">
                <span class="wf-panel-dot"></span>Off
        </button>
        <button class="wf-panel-btn" data-mode="outline">
                <span class="wf-panel-dot"></span>Outline
        </button>
        <button class="wf-panel-btn" data-mode="fill">
                <span class="wf-panel-dot"></span>Fill
        </button>
        <button class="wf-panel-btn" data-mode="border">
                <span class="wf-panel-dot"></span>Fill + Border
        </button>
        <button class="wf-panel-btn" data-mode="info">
                <span class="wf-panel-dot"></span>Info
        </button>
        <button class="wf-panel-btn" data-mode="full">
                <span class="wf-panel-dot"></span>Full debug
        </button>
</div>

<!-- Back to docs banner -->
<div class="sd-back-banner">
        &larr; <a href="<?= base_url('docs/customization') ?>">Back to docs</a>
</div>

<!-- ═══ NAV ═══════════════════════════════════════════════════════════════ -->
<nav class="sd-nav">
        <div class="sd-nav-inner">
                <a href="#" class="sd-nav-logo">flexo<span>css</span></a>
                <ul class="sd-nav-links">
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">Examples</a></li>
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#" class="sd-nav-cta">Get Started</a></li>
                </ul>
        </div>
</nav>

<!-- ═══ HERO ══════════════════════════════════════════════════════════════ -->
<section class="sd-hero">
        <div class="container">
                <div class="row fl-sm-gap-16 place-center">
                        <div class="fl-box fl-16 fl-lg-12 fl-sp-10">
                                <p class="sd-hero-label">The CSS Grid Framework</p>
                                <h1>Build responsive layouts<br>with <em>flexocss</em></h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vehicula augue ac urna facilisis, vel condimentum enim rutrum. Sed tincidunt nisi vitae lorem pharetra posuere.</p>
                                <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
                                        <a href="#" class="sd-btn">Get Started</a>
                                        <a href="#" class="sd-btn outline">View Docs</a>
                                </div>
                        </div>
                </div>
        </div>
</section>

<!-- ═══ FEATURES — 3 columns horizontal ══════════════════════════════════ -->
<section class="sd-features">
        <div class="container">
                <div class="row block fl-sm-gap-8">
                        <div class="fl-box fl-16 fl-lg-10">
                                <span class="sd-tag">Features</span>
                                <h2>Everything you need, nothing you don&rsquo;t</h2>
                                <p>Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor ut.</p>
                        </div>
                </div>
                <div class="row fl-sm-gap-16 fl-lg-gap-24">
                        <div class="fl-box fl-16 fl-lg-16 fl-sp-5">
                                <div class="sd-card">
                                        <div class="sd-card-icon"></div>
                                        <h4>16-Column Grid</h4>
                                        <p>More granularity than traditional 12-column systems. Ut porta lorem at risus semper ornare, integer pellentesque venenatis massa.</p>
                                </div>
                        </div>
                        <div class="fl-box fl-16 fl-lg-8 fl-sp-5">
                                <div class="sd-card">
                                        <div class="sd-card-icon" style="background:#222;"></div>
                                        <h4>Gap-Aware Columns</h4>
                                        <p>Column widths automatically account for the gap. Proin euismod enim nec arcu tincidunt, sit amet malesuada arcu dignissim.</p>
                                </div>
                        </div>
                        <div class="fl-box fl-16 fl-lg-8 fl-sp-6">
                                <div class="sd-card">
                                        <div class="sd-card-icon" style="background:#333;"></div>
                                        <h4>6 Responsive Breakpoints</h4>
                                        <p>From small phones (sm) to ultrawide monitors (ut). Donec sed odio dui, cras justo odio dapibus ac facilisis in egestas.</p>
                                </div>
                        </div>
                </div>
        </div>
</section>

<!-- ═══ CONTENT — text left + visual right ═══════════════════════════════ -->
<section class="sd-content">
        <div class="container">
                <div class="row fl-sm-gap-32 fl-lg-gap-48 fl-sm-align-items-center">
                        <div class="fl-box fl-16 fl-lg-8 fl-sp-7">
                                <span class="sd-tag">How it works</span>
                                <h2>Designed for real projects, built for speed</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Donec nisl orci, egestas vel.</p>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget tempor sit amet ante.</p>
                                <div style="display:flex;gap:16px;flex-wrap:wrap;margin-top:8px;">
                                        <a href="#" class="sd-btn dark">Learn more</a>
                                        <a href="#" class="sd-link">View on GitHub &rarr;</a>
                                </div>
                        </div>
                        <div class="fl-box fl-16 fl-lg-8 fl-sp-9">
                                <div class="sd-visual" style="min-height:300px;">
                                        <div class="sd-visual-code">
                                                &lt;div class=&quot;<span class="c1">container</span>&quot;&gt;<br>
                                                &nbsp;&nbsp;&lt;div class=&quot;<span class="c2">row fl-sm-gap-16</span>&quot;&gt;<br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;<span class="c3">fl-box fl-sp-8</span>&quot;&gt;<br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
                                                &nbsp;&nbsp;&lt;/div&gt;<br>
                                                &lt;/div&gt;
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</section>

<!-- ═══ CONTENT REVERSED — visual left + text right ══════════════════════ -->
<section class="sd-content sd-content-alt">
        <div class="container">
                <div class="row fl-sm-gap-32 fl-lg-gap-48 fl-sm-align-items-center">
                        <div class="fl-box fl-16 fl-lg-8 fl-sp-8">
                                <div class="sd-visual" style="min-height:280px;">
                                        <div class="sd-visual-bars">
                                                <?php
                                                $shades = ['#111','#1a1a1a','#222','#2a2a2a','#333','#3a3a3a','#444','#4a4a4a'];
                                                foreach ($shades as $i => $shade):
                                                ?>
                                                <div class="sd-visual-bar" style="background:<?= $shade ?>;"></div>
                                                <?php endforeach; ?>
                                        </div>
                                </div>
                        </div>
                        <div class="fl-box fl-16 fl-lg-8 fl-sp-8">
                                <span class="sd-tag">Wireframe Mode</span>
                                <h2>Debug your layout visually</h2>
                                <p>Ut porta lorem at risus semper ornare. Integer pellentesque venenatis massa, a commodo augue commodo vitae. Donec dignissim elit purus, sit amet mattis eros volutpat quis.</p>
                                <p>Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec, blandit vel, egestas et, augue. Vestibulum tincidunt malesuada tellus.</p>
                                <a href="#" class="sd-btn dark" style="margin-top:8px;">Explore wireframe</a>
                        </div>
                </div>
        </div>
</section>

<!-- ═══ STATS — 4 cards horizontal ═══════════════════════════════════════ -->
<section class="sd-stats">
        <div class="container">
                <div class="row block fl-sm-gap-8">
                        <div class="fl-box fl-16 fl-lg-10">
                                <span style="display:inline-block;font-size:0.72rem;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:rgba(255,255,255,0.2);margin-bottom:16px;">Numbers</span>
                                <h2>Numbers that matter</h2>
                                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget.</p>
                        </div>
                </div>
                <div class="row fl-sm-gap-16 fl-lg-gap-24">
                        <div class="fl-box fl-16 fl-lg-8 fl-sp-4">
                                <div class="sd-stat-card">
                                        <div class="sd-stat-num">16</div>
                                        <h4>Grid columns</h4>
                                        <p>More granularity than traditional 12-column grid systems for precise layouts.</p>
                                </div>
                        </div>
                        <div class="fl-box fl-16 fl-lg-8 fl-sp-4">
                                <div class="sd-stat-card">
                                        <div class="sd-stat-num">6</div>
                                        <h4>Breakpoints</h4>
                                        <p>From small phones to ultrawide monitors, every screen size is fully covered.</p>
                                </div>
                        </div>
                        <div class="fl-box fl-16 fl-lg-8 fl-sp-4">
                                <div class="sd-stat-card">
                                        <div class="sd-stat-num">0</div>
                                        <h4>Dependencies</h4>
                                        <p>Pure CSS, no JavaScript required. Just include the file and start building.</p>
                                </div>
                        </div>
                        <div class="fl-box fl-16 fl-lg-8 fl-sp-4">
                                <div class="sd-stat-card">
                                        <div class="sd-stat-num">&#x221e;</div>
                                        <h4>Nesting levels</h4>
                                        <p>Rows inside boxes inside rows — create any complex layout without limits.</p>
                                </div>
                        </div>
                </div>
        </div>
</section>

<!-- ═══ CTA ════════════════════════════════════════════════════════════════ -->
<section class="sd-cta">
        <div class="container">
                <div class="row fl-sm-gap-16 place-center">
                        <div class="fl-box fl-16 fl-lg-12 fl-sp-8">
                                <h2>Ready to start building?</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus.</p>
                                <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
                                        <a href="#" class="sd-btn dark" style="padding:14px 40px;">Install via npm</a>
                                        <a href="#" class="sd-btn" style="padding:14px 40px;border:1.5px solid #ddd;color:#111;">Read the docs</a>
                                </div>
                        </div>
                </div>
        </div>
</section>

<!-- ═══ FOOTER ════════════════════════════════════════════════════════════ -->
<footer class="sd-footer">
        <div class="container">
                <div class="row fl-sm-gap-24 fl-lg-gap-32">
                        <div class="fl-box fl-16 fl-lg-6 fl-sp-5">
                                <p class="sd-footer-brand">flexocss</p>
                                <p class="sd-footer-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris vivamus hendrerit arcu sed erat molestie vehicula et purus ornare.</p>
                        </div>
                        <div class="fl-box fl-16 fl-lg-3 fl-sp-3 fl-lg-offset-1">
                                <h4>Framework</h4>
                                <ul>
                                        <li>Getting Started</li>
                                        <li>Grid System</li>
                                        <li>Gap &amp; Area</li>
                                        <li>Breakpoints</li>
                                        <li>Utilities</li>
                                        <li>Wireframe</li>
                                        <li>Customization</li>
                                </ul>
                        </div>
                        <div class="fl-box fl-16 fl-lg-3 fl-sp-3 fl-lg-offset-1">
                                <h4>Resources</h4>
                                <ul>
                                        <li>npm package</li>
                                        <li>GitHub</li>
                                        <li>Changelog</li>
                                        <li>License (MIT)</li>
                                        <li>Issues</li>
                                </ul>
                        </div>
                </div>
                <div class="sd-footer-copy">
                        &copy; 2026 flexocss &mdash; Built with flexocss &mdash; MIT License
                </div>
        </div>
</footer>

<script>
(function () {
        var modes = {
                'off':     { id: false,       cls: '' },
                'outline': { id: 'wireframe', cls: '' },
                'fill':    { id: 'wireframe', cls: 'fill' },
                'border':  { id: 'wireframe', cls: 'fill border-2' },
                'info':    { id: 'wireframe', cls: 'fill info' },
                'full':    { id: 'wireframe', cls: 'fill border-1 info' },
        };
        var btns = document.querySelectorAll('.wf-panel-btn');
        btns.forEach(function (btn) {
                btn.addEventListener('click', function () {
                        var mode = modes[btn.dataset.mode];
                        if (mode.id) { document.body.id = mode.id; }
                        else { document.body.removeAttribute('id'); }
                        var keep = Array.from(document.body.classList).filter(function (c) {
                                return !['fill','info','border-1','border-2','border-3','border-4','border-5'].includes(c);
                        });
                        document.body.className = (keep.concat(mode.cls ? mode.cls.split(' ') : [])).join(' ').trim();
                        btns.forEach(function (b) { b.classList.remove('active'); });
                        btn.classList.add('active');
                });
        });
}());
</script>
</body>
</html>
