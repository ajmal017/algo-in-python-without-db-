investing_chart1 = '''<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_27357"></div>
  <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/symbols/NSE-GAIL/" rel="noopener" target="_blank"><span class="blue-text">GAIL chart</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "autosize": true,
  "symbol": "'''
  
  
investing_chart2='''",
    "interval": "D",
    "timezone": "exchange",
    "theme": "Dark",
    "style": "0",
    "locale": "in",
    "toolbar_bg": "#f1f3f6",
    "enable_publishing": false,
    "withdateranges": true,
    "hide_side_toolbar": false,
    "allow_symbol_change": true,
    "show_popup_button": true,
    "popup_width": "1000",
    "popup_height": "650",
    "referral_id": "15373",
    "container_id": "tradingview_27357"
  }
    );
    </script>
  </div>
  <!-- TradingView Widget END -->
'''

import csv


exchange = 'NSE'
with open('nifty.csv','r') as symbolfile:
  reader = csv.reader(symbolfile)

  next(reader)

  for row in reader:
    symbol =row[0]

    with open(f'{exchange}:{symbol}.php','w') as phpchartfile:
      phpchartcode = investing_chart1 + exchange+ ":"+symbol + investing_chart2
      phpchartfile.write(phpchartcode)

    print(phpchartcode)














