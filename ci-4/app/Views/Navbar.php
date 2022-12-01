<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php $isActivepage = fn($x) => uri_string() === $x ? 'active' : ''; ?>
                <li class="nav-item">
                    <a class="nav-link <?= $isActivepage('/'); ?>" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $isActivepage('barang'); ?>" href="/barang">Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $isActivepage('transaksi'); ?>" href="/transaksi">Transaksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $isActivepage('kategori'); ?>" href="/kategori">Kategori</a>
                </li>
            <ul>
        </div>
    </div>
</nav>