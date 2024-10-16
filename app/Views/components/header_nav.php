<!-- Header -->
<nav class="navbar navbar-expand-sm" style="background-color: lightblue;">
</nav>

<nav class="navbar navbar-expand-sm navbar-custom">
    <div class="container">
        <a href="<?= base_url() ?>" class="navbar-brand text-uppercase fs-5 text-white">
            <img src="<?= base_url('assets/images/Korean-Air.png') ?>" alt="Korean-Air" width="250" class="d-inline-block align-middle" onerror="this.onerror=null; this.src='<?= base_url('assets/images/Korean-Air.png') ?>';">
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
            <span class="navbar-toggler-icon"></span>   
        </button>

        <div class="collapse navbar-collapse" id="list2">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="<?= base_url() ?>" class="nav-link text-white">Home</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('info') ?>" class="nav-link text-white">Travel Info</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('about') ?>" class="nav-link text-white">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
