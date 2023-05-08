// create a array of object having 5 elements and perform the followign operations


const fruits = ["Apple", "Banana", "Orange", "Pineapple", "Grapes"];

// a. Delete first and last index element
// deleting first index
console.log("After deleting from front (shirt).......");
fruits.shift();
for (let i = 0; i < fruits.length; i++) {
    console.log(fruits[i]);
}

// deleting from last index
console.log('After pop (deleting from end ).......');
fruits.pop()

for (let i = 0; i < fruits.length; i++) {
    console.log(fruits[i]);
}



// b. add element at first and last index
// add last index
console.log('after inserting guava at front....... ');
fruits.unshift("Guava");
for (let i = 0; i < fruits.length; i++) {
    console.log(fruits[i]);
}
console.log('after inserting pomegranate at last (push)........');
fruits.push("pomegranate")

for (let i = 0; i < fruits.length; i++) {
    console.log(fruits[i]);
}