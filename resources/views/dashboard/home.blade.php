@include('dashboard.header')
   
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="middle-content p-0">
                <div wire:id="TEqH514iI7Rm0IiNvrMq" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;TEqH514iI7Rm0IiNvrMq&quot;,&quot;name&quot;:&quot;client.home.home-component&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;home&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:{&quot;l2843757141-0&quot;:{&quot;id&quot;:&quot;NhLk8TMN9ih5MF3scsDT&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;l2843757141-1&quot;:{&quot;id&quot;:&quot;L2h9RT0ZmDABKu26TlzZ&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;l2843757141-3&quot;:{&quot;id&quot;:&quot;Bns2N7Q1epSq7MULsJUE&quot;,&quot;tag&quot;:&quot;div&quot;}},&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;b11c203d&quot;,&quot;data&quot;:{&quot;data&quot;:{&quot;title&quot;:&quot;Home&quot;,&quot;menu_active&quot;:&quot;home&quot;},&quot;userAuth&quot;:[],&quot;showmainAlerts&quot;:[],&quot;popupAlerts&quot;:[]},&quot;dataMeta&quot;:{&quot;models&quot;:{&quot;userAuth&quot;:{&quot;class&quot;:&quot;App\\Models\\User&quot;,&quot;id&quot;:249387,&quot;relations&quot;:[&quot;roles&quot;,&quot;lang&quot;,&quot;dashboards&quot;,&quot;walletsmainuser&quot;,&quot;walletsmainuser.main_wallet&quot;,&quot;ibsaldos&quot;],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}}},&quot;checksum&quot;:&quot;19456be808253395d636ccc5f1d784f373ad329f3a085947e86ee7dde1e37ab9&quot;}}">

 <!-- TradingView Widget BEGIN -->
 
 <style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  .tradingview-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    background-color: #ffffff; /* Set background color to white */
    padding: 20px; /* Add padding for better spacing */
  }
  .tradingview-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    padding: 10px;
    background-color: #f1f3f6;
    border-bottom: 1px solid #ccc;
    border-radius: 5px; /* Add border radius for a rounded appearance */
    margin-bottom: 20px; /* Add margin to separate from the widget */
  }
  .client-info {
    display: flex;
    align-items: center;
    background-color: #ffffff; /* Set background color to white */
    padding: 10px; /* Add padding for better spacing */
    border-radius: 5px; /* Add border radius for a rounded appearance */
  }
  .client-info span {
    margin-right: 10px;
  }
  .client-info img {
    border-radius: 50%;
  }
  .tradingview-widget {
    width: 100%;
    height: 600px; /* Increase height for better visibility on laptops */
    max-width: 1000px; /* Limit max width for better readability */
  }

  @media (max-width: 768px) {
    /* Adjustments for tablet and below */
    .tradingview-widget {
      height: 600px; /* Reduce height for smaller screens */
    }
  }
</style>

