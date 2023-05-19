
let address = "kathmandu, Nepal"

console.log('Actual string ' + address);

console.log('Length: ' + address.length);

console.log('String slice: ' + address.slice(3, 9));

console.log('Sub str : ' + address.substr(2, 5));

console.log('Sub string: ' + address.substring(2, 5));

console.log('Replace : ' + address.replace(address, "Lalitpur, Nepal"));

console.log('uppercase: ' + address.toUpperCase());

console.log('lowercase ' + address.toLowerCase());

console.log('Concat : ' + address.concat(" hello"));

console.log('Trim : ' + address.trim());

address = "    hello    "
console.log("Trim start: " + address);
console.log("Trim start: " + address.trimStart());
console.log("Trim End: " + address.trimEnd());

console.log('Starts with: ' + address.startsWith("k"));

console.log('Ends with : ' + address.endsWith(" "));


let places = "Kathmandu, Pokhara, Butwal, Dharan, Lalitpur, Makwanpur"
console.log('\n\n');

console.log('String = ' + places);
let result1 = places.split(',', 3)
console.log('Split result1: ' + result1);

for (let i = 0; i < result1.length; i++) {
    console.log(result1[i]);

}

console.log('\n\n');


/*********************
 * search function
 * *********************/

const randomQuote = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'

console.log(" index of: " + randomQuote.indexOf('L'));

// match() - check substring in string
console.log('Match regex : regex ' + randomQuote.match(/Lorem/));

// search() - returns index
console.log("Search: " + randomQuote.search('sit'));

// includes() - return true or false
console.log("includes " + randomQuote.includes('amet'));

// startsWith() - return true if the string starts with specifice substring
let email = 'contact@dav.edu.np'
console.log('Starts with: ' + email.startsWith('c'));

// endssWith() - return true if the string ends with specifice substring
console.log('Ends with : ' + email.endsWith('dav.edu.np'));


