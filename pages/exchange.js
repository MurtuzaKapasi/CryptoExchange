function performExchange() {
    // Retrieve selected currencies and amount
    var fromCurrency = document.getElementById("fromCurrency").value;
    var toCurrency = document.getElementById("toCurrency").value;
    var amount = parseFloat(document.getElementById("amount").value);

    // Dummy exchange rate and fee for demonstration purposes
    var exchangeRate = 50000;  // 1 BTC = 50000 USDT
    var transactionFee = 0.01; // 1% transaction fee

    // Calculate exchanged amount and fees
    var exchangedAmount = amount * exchangeRate;
    var feeAmount = exchangedAmount * transactionFee;

    // Display exchange details
    var exchangeDetails = document.querySelector(".exchange-details");
    exchangeDetails.innerHTML = `
        <p>Exchange Rate: 1 ${fromCurrency} = ${exchangeRate} ${toCurrency}</p>
        <p>Transaction Amount: ${amount} ${fromCurrency}</p>
        <p>Exchanged Amount: ${exchangedAmount} ${toCurrency}</p>
        <p>Fees: ${feeAmount} ${toCurrency} (${transactionFee * 100}%)</p>
    `;
}