<style>
    .container {
      width: 80%;
      margin: 20px auto;
      padding: 10px;
      border-radius: 10px;
      background-color: rgba(240, 240, 240, 0.8); /* Transparent background color */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
  
    .marquee-container {
      overflow: hidden;
      border-radius: 10px;
    }
  
    .marquee {
      color: black;
      /* background-color: rgba(48, 92, 137, 0.8); Transparent background color */
      font-weight: bold;
      padding: 10px;
      border-radius: 10px;
    }
  </style>
          





<div class="tradingview-container">
    <div class="marquee-container">
  <marquee class="marquee" behavior="scroll" direction="left" scrollamount="5">
 Notification: {{Auth::user()->update_notification}}
  </marquee>
</div> 
  <div class="tradingview-header">
    <div>
      <span style="color: black">{{Auth::user()->name}}</span><br>
      <span style="color: black">Total Balance: ${{$user_balance}}</span>
    </div>
    <div class="client-info">
      <span style="color: black">{{Auth::user()->name}}</span>
      <div class="avatar-container">
        <div class="avatar avatar-sm avatar-indicators avatar-online" style="border-radius: 50%; border: 3px solid rgba(224, 230, 237, 0.16);">
        
                                                                                <img alt="avatar" src="{{asset('user/uploads/id/'.Auth::user()->photo)}}" class="rounded-circle">
                                                
                                    </div>
    </div>
                                                                
    </div>
  </div>
  <div id="tradingview_widget" class="tradingview-widget"></div>
</div>

<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
<script type="text/javascript">
  new TradingView.widget({
    "width": "100%",
    "height": "600", // Default height
    "symbol": "COINBASE:BTCUSD",  // Change to the desired cryptocurrency symbol
    "interval": "D",
    "timezone": "Etc/UTC",
    "theme": "light",
    "style": "1",
    "locale": "en",
    "toolbar_bg": "#f1f3f6",
    "enable_publishing": false,
    "allow_symbol_change": true,
    "container_id": "tradingview_widget"
  });
</script>




<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0px;
   
  }

  .crypto-container {
    display: flex;
    flex-direction: column;
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    width: 100%;
  }

  .crypto-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 15px;
    padding: 10px;
    border-bottom: 1px solid #ddd;
    width: 100%;
  }

  .crypto-info {
    display: flex;
    align-items: center;
    flex-grow: 1;
  }

  .crypto-logo {
    width: 40px;
    height: 40px;
    margin-right: 15px;
  }

  .crypto-details {
    display: flex;
    flex-direction: column;
    flex-grow: 1;
  }

  .crypto-name {
    font-size: 20px;
    font-weight: bold;
    color: #333;
  }

  .crypto-price, .crypto-change {
    font-size: 18px;
    color: #333;
  }

  .crypto-change.negative {
    color: red;
  }

  .crypto-change.positive {
    color: green;
  }

  .amount-of-zero {
    font-size: 18px;
    font-weight: bold;
    color: #333;
    margin-left: auto;
  }

  @media screen and (min-width: 1024px) {
    .crypto-container {
      width: 75vw; /* Set width to 100% of viewport width for laptop screens */
      max-width: none; /* Remove max-width */
      padding: 40px; /* Adjust padding if needed */
    }
  }
</style>
</head>
<body>
<div class="crypto-container" id="cryptoContainer">
  <!-- Bitcoin -->
  <div class="crypto-item" id="bitcoin">
    <div class="crypto-info">
      <img class="crypto-logo" src="bitcoin-btc-logo.png" alt="Bitcoin">
      <div class="crypto-details">
        <div class="crypto-name">Bitcoin</div>
        <div class="crypto-price" id="bitcoin-price">Price: $58,000</div>
        <div class="crypto-change" id="bitcoin-change">24h Change: 2.5%</div>
      </div>
    </div>
    <div class="amount-of-zero">{{$bitcoin}}</div>
  </div>
  <!-- Ethereum -->
  <div class="crypto-item" id="ethereum">
    <div class="crypto-info">
      <img class="crypto-logo" src="ethereum-eth-logo.png" alt="Ethereum">
      <div class="crypto-details">
        <div class="crypto-name">Ethereum</div>
        <div class="crypto-price" id="ethereum-price">Price: $4,000</div>
        <div class="crypto-change" id="ethereum-change">24h Change: 1.8%</div>
      </div>
    </div>
    <div class="amount-of-zero">{{$ethereum}}</div>
  </div>
  <!-- Litecoin -->
  <div class="crypto-item" id="litecoin">
    <div class="crypto-info">
      <img class="crypto-logo" src="litecoin-ltc-logo.png" alt="Litecoin">
      <div class="crypto-details">
        <div class="crypto-name">Litecoin</div>
        <div class="crypto-price" id="litecoin-price">Price: $200</div>
        <div class="crypto-change" id="litecoin-change">24h Change: 1.2%</div>
      </div>
    </div>
    <div class="amount-of-zero">{{$ilitecoin}}</div>
  </div>
  <!-- USDT -->
  <div class="crypto-item" id="tether">
    <div class="crypto-info">
      <img class="crypto-logo" src="tether-usdt-logo.png" alt="USDT">
      <div class="crypto-details">
        <div class="crypto-name">USDT</div>
        <div class="crypto-price" id="tether-price">Price: $1.00</div>
        <div class="crypto-change" id="tether-change">24h Change: 0.01%</div>
      </div>
    </div>
    <div class="amount-of-zero">{{$usdt}}</div>
  </div>
  <!-- BNB -->
  <div class="crypto-item" id="binancecoin">
    <div class="crypto-info">
      <img class="crypto-logo" src="binance-coin-bnb-logo.png" alt="BNB">
      <div class="crypto-details">
        <div class="crypto-name">BNB</div>
        <div class="crypto-price" id="binancecoin-price">Price: $600</div>
        <div class="crypto-change" id="binancecoin-change">24h Change: 3.5%</div>
      </div>
    </div>
    <div class="amount-of-zero">{{$BNB}}</div>
  </div>









  <!-- Solana -->
