<!-- https://preview.colorlib.com/#wordify -->
<section class="site-section py-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 mb-5">
                <div class="title my-5">
                    <h6 class="title-primary">2020-10-19</h6>
                    <h2 class="title-blue">Arrays Vs. JavaScript Arrays</h2>
                    <p class="float-right text-muted">An array is an array is an array...except when it's not.</p>
                </div>
                <div class="post-content-body">
                    <h3>What Is an Array?</h3>
                    <p>In general, an array is an ordered series of things that are the same. In computer programming, an array is a fixed-size data structure that holds a set of elements of the same type. An element in an array can be referenced by its position or index, a number between 0 and the length of the array - 1, where the first element is at position 0. Here we see an array of length 5, with indices 0 to 4:</p>
                    <div class="text-center"><img class="img-fluid w-75 m-4" src="./posts/images/arrays/basicArray.png" alt="Five empty squares in a row numbered 0 to 1." /></div>

                    <h4>Is a JavaScript Array Different?</h4>
                    <p>Like regular computer programming arrays, JavaScript arrays are variables used to store multiple values. Also like other languages, values in JavaScript arrays are accessed by their position or index, again, a number between 0 and the length of the array - 1, where 0 is the index of the first element. </p>
                    <div class="text-center"><img class="img-fluid m-4" src="./posts/images/arrays/tipBox1.png" alt="Image with the following text: It is important to remember that the first element of an array has an index of 0 and the last is at length minus 1! Many programmers have lost hours of their lives dealing with off-by-one errors, and you don't want it to happen to you." /></div>
                    <p>However, JavaScript arrays differ from standard computer programming arrays in several ways. To begin with, they are not a data structure in and of themselves, they are actually objects that adhere to some of the properties that define arrays in other languages.</p>

                    <p>And, unlike other languages, these values can be of the same <strong>or different</strong> types. Whereas in regular arrays, all the elements would be <code class="code-il">int</code>s or <code class="code-il">string</code>s or some other single data type, JavaScript arrays can have <code class="code-il">int</code>s and <code class="code-il">string</code>s and other types together in the same array.</p>
                    <div class="text-center"><img class="img-fluid w-75 m-4" src="./posts/images/arrays/compareArrays.png" alt="A regular array with values of the same type, and a JavaScript array with values of different types." /></div>

                    <h3>What Are Arrays For?</h3>
                    <p>Arrays are most useful when you have more than one of the same thing and you want to keep them together. Even though in JavaScript they don't technically have to be of the same type, mixing types in an array can get confusing because it's up to you to always remember which type of thing is at which index. It's much easier if they are all the same type because they can then be treated the same way. If you want to mix types, you can always use an object.</p>

                    <h4>Using Arrays</h4>
                    <p>Suppose you are creating a website where you want someone to choose their favourite fruit from a list. You could create this list as individual variables like this:</p>

                    <pre class="code"><code>var fruit1 = "apple";
var fruit2 = "pear";
var fruit3 = "kiwi";
var fruit4 = "cherry";
var fruit5 = "orange";
</code></pre>


                    <p>Every time you wanted to access this list, you would have to reference each variable individually. Say you wanted to output them to the console. You would have to do something like this:</p>

                    <pre class="code"><code>console.log( fruit1 );
console.log( fruit2 );
console.log( fruit3 );
console.log( fruit4 );
console.log( fruit5 );
</code></pre>
                    <p>You would also have to remember how many fruits you have to make sure you listed them all and didn't get any "undefined" errors.</p>

                    <p>This is a perfect time to use an array. Doing so allows you to keep all the fruits in one variable. You can declare the array like this:</p>

                    <pre class="code"><code>var fruits = { "apple", "pear", "kiwi", "cherry", "orange" };</code></pre>

                    <p>We use square brackets ("<strong>[]</strong>") to access the elements. This command:</p>

                    <pre class="code"><code>console.log( "The first fruit is: " + fruits[0] );</code></pre>

                    <p>Will give us this output:</p>

                    <div class="text-center"><img class="img-fluid w-75 m-4" src="./posts/images/arrays/consoleOutput1.png" alt="The first fruit is: apple" /></div>

                    <p>We can change the elements using the same syntax:</p>

                    <pre class="code"><code>fruits[0] = "banana";</code></pre>

                    <p>The same log command now gives us this:</p>

                    <div class="text-center"><img class="img-fluid w-75 m-4" src="./posts/images/arrays/consoleOutput2.png" alt="The first fruit is: banana" /></div>

                    <p>Now the log commands we wrote above for each variables can be written like this:</p>
                    
                    <pre class="code"><code>console.log( fruits[0] );
