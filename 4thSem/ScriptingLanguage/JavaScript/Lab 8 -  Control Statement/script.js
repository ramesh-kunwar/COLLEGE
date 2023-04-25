

const status = true;
const userName = 'davuser';

let userStatus = false;


/**
 *  if statement
 */

if (status) {
    console.log("user is active");
}

if (userName == "davuser") {
    console.log('user available');
}


let value = 12;

if (value >= 12 ? true : false) {
    console.log(value);
}

// if else statment

let data = 123;
if (data >= 122) {
    console.log('Is Greater');
} else {
    console.log('Is Smaller');
}


// if else if statement
let code = 'red';

if (code == 'red') {
    console.log('Please Stop');
} else if (code == "yellow") {
    console.log('Please be ready');
} else if (code == 'greent') {
    console.log('Go');
}else{
    console.log('Light is not working');
}


// nested if statement
let userType = 'Admin'
let user = 'dav'

if(user == 'dav'){
    if(userType == 'Admin'){
        console.log("Welcome to admin panel");
    }else if(userType == 'Customer'){
        console.log('Welcome to customer panel');
    }
}else{
    console.log('Invalid user name or password');
}