<div class="crypto-item" id="solana">
  <div class="crypto-info">
    <img class="crypto-logo" src="solana-sol-logo.png" alt="Solana">
    <div class="crypto-details">
      <div class="crypto-name">Solana</div>
      <div class="crypto-price" id="solana-price">Price: Loading...</div>
      <div class="crypto-change" id="solana-change">24h Change: Loading...</div>
    </div>
  </div>
  <div class="amount-of-zero">{{$solana}}</div>
</div>






  <!-- XRP -->
  <div class="crypto-item" id="ripple">
    <div class="crypto-info">
      <img class="crypto-logo" src="xrp-xrp-logo.png" alt="XRP">
      <div class="crypto-details">
        <div class="crypto-name">XRP</div>
        <div class="crypto-price" id="ripple-price">Price: $1.50</div>
        <div class="crypto-change" id="ripple-change">24h Change: 2.0%</div>
      </div>
    </div>
    <div class="amount-of-zero">{{$XRP}}</div>
  </div>
</div>

<script>
  // Placeholder for the deposit value
  const deposit = 1000; // Replace with actual deposit value as needed



  // Function to fetch Solana data from the API
async function fetchSolanaData() {
const apiUrl = 'https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&ids=solana';

try {
  const response = await fetch(apiUrl);
  const solanaData = await response.json();

  const solanaItem = document.getElementById('solana');
  if (solanaItem) {
    const priceElement = solanaItem.querySelector('#solana-price');
    const changeElement = solanaItem.querySelector('#solana-change');
    if (priceElement && changeElement && solanaData.length > 0) {
      priceElement.textContent = `Price: $${solanaData[0].current_price}`;
      changeElement.textContent = `24h Change: ${solanaData[0].price_change_percentage_24h.toFixed(2)}%`;
      changeElement.classList.toggle('positive', solanaData[0].price_change_percentage_24h >= 0);
      changeElement.classList.toggle('negative', solanaData[0].price_change_percentage_24h < 0);
    }
  }
} catch (error) {
  console.error('Error fetching Solana data:', error);
}
}

// Fetch Solana data initially and then every 10 seconds
fetchSolanaData();
setInterval(fetchSolanaData, 10000);

  // Function to fetch crypto data from an API
  async function fetchCryptoData() {
    const apiUrl = 'https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&ids=bitcoin,ethereum,litecoin,tether,binancecoin,ripple';
    
    try {
      const response = await fetch(apiUrl);
      const data = await response.json();

      // Update the static HTML with fetched data
      data.forEach((crypto) => {
        const cryptoItem = document.getElementById(crypto.id);
        if (cryptoItem) {
          const priceElement = cryptoItem.querySelector(`#${crypto.id}-price`);
          const changeElement = cryptoItem.querySelector(`#${crypto.id}-change`);
          if (priceElement) {
            priceElement.textContent = `Price: $${crypto.current_price}`;
          }
          if (changeElement) {
            changeElement.textContent = `24h Change: ${crypto.price_change_percentage_24h.toFixed(2)}%`;
            changeElement.classList.toggle('positive', crypto.price_change_percentage_24h >= 0);
            changeElement.classList.toggle('negative', crypto.price_change_percentage_24h < 0);
          }
        }
      });
    } catch (error) {
      console.error('Error fetching crypto data:', error);
    }
  }

  // Fetch crypto data initially and then every 10 seconds
  fetchCryptoData();
  setInterval(fetchCryptoData, 10000);
