import MetaTrader5 as mt5

if not mt5.initialize():
    print("initialize() failed, error code =", mt5.last_error())
    quit()


import MetaTrader5 as mt5

# Connect to MetaTrader 5 terminal
if not mt5.initialize():
    print("initialize() failed, error code =", mt5.last_error())
    quit()

# Prepare a trade request
symbol = "EURUSD"
lot = 0.1
price = mt5.symbol_info_tick(symbol).bid
request = {
    "action": mt5.TRADE_ACTION_DEAL,
    "symbol": symbol,
    "volume": lot,
    "type": mt5.ORDER_TYPE_BUY,
    "price": price,
    "deviation": 10,
    "magic": 234000,
    "comment": "Python script open buy",
    "type_time": mt5.ORDER_TIME_GTC,
    "type_filling": mt5.ORDER_FILLING_RETURN,
}

# Execute the trade
result = mt5.order_send(request)
if result.retcode != mt5.TRADE_RETCODE_DONE:
    print("Order send failed, retcode={}".format(result.retcode))

# Disconnect from MetaTrader 5 terminal
mt5.shutdown()