console.log( fruits[1] );
console.log( fruits[2] );
console.log( fruits[3] );
console.log( fruits[4] );
</code></pre>

                    <p>Okay, so that isn't actually easier than the way we did it with the variables. But it is written out like this to point out two things: what was <code class="code-il">fruit1</code> is now <code class="code-il">fruits[0]</code>, and what was <code class="code-il">fruit5</code> is now <code class="code-il">fruits[5 - 1]</code>, or <code class="code-il">fruits[4]</code>. Remember, the first element in our array, fruit number 1, is at index 0, and our last, fruit number 5, is at index 4.</p>

                    <h4>Arrays and Loops</h4>
                    <p>Here we come to the real value of arrays. Now, instead of writing a log command for each fruit you can use a for-loop like this:</p>

                    <pre class="code"><code>var i;
for( i = 0; i < fruits.length; i++ ) {
    console.log( fruits[i] );
}
</code></pre>

                    <div class="text-center"><img class="img-fluid m-4" src="./posts/images/arrays/tipBox2.png" alt="Tip: Every array in JavaScript is automatically given the length property, accessible through the dot operator. Very handy!" /></div>
                    <p>There are a couple of things to note here. We are using the variable <code class="code-il">i</code> to iterate through the array. We first initialize <code class="code-il">i</code> to <strong>0</strong>, not <strong>1</strong>. If <code class="code-il">i</code> started at 1, we would miss the first element, which is at index <strong>0</strong>. Also note that we keep going as long as <code class="code-il">i</code> is less than <code class="code-il">fruits.length</code>. That's because the last item in the array is at <code class="code-il">fruits.length - 1</code>. If we go to <code class="code-il">i <= fruits.length</code>, we will be trying to access something that doesn't exist, which will give us an error.</p>
                    
                    <h3>Using JavaScript Arrays</h3>
                    <p>So far, the characteristics of JavaScript arrays that we have covered are the same as arrays in other languages. But there are some important ways in which they are different.</p>
                    
                    <h4>Size</h4>
                    <p>In most languages, especially typed languages, the length of an array must be known when the array is declared, and once the array is created, its length never changes. This is because when those arrays are created, the memory that they will use is allocated in one contiguousblock. These arrays are "fixed-size" arrays.</p>

                    <p>JavaScript doesn't use memory that way and is much more flexible. You can easily increase the length of an array by inserting an element at an index past length - 1. For example, we can start with an array of three items:</p>

                    <pre class="code"><code>var numbers = { 4, 2034, 89 };</code></pre>

                    <p>If we run this console command: </p>

                    <pre class="code"><code>console.log( "The length of numbers is: " + numbers.length.toString() );</code></pre>

                    <p>we will see that the output is</p>

                    <div class="text-center"><img class="img-fluid w-75 m-4" src="./posts/images/arrays/consoleOutput3.png" alt="The length of numbers is: 3" /></div>

                    <p>Suppose we add another number to the array, but at an index greater than 2:</p>

                    <pre class="code"><code>numbers[5] = 4234;</code></pre>

                    <p>If we run the log command again we see that the output is now:</p>

                    <div class="text-center"><img class="img-fluid w-75 m-4" src="./posts/images/arrays/consoleOutput4.png" alt="The length of numbers is: 6" /></div>
                    <p>Note that doing this can create "holes" in your array. In the case above, the first 3 elements of the array and the element at index 5 (the sixth element) are defined, but the elements at indexes 3 and 4 (elements 4 and 5) are not defined, and attempting to access them will produce an error.</p>
                    
                    <h4>Methods</h4>
                    <p>Arrays in JavaScript come with some methods built in.</p>
                    
                    <h5>Modifying Arrays</h5>
                    <p>JavaScript arrays have inherent methods that allow you to modify them in ways that you can't in other languages:</p>

                    <h6 class="code-il">pop()</h6>
                    <p>This method removes the last element of the array, reducing its length by 1:</p>

                    <pre class="code"><code>var colours = [ "red", "blue", "yellow" ];
colours.pop();
for( var i = 0; i < colours.length; i++ ) {
    console.log( "The colour at index " + i.toString() + " is " + colours[i] );
}
</code></pre>

                    <p>Our console shows this output:</p>

                    <div class="text-center"><img class="img-fluid w-75 m-4" src="./posts/images/arrays/consoleOutput5.png" alt="The colour at index 0 is red; The colour at index 1 is blue" /></div>

                    <h6 class="code-il">push( element )</h6>
                    <p>This method does the opposite of <code class="code-il">pop()</code>, it adds an element onto the end of an array increasing its length by 1:</p>

                    <pre class="code"><code>var colours = [ "red", "blue", "yellow" ];
