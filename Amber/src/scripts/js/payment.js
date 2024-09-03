document.getElementById('paymentForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const cardName = document.getElementById('cardName').value;
    const cardNumber = document.getElementById('cardNumber').value.replace(/\s+/g, '');
    const expDate = document.getElementById('expDate').value;
    const cvv = document.getElementById('cvv').value;

    if (validateCardDetails(cardName, cardNumber, expDate, cvv)) {
        document.getElementById('message').innerText = 'Payment processed successfully!';
    } else {
        document.getElementById('message').innerText = 'Please check your card details and try again.';
    }
});

function validateCardDetails(cardName, cardNumber, expDate, cvv) {
    if (!cardName || !cardNumber || !expDate || !cvv) {
        return false;
    }
    if (!/^\d{16}$/.test(cardNumber)) {
        return false;
    }
    if (!/^\d{2}\/\d{2}$/.test(expDate)) {
        return false;
    }
    if (!/^\d{3}$/.test(cvv)) {
        return false;
    }
    return true;
}

document.getElementById('cardNumber').addEventListener('input', function(event) {
    let value = event.target.value.replace(/\s+/g, '').replace(/[^0-9]/gi, '');
    let output = '';
    for (let i = 0; i < value.length; i++) {
        if (i > 0 && i % 4 === 0) {
            output += ' ';
        }
        output += value[i];
    }
    event.target.value = output;
});

document.getElementById('expDate').addEventListener('input', function(event) {
    let value = event.target.value.replace(/[^0-9]/g, '');
    if (value.length > 2) {
        value = value.slice(0, 2) + '/' + value.slice(2, 4);
    }
    event.target.value = value;
});