</script>


</div><!-- .col -->
</div><!-- .row -->
</div><!-- .nk-block -->
<!-- .nk-block -->



<div wire:loading>
<div class="d-flex justify-content-center myoverlay">
    <div class="myoverlayMsg">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

</div>

































{{-- <!-- Livewire Component wire-end:L2h9RT0ZmDABKu26TlzZ -->

            <div wire:id="wrHIv94YEZRcyIu5jLOg" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;wrHIv94YEZRcyIu5jLOg&quot;,&quot;name&quot;:&quot;client.home.components.widget.available-balance&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;home&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;c5139d5f&quot;,&quot;data&quot;:{&quot;userAuth&quot;:[],&quot;widgetName&quot;:&quot;Available Balance&quot;,&quot;mainWallet&quot;:[]},&quot;dataMeta&quot;:{&quot;models&quot;:{&quot;userAuth&quot;:{&quot;class&quot;:&quot;App\\Models\\User&quot;,&quot;id&quot;:249387,&quot;relations&quot;:[&quot;roles&quot;,&quot;lang&quot;,&quot;dashboards&quot;],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null},&quot;mainWallet&quot;:{&quot;class&quot;:&quot;App\\Models\\WalletMainUser&quot;,&quot;id&quot;:1385368,&quot;relations&quot;:[&quot;main_wallet&quot;],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}}},&quot;checksum&quot;:&quot;5d7e30d0a7cd5f43d2c458b60d6e8935c2d1621f2934c0b7bcab08cad07d65ed&quot;}}" class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
<div class="widget widget-account-invoice-three widget-activity-four p-0 shadow-sm" style="border-radius: 15px;">
<div class="widget-heading p-4" style="min-height: 150px">
    <div class="wallet-usr-info">
        <div class="usr-name">
            <span style="font-size: 16px; cursor: default">
                <img src="https://my.consummatetraders.com/storage/cryptocurrency/64c44b94b4291_.jpg" alt="admin-profile" class="img-fluid"> 1385368
                <a href="javascript:;" onclick="copyToClipboard('1385368')" class="bs-tooltip" title="Copy">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy text-muted"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                </a>
            </span>
        </div>
        <div class="add">
            <h5 class="">{{$user_balance}}.00<span class="w-currency" style="font-size: 16px; background: transparent; padding: 0">USD</span></h5>
        </div>
    </div>
</div>
<div class="widget-amount" style="margin-top: -60px">
    <div class="w-a-info funds-received">
        <span>Deposits <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg></span>
        <p>{{$deposit}}.00</p>
    </div>
    
    <div class="w-a-info funds-spent">
        <span>Withdrawals <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
        <p>{{$withdrawal}}.00</p>
    </div>

    <div class="w-a-info funds-spent">
        <span>Account Manager <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"></svg></span>
        <p>{{Auth::user()->account_manager}}</p>
    </div>
</div>
<div class="widget-content pb-2 mt-2">
    <ul class="nav nav-pills mb-2 mt-0" id="justify-center-pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="justify-center-pills-home-tab" data-bs-toggle="pill" href="#justify-center-pills-home" role="tab" aria-controls="justify-center-pills-home" aria-selected="true">Last 10 movements</a>
        </li>
                    </ul>
                    
    <div class="tab-content" id="justify-center-pills-tabContent">
        <div class="tab-pane fade show active" id="justify-center-pills-home" role="tabpanel" aria-labelledby="justify-center-pills-home-tab">
            <div class="mt-container-ra" style="height: 2px;">
                <div class="timeline-line">
                                            </div>
            </div>
        </div>
                    </div>
    <div class="invoice-list">
        <hr class="my-1">
        <div class="inv-action mt-2">
            <a href="{{url('deposit')}}" class="btn btn-outline-primary pay-now">Add balance</a>
            <a href="{{url('accounthistory')}}" class="btn btn-outline-primary view-details">View Details</a>
        </div>
    </div>
</div>
</div>
</div>