colours.push( "purple" );
for( var i = 0; i < colours.length; i++ ) {
    console.log( "The colour at index " + i.toString() + " is " + colours[i] );
}
</code></pre>
                    <p>Our console output is:</p>

                    <div class="text-center"><img class="img-fluid w-75 m-4" src="./posts/images/arrays/consoleOutput6.png" alt="The colour at index 0 is red; The colour at index 1 is blue; The colour at index 2 is yellow; The colour at index 3 is purple" /></div>
                    
                    <h6 class="code-il">shift()</h6>
                    <p>This method is similar to <code class="code-il">pop()</code>, but instead of removing the last element of the array, it removes the first:</p>

                    <pre class="code"><code>var colours = [ "red", "blue", "yellow" ];
colours.shift();
for( var i = 0; i < colours.length; i++ ) {
    console.log( "The colour at index " + i.toString() + " is " + colours[i] );
}
</code></pre>

                    <p>Here our console output shows the first element removed:</p>

                    <div class="text-center"><img class="img-fluid w-75 m-4" src="./posts/images/arrays/consoleOutput7.png" alt="The colour at index 0 is blue; The colour at index 1 is yellow" /></div>

                    <h6 class="code-il">unshift( element )</h6>
                    <p>This method is similar to <code class="code-il">push()</code>, but like <code class="code-il">shift()</code>, it operates on the front of the array, adding an element at index 0 and shifting the others down:</p>

                    <pre class="code"><code>var colours = [ "red", "blue", "yellow" ];
colours.unshift( "orange" );
for( var i = 0; i < colours.length; i++ ) {
    console.log( "The colour at index " + i.toString() + " is " + colours[i] );
}</code></pre>
                    <p>Our console shows the new element at index 0:</p>

                    <div class="text-center"><img class="img-fluid w-75 m-4" src="./posts/images/arrays/consoleOutput8.png" alt="The colour at index 0 is orange; The colour at index 1 is red; The colour at index 2 is blue; The colour at index 3 is yellow" /></div>

                    <h6 class="code-il">splice( index, numElements <, elements to add> )</h6>
                    <p>This method is more complex than the others in this section. It can operate anywhere in the array ᠆᠆ it is not restricted to the beginning or the end. Also, it can work with more than one element at a time. As well, it can both add and remove elements with a single call. The first parameter,  <code class="code-il">index</code>, indicates where the new elements will be added. The second,  <code class="code-il">numElements</code>, tells the function how many elements to remove. The  <code class="code-il">
                            <elements to add>
                        </code> are zero or more elements that will be added at the given index, pushing any remaining elements further down the array.</p>

                        <pre class="code"><code>var colours = [ "red", "blue", "yellow" ];
colours.splice( 1, 1, "taupe", "violet" );
for( var i = 0; i < colours.length; i++ ) {
 console.log( "The colour at index " + i.toString() + " is " + colours[i] );
}</code></pre>

                    <p>Using <code class="code-il">splice</code> with these arguments, we get the following output:</p>

                    <div class="text-center"><img class="img-fluid w-75 m-4" src="./posts/images/arrays/consoleOutput9.png" alt="The colour at index 0 is red; The colour at index 1 is taupe; The colour at index 2 is violet; The colour at index 3 is yellow" /></div>
                    <p>We can see that the element at index 1, initially set to  <code class="code-il">blue</code>, was removed. The last two arguments,  <code class="code-il">taupe</code> and <code class="code-il">violet</code>, have been inserted in its place, pushing  <code class="code-il">yellow</code> down from index 2 to index 3.</p>

                    <p>But what happened to  <code class="code-il">blue</code>? We can actually recover the removed elements by putting them in a variable. Here we will remove 2 elements which will become a new array:</p>

                    <pre class="code"><code>var colours = [ "green", "blue", "yellow", "black" ];
var removedColours = colours.splice( 1, 2, "crimson" );
for( var i = 0; i < removedColours.length; i++ ) {
    console.log( "The colour at index " + i.toString() + " is " + removedColours[i] );
}
</code></pre>

                    <p>We can see the contents of the new array here:</p>
                    <div class="text-center"><img class="img-fluid w-75 m-4" src="./posts/images/arrays/consoleOutput10.png" alt="The colour at index 0 is blue; The colour at index 1 is yellow" /></div>
                    <h4>Array Operations</h4>
                    <h5>Methods</h5>
                    <p>JavaScript has other methods that operate on arrays but do not modify them.</p>
                    <h6 class="code-il">toString()</h6>
                    <p>This method works on arrays much like it does on other variables in JavaScript, by outputting a string representation of the array. This code:</p>

                    <pre class="code"><code>var flowers = [ "rose", "daisy", "peony" ];
console.log( flowers.toString() );</code></pre>

                    <p>Produces this output:</p>

                    <div class="text-center"><img class="img-fluid w-75 m-4" src="./posts/images/arrays/consoleOutput11.png" alt="rose,daisy,peony" /></div>

                    <h6 class="code-il">join( separator )</h6>
                    <p>This method does exactly what <code class="code-il">toString()</code> does, except that it allows you to put whichever separator you choose in place of the comma:</p>

                    <pre class="code"><code>var flowers = [ "rose", "daisy", "peony" ];
