// Function in JS

const places = ['Kathmandu', "Lalitpur", "Bhaktapur"]


function checkPlace(place) {
    let status = false;
    for (let i = 0; i < places.length; i++) {
        if (places[i] == place) {
            status = true;
            break;
        }
    }
    return status;
}

console.log(checkPlace("Kathmandu"));

if (checkPlace("Lalitpur")) {
    console.log("is available");
} else {
    console.log('Is not available');
}


// function without parameter and return type
function grandTotal() {
    let sum = 0;
    const prices = [123, 324, 200, 500, 1234, 451];
    for (let i = 0; i < prices.length; i++) {
        sum += prices[i]
    }
    return sum;
}

console.log(" your grand total is : " + grandTotal());

// function without parameter and without return type

showMessage()
function showMessage() {
    let message = "Have a nice day"
    console.log("Today's Message: " + message);
}

// function with parameter and without return type
const users = ['dav', 'dav123'];
function checkUser(username, password) {
    if (username === users[0] && password === users[1]) {
        console.log('login success');
    } else {
        console.log('login fail');
    }
}


checkUser("dav", 'dav123')