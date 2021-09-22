const sendButton = document.getElementById('submit');

function validate() {
    const x = document.forms['form']['x'].value;
    const y = document.forms['form']['y'].value.replace(/,/, '.');
    const r = document.forms['form']['r'].value.replace(/,/, '.');
    // console.log('form values: ' + x + y + r);

    if (isEmpty(x)) {
        let xTable = document.getElementsByClassName('item-x');
        for (let i = 0; i < xTable.length; ++i) {
            xTable.item(i).style.background = 'red';
        }
        alert("Select x!");
    } else if (isEmpty(y)) {
        document.getElementsByClassName('y')[0].style.background = 'red';
        alert("Enter y!");
    } else if (isEmpty(r)) {
        document.getElementsByClassName('r')[0].style.background = 'red';
        alert("Enter r!");
    } else {
        if (isNaN(y) || y >= 5 || y <= -5) {
            document.getElementsByClassName('y')[0].style.background = 'red';
            alert("y must be number in range [-5;5]");
        } else if (isNaN(r) || r >= 5 || r <= 2) {
            document.getElementsByClassName('r')[0].style.background = 'red';
            alert("r must be number in range [2;5]")
        } else if (isNaN(x) || x <= -5 || x >= 3) {
            for (let i = 0; i <= xTable.length; ++i) {
                xTable.item(i).style.background = 'red';
            }
            alert("X must be number in range [-5;3]");
        }
    }
}

function isEmpty(obj) {
    for (let key in obj) {
        return false;
    }
    return true;
}

sendButton.onclick = validate;