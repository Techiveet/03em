   <!-- JAVASCRIPT  FILES  -->
   <script src="{{ asset('frontend/js/jquery-3.7.0.min.js')}}"></script>
   <!-- JQUERY.MIN JS -->
   <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
   <!-- BOOTSTRAP.MIN JS -->
   <script src="{{ asset('frontend/js/bootstrap-select.min.js')}}"></script>
   <!-- FORM JS -->
   <script src="{{ asset('frontend/js/jquery.bootstrap-touchspin.min.js')}}"></script>
   <!-- FORM JS -->
   <script src="{{ asset('frontend/js/magnific-popup.min.js')}}"></script>
   <!-- MAGNIFIC-POPUP JS -->
   <script src="{{ asset('frontend/js/waypoints.min.js')}}"></script>
   <!-- WAYPOINTS JS -->
   <script src="{{ asset('frontend/js/counterup.min.js')}}"></script>
   <!-- COUNTERUP JS -->
   <script src="{{ asset('frontend/js/waypoints-sticky.min.js')}}"></script>
   <!-- COUNTERUP JS -->
   <script src="{{ asset('frontend/js/isotope.pkgd.min.js')}}"></script>
   <!-- MASONRY  -->
   <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
   <!-- MASONRY  -->
   <script src="{{ asset('frontend/js/owl.carousel.min.j')}}s"></script>
   <!-- OWL  SLIDER  -->
   <script src="{{ asset('frontend/js/scrolla.min.js')}}"></script>
   <!-- ON SCROLL CONTENT ANIMTE   -->
   <script src="{{ asset('frontend/js/custom.js')}}"></script>
   <!-- CUSTOM FUCTIONS  -->
   <script src="{{ asset('frontend/js/shortcode.js')}}"></script>
   <!-- SHORTCODE FUCTIONS  -->
   <script src="{{ asset('frontend/js/switcher.js')}}"></script>
   <!-- SWITCHER FUCTIONS  -->
   <script src="{{ asset('frontend/js/jquery.bgscroll.js')}}"></script>
   <!-- BACKGROUND SCROLL -->
   <script src="{{ asset('frontend/js/tickerNews.min.js')}}"></script>
   <!-- TICKERNEWS-->

   <!-- REVOLUTION JS FILES -->

   <script src="{{ asset('frontend/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
   <script src="frontend/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

   <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
   <script src="{{ asset('frontend/plugins/revolution/revolution/js/extensions/revolution-plugin.js')}}"></script>

   <!-- REVOLUTION SLIDER FUNCTION  ===== -->
   <script src="{{ asset('frontend/js/rev-script-2.js') }}"></script>

   {{-- converter --}}
   <script src="{{ asset('frontend/js/latest.min.js') }}" async></script>
   <script>
    // Function to fetch and update the ticker
    async function updateCryptoTicker() {
        const apiUrl = 'https://api.coinlore.net/api/tickers/'; // CoinLore API URL

        try {
            const response = await fetch(apiUrl);
            const data = await response.json();

            const tickerContainer = document.getElementById('cryptoTicker');
            tickerContainer.innerHTML = ''; // Clear existing content

            // Create ticker items and append them to the container
            const tickerItems = data.data.slice(0, 10).map((coin) => {
                const priceChangeClass = coin.percent_change_24h >= 0 ? 'text-green' : 'text-danger';

                return `
                    <div class="ti_news">
                        <a href="#">
                            <img src="frontend/images/coin-icon/${coin.symbol.toLowerCase()}.png" alt="${coin.symbol}">
                            <span>${coin.symbol}:</span>
                            <span>$ ${parseFloat(coin.price_usd).toFixed(2)}</span>
                            <span class="${priceChangeClass} p-lr5">${coin.percent_change_24h} %</span>
                        </a>
                    </div>
                `;
            });

            // Duplicate items to ensure a smooth loop
            tickerContainer.innerHTML = tickerItems.join('') + tickerItems.join('');

            // Start the ticker animation
            startTicker(tickerContainer, tickerItems.length);
        } catch (error) {
            console.error('Error fetching cryptocurrency data:', error);
        }
    }

    // Function to start the ticker animation
    function startTicker(container, itemCount) {
        const totalWidth = container.scrollWidth; // Total width of all items
        let scrollPosition = 0;

        // Smooth scrolling effect
        function scroll() {
            scrollPosition += 1; // Scroll by 1px
            if (scrollPosition >= totalWidth / 2) {
                scrollPosition = 0; // Reset to start position for seamless loop
            }
            container.style.transform = `translateX(-${scrollPosition}px)`; // Move container
            requestAnimationFrame(scroll); // Smoothly continue scrolling
        }

        // Start scrolling
        scroll();
    }

    // Fetch and update ticker on page load
    updateCryptoTicker();
    </script>
  <script>
    const cryptoLogos = {
        BTC: "bitcoin.png",
        ETH: "ethereum.png",
        LTC: "litecoin.png",
        XRP: "ripple.png",
        XMR: "monero.png",
        DASH: "digitalcash.png",
        VERI: "veritaseum.png",
        XUC: "exchange_union.png",
        DOGE: "dogecoin.png",
        ADA: "cardano.png",
        BNB: "binancecoin.png",
        DOT: "polkadot.png",
        SOL: "solana.png",
        USDT: "tether.png",
        USDC: "usd-coin.png",
        TRX: "tron.png",
        AVAX: "avalanche.png",
        SHIB: "shiba-inu.png",
        MATIC: "polygon.png",
        LINK: "chainlink.png",
        UNI: "uniswap.png",
        AAVE: "aave.png",
        XLM: "stellar.png",
        THETA: "theta.png",
        EOS: "eos.png",
        ZEC: "zcash.png",
        ETC: "ethereum-classic.png",
        BSV: "bitcoin-sv.png",
        IOTA: "iota.png",
        ALGO: "algorand.png",
        NEAR: "near.png",
        FTT: "ftx-token.png",
        CRO: "crypto-com.png",
        BCH: "bitcoin-cash.png",
        ATOM: "cosmos.png",
        VET: "vechain.png",
        ICP: "internet-computer.png",
        FIL: "filecoin.png",
        EGLD: "elrond.png",
        HBAR: "hedera.png",
        // Add more coins as necessary
    };

    let currentPage = 1; // Current page number
    const rowsPerPage = 10; // Number of rows per page
    let cryptoData = []; // Store all cryptocurrency data

    // Fetch cryptocurrency data
    async function fetchCryptoData() {
        const apiUrl = 'https://api.coinlore.net/api/tickers/';

        try {
            const response = await fetch(apiUrl);
            const data = await response.json();
            cryptoData = data.data; // Store all data
            renderTable(currentPage); // Render the first page
            renderPagination();
        } catch (error) {
            console.error('Error fetching cryptocurrency data:', error);
        }
    }

    // Render the table for a specific page
    function renderTable(page) {
        const tableBody = document.getElementById('cryptoTableBody');
        tableBody.innerHTML = ''; // Clear existing rows

        // Calculate start and end indices for the current page
        const start = (page - 1) * rowsPerPage;
        const end = start + rowsPerPage;

        // Slice data for the current page and populate the table
        cryptoData.slice(start, end).forEach((coin) => {
            const priceChangeClass = coin.percent_change_24h >= 0 ? 'text-green' : 'text-danger';
            const logo = cryptoLogos[coin.symbol] || "default.png"; // Use default logo if unavailable

            const row = `
                <tr>
                    <td data-title="Cryptocurrency">
                        <img src="frontend/images/coin-icon/${logo}" class="p-r10" alt="${coin.symbol}">
                        ${coin.name}
                    </td>
                    <td data-title="Price">${parseFloat(coin.price_usd).toFixed(2)} $</td>
                    <td data-title="24h % Change" class="numeric ${priceChangeClass}">${coin.percent_change_24h} %</td>
                    <td data-title="24h Volume (coin)" class="numeric">${parseInt(coin.volume24).toLocaleString()} ${coin.symbol}</td>
                    <td data-title="Supply" class="numeric">${parseInt(coin.csupply).toLocaleString()}</td>
                </tr>
            `;
            tableBody.innerHTML += row;
        });
    }

    // Render pagination controls
    function renderPagination() {
        const paginationControls = document.getElementById('paginationControls');
        paginationControls.innerHTML = ''; // Clear existing controls

        const totalPages = Math.ceil(cryptoData.length / rowsPerPage);

        for (let i = 1; i <= totalPages; i++) {
            const button = document.createElement('button');
            button.innerText = i;
            button.className = `pagination-button ${i === currentPage ? 'active' : ''}`;
            button.onclick = () => {
                currentPage = i; // Update current page
                renderTable(currentPage); // Render the selected page
                renderPagination(); // Update pagination controls
            };
            paginationControls.appendChild(button);
        }
    }

    // Fetch data on page load
    fetchCryptoData();
</script>