<!-- Livewire Component wire-end:wrHIv94YEZRcyIu5jLOg -->                    <div wire:id="2QKTvYJUpyzKSHCZjFq8" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;2QKTvYJUpyzKSHCZjFq8&quot;,&quot;name&quot;:&quot;client.home.components.widget.account-balance&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;home&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;52b90be4&quot;,&quot;data&quot;:{&quot;userAuth&quot;:[],&quot;widgetName&quot;:&quot;Balance account&quot;,&quot;colors&quot;:[&quot;#622bd7&quot;,&quot;#e2a03f&quot;,&quot;#e7515a&quot;,&quot;#4361ee&quot;,&quot;#008eff&quot;,&quot;#009688&quot;,&quot;#e95f2b&quot;],&quot;accountBalanceTotal&quot;:0,&quot;accountBalance&quot;:[{&quot;account&quot;:&quot;USD Wallet&quot;,&quot;saldo&quot;:0,&quot;bgcolor&quot;:&quot;#622bd7&quot;},{&quot;account&quot;:&quot;IB account&quot;,&quot;saldo&quot;:0,&quot;bgcolor&quot;:&quot;#e2a03f&quot;}]},&quot;dataMeta&quot;:{&quot;models&quot;:{&quot;userAuth&quot;:{&quot;class&quot;:&quot;App\\Models\\User&quot;,&quot;id&quot;:249387,&quot;relations&quot;:[&quot;roles&quot;,&quot;lang&quot;,&quot;dashboards&quot;,&quot;walletsmainuser&quot;,&quot;walletsmainuser.main_wallet&quot;,&quot;ibsaldos&quot;],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}}},&quot;checksum&quot;:&quot;02e24dee18c5bfcbda439fe46a5cdf7835e42415fd5fd4e3ba75cc4f26b97536&quot;}}" class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
<div class="widget widget-chart-two">
<div class="widget-heading p-4 rounded">
    <h5>Balance account</h5>
</div>
<div class="widget-content pb-0">
    <div id="radial-chart"></div>
    <div class="row px-4">
                            <div class="col-sm-4 mb-2">
                <div class="media m-0">
                    <div class="media-body pb-3">
                        <h6 class="tx-inverse mb-0">
                            <div class="badge--group">
                                <div class="badge badge-dot" style="background-color: #622bd7"></div>
                            </div>
                            {{$user_balance}}.00</h6>
                        <span>USD Wallet</span>
                    </div>
                </div>
            </div>
                           
                    </div>
</div>
</div> --}}

{{-- <script src="https://my.consummatetraders.com/theme/plugins/src/apex/apexcharts.min.js"></script>
<script>
var historybalans = function() {
                    var Theme = 'dark';

        Apex.grid = {
            borderColor: '#ebedf2'
        };
        Apex.track = {
            background: '#e0e6ed',
        };
        Apex.tooltip = {
            theme: 'dark'
        };

        var radialChart = {
            series: [
                                    ],
            chart: {
                fontFamily: 'Nunito, Arial, sans-serif',
                height: 350,
                type: 'radialBar',
            },
            colors: ['#622bd7', '#e2a03f', '#e7515a', '#4361ee', '#008eff', '#009688', '#e95f2b'],
            plotOptions: {
                radialBar: {
                    dataLabels: {
                        showOn: "always",
                        name: {
                            show: false,
                            fontWeight: "700",
                        },
                        value: {
                            color:"#e0e6ed",
                            fontSize: '16px',
                            fontWeight: "700",
                            offsetY: 10,
                            show: true
                        },
                        total: {
                            show: true,
                            label: "Total",
                            fontWeight: "bold",
                            formatter: function (w) {
                                return '0';
                            }
                        }
                    },
                    track: {
                        strokeWidth: '100%'
                    }
                }
            },
            noData: {
                text: 'Without history',
                align: 'center',
                verticalAlign: 'top',
                offsetX: 0,
                offsetY: 0,
                style: {
                    color: '#e0e6ed',
                    fontSize: '18px',
                    fontWeight: 'bold'
                }
            },
            stroke: {
                lineCap: "round",
            },
            labels: ["Progress"]
        };
    
    var radialChart = new ApexCharts(document.querySelector("#radial-chart"), radialChart);
    radialChart.render();
};
historybalans();
</script>

</div>



<!-- Livewire Component wire-end:2QKTvYJUpyzKSHCZjFq8 -->                    <div wire:id="Bns2N7Q1epSq7MULsJUE" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;Bns2N7Q1epSq7MULsJUE&quot;,&quot;name&quot;:&quot;client.home.components.widget.shortcut&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;home&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;2bab9bf3&quot;,&quot;data&quot;:{&quot;userAuth&quot;:[],&quot;widgetName&quot;:&quot;Shortcut&quot;},&quot;dataMeta&quot;:{&quot;models&quot;:{&quot;userAuth&quot;:{&quot;class&quot;:&quot;App\\Models\\User&quot;,&quot;id&quot;:249387,&quot;relations&quot;:[&quot;roles&quot;,&quot;lang&quot;,&quot;dashboards&quot;,&quot;walletsmainuser&quot;,&quot;walletsmainuser.main_wallet&quot;,&quot;ibsaldos&quot;],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}}},&quot;checksum&quot;:&quot;735107d535d975c51bba6d088159d4b13b601ce99b82ef7370b44ff22f96b443&quot;}}" class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
<div class="widget widget-chart-two h-100">
<div class="widget-heading p-4 rounded">
    <h5>Shortcut</h5>