console.log( flowers.join( "+-+" ) );</code></pre>

                    <p>This is the output:</p>

                    <div class="text-center"><img class="img-fluid w-75 m-4" src="./posts/images/arrays/consoleOutput12.png" alt="rose+-+daisy+-+peony" /></div>

                    <h6 class="code-il">slice( startIndex <, endIndex> )</h6>
                    <p>This method creates a new array by copying sections of another array. If it is called with only one argument, <code class="code-il">startIndex</code>, it will copy the element at <code class="code-il">startIndex</code> and all the elements that follow:</p>

                    <pre class="code"><code>var cities = [ "Kitchener", "Guelph", "Ajax", "Barrie" ];
var city = cities.slice( 2 );
console.log( city.toString() );</code></pre>

                    <p>We can see that city contains:</p>

                    <div class="text-center"><img class="img-fluid w-75 m-4" src="./posts/images/arrays/consoleOutput13.png" alt="Ajax,Barrie" /></div>
                    <p>If it is called with both arguments, it will copy the elements starting at <code class="code-il">startIndex</code> until the element <strong>before</strong> <code class="code-il">endIndex</code>:</p>

                    <pre class="code"><code>var cities = [ "Kitchener", "Haliburton", "Oakville", "Barrie" ];
var city = cities.slice( 2, 4 );
console.log( city.toString() );</code></pre>

                    <p>In this case, city holds:</p>

                    <div class="text-center"><img class="img-fluid w-75 m-4" src="./posts/images/arrays/consoleOutput14.png" alt="Oakville,Barrie" /></div>
                    <h6 class="code-il">concat( <any number of arguments> )</h6>
                    <p>This method takes any number of arguments, in any combination. You can pass no arguments, another array, a primitive, or a combination:</p>

                    <pre class="code"><code>var names = [ "Joe", "Bob" ];
var newNames = names.concat();
console.log( "newNames: " + newNames.toString() );

var moreNames = [ "Jim", "Rob" ];
var newNames = names.concat( moreNames );
console.log( "names + moreNames: " + newNames.toString() );

var newNames = names.concat( "Phil" );
console.log( "names + Phil: " + newNames.toString() );

var evenMoreNames = [ "Sally", "Jenny" ];
var newNames = names.concat( evenMoreNames, "Minny" );
console.log( "names + evenMoreNames + Minny: " + newNames.toString() );</code></pre>

                    <p>We can see how <code class="code-il">concat()</code> changes names in each case:</p>

                    <div class="text-center"><img class="img-fluid w-75 m-4" src="./posts/images/arrays/consoleOutput15.png" alt="newNames: Joe,Bob; names + moreNames: Joe,Bob,Jim,Rob; names + Phil: Joe,Bob,Phil; names + evenMoreNames + Minny: Joe,Bob,Sally,Jenny,Minny" /></div>

                    <h5>Operators</h5>
                    <p>Elements of an array can be "erased" using the JavaScript operator  <code class="code-il">delete</code>. This operator can be used to set an element to “undefined”:</p>

                    <pre class="code"><code>var numbers = [ 3, 87, 2902, 0, 1 ];
delete( numbers[2] );
console.log( numbers.toString() );
</code></pre>
                    <p>Now the third element of  <code class="code-il">numbers </code>is undefined:</p>

                    <div class="text-center"><img class="img-fluid w-75 m-4" src="./posts/images/arrays/consoleOutput16.png" alt="3,87,,0,1" /></div>

                    <h3>Summary</h3>
                    <p>Arrays in computer programming are powerful data structures that allow you to process many elements at a time, all in the same way. JavaScript arrays have this same power, and because of their flexibility can sometimes have even more. </p>

                    <h3>References</h3>
                    <ul class="list-unstyled mb-4">
                        <li>https://www.google.com/search?q=array+definition&rlz=1C1CHBF_enCA917CA917&oq=array+defi&aqs=chrome.0.0l2j69i57j0l4j69i60.2218j1j9&sourceid=chrome&ie=UTF-8</li>
                        <li>https://www.tutorialspoint.com/computer_programming/computer_programming_arrays.htm</li>
                        <li>http://www.cs.fsu.edu/~cop3014p/lectures/ch9/index.html</li>
                        <li>https://www.w3schools.com/js/js_arrays.asp</li>
                        <li>http://www.cs.iit.edu/~cs561/cs115/looping/off-by-one.html</li>
                    </ul>
                </div>
            </div>
            <?php include_once "postSidebar.php" ?>
        </div>
    </div>
</section>