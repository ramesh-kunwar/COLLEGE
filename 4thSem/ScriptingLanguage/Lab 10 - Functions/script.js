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