</div>
<div class="widget-content pb-0">
    <div class="row py-3 px-4">
        <div class="col-12" style="margin-bottom: 10px">
            <a href="{{url('deposit')}}">
                <div class="info-box-3 p-1 m-0" style="max-width: 100%; display: flex">
                    <div class="info-box-3-icon my-0 mx-2" style="width: 30px; height: 30px;">
                        <i style="font-size: 16px" class="fal fa-dollar-sign"></i>
                    </div>
                    <div class="info-box-3-content-wrapper p-0">
                        <h3 style="font-size: 16px" class="info-box-3-title m-0">Deposit</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12" style="margin-bottom: 10px">
            <a href="{{url('withdrawal') }}">
                <div class="info-box-3 p-1 m-0" style="max-width: 100%; display: flex">
                    <div class="info-box-3-icon my-0 mx-2" style="width: 30px; height: 30px">
                        <i style="font-size: 16px" class="fa fa-hand-holding-dollar"></i>
                    </div>
                    <div class="info-box-3-content-wrapper p-0">
                        <h3 style="font-size: 16px" class="info-box-3-title m-0">Withdraw</h3>
                    </div>
                </div>
            </a>
        </div>
                        <div class="col-12" style="margin-bottom: 10px">
            <a href="{{url('kyc')}}">
                <div class="info-box-3 p-1 m-0" style="max-width: 100%; display: flex">
                    <div class="info-box-3-icon my-0 mx-2" style="width: 30px; height: 30px">
                        <i style="font-size: 16px" class="fa fa-shield"></i>
                    </div>
                    <div class="info-box-3-content-wrapper p-0">
                        <h3 style="font-size: 16px" class="info-box-3-title m-0">Verification KYC</h3>
                    </div>
                </div>
            </a>
        </div>
                        <div class="col-12" style="margin-bottom: 10px">
            <a href="{{url('accounthistory')}}">
                <div class="info-box-3 p-1 m-0" style="max-width: 100%; display: flex">
                    <div class="info-box-3-icon my-0 mx-2" style="width: 30px; height: 30px">
                        <i style="font-size: 16px" class="fa fa-money-bill-transfer"></i>
                    </div>
                    <div class="info-box-3-content-wrapper p-0">
                        <h3 style="font-size: 16px" class="info-box-3-title m-0">Transaction history</h3>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
</div>
</div>

<!-- Livewire Component wire-end:Bns2N7Q1epSq7MULsJUE -->            </div>


</div>

<!-- Livewire Component wire-end:TEqH514iI7Rm0IiNvrMq -->

            
                            </div>
    </div>
</div>
</div> --}}
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->



















@include('dashboard.footer')