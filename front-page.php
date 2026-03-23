<?php get_header(); ?>
<section class="hero">
    <div class="container hero-grid">
        <div>
            <p class="eyebrow">Clovis, New Mexico Cell</p>
            <h1>A life of prayer, sacrament, study, and service rooted in Christ.</h1>
            <p class="lead">Welcome to the Community of the Coworkers of Christ Clovis NM Cell — a sacramental community shaped by daily prayer, generous orthodoxy, reconciliation, hospitality, and faithful presence in the world.</p>
            <div class="hero-actions">
                <a class="button button-primary" href="<?php echo esc_url(home_url('/member-portal/')); ?>">Enter Member Portal</a>
                <a class="button" href="<?php echo esc_url(home_url('/the-common-rule/')); ?>">Read the Common Rule</a>
            </div>
        </div>
        <aside class="hero-card">
            <h3>Community Rhythm</h3>
            <ul>
                <li>Daily prayer and the office</li>
                <li>Shared study and formation</li>
                <li>Mutual care and reconciliation</li>
                <li>Local mission and service</li>
            </ul>
        </aside>
    </div>
</section>

<section class="section section-alt">
    <div class="container cards three">
        <article class="card">
            <h3>Prayer</h3>
            <p>Open daily prayers, liturgies, and seasonal resources designed for a prayer-shaped community.</p>
            <a href="<?php echo esc_url(home_url('/daily-prayers/')); ?>">Open prayers →</a>
        </article>
        <article class="card">
            <h3>Community Life</h3>
            <p>Stay connected through community news, member updates, prayer requests, and private messages.</p>
            <a href="<?php echo esc_url(home_url('/community-news/')); ?>">View news →</a>
        </article>
        <article class="card">
            <h3>Events & Formation</h3>
            <p>Track liturgies, gatherings, study sessions, and local events for the Clovis cell and beyond.</p>
            <a href="<?php echo esc_url(home_url('/events/')); ?>">See events →</a>
        </article>
    </div>
</section>

<section class="section">
    <div class="container split">
        <div>
            <p class="eyebrow">Who We Are</p>
            <h2>Sacramental. Hospitable. Grounded. Alive.</h2>
            <p>We are building a steady, hopeful Christian life together — one shaped by sacramental worship, ancient practices, mutual encouragement, and practical service in everyday life.</p>
            <p>This website is built to serve both visitors and members: public teaching and contact on the front end, and a member-centered portal for prayer, events, messages, and community resources.</p>
        </div>
        <div class="quote-card">
            <p>"Come, pray, learn, serve, and walk with us in the way of Christ."</p>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <h2 class="section-title">Quick Access</h2>
        <div class="cards four">
            <a class="card card-link" href="<?php echo esc_url(home_url('/sermons-teachings/')); ?>"><strong>Sermons</strong><span>Audio + teaching archive</span></a>
            <a class="card card-link" href="<?php echo esc_url(home_url('/pdf-library/')); ?>"><strong>PDF Library</strong><span>Rules, guides, study files</span></a>
            <a class="card card-link" href="<?php echo esc_url(home_url('/prayer-requests/')); ?>"><strong>Prayer Requests</strong><span>Share needs with the community</span></a>
            <a class="card card-link" href="<?php echo esc_url(home_url('/give/')); ?>"><strong>Give</strong><span>Support the mission</span></a>
        </div>
    </div>
</section>
<?php get_footer(); ?>
