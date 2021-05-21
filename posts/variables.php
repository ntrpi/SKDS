<!-- https://preview.colorlib.com/#wordify -->
<section class="site-section py-lg">
    <div class="container">
        <div class="row blog-entries element-animate fadeInUp element-animated">
            <div class="col-md-12 col-lg-8 main-content">
                <div class="title my-5">
                    <h6 class="title-primary">2021-02-14</h6>
                    <h2 class="title-blue">A Bit More About Variables</h2>
                    <p class="float-right text-muted">Get it? A &lsquo;bit&rsquo;? I know, I&rsquo;m hilarious.</p>
                </div>
                <div class="post-content-body">
                    <p>This article came about because I noticed that some students in my class, particulary those without a computer science or previous programming background, were having difficulty with variables. In particular it seemed that they struggled with why sometimes variables had types and other times not, and also with understanding the difference between passing a variable by value and by reference. I wrote this up as an overview for any new developer who wants to know a little more about variables without needing to go too deep.</p>

                    <h3>What is a bit?</h3>
                    <div class="text-center">
                        <img class="image-fluid my-4" src="./posts/images/image3.png" alt="Featured 1">
                    </div>
                    <p>Your computer is made up of billions of microscopic switches that can be turned on and
                        off. Those switches are called bits, or BITs, short for Binary digIT. Binary means 2 of something, just like unary
                        means one of something, ternary means 3, etc.</p>


                    <div class="row">
                        <div class="col-md-6" data-aos="fade-right" data-aos-delay="400" data-aos-duration="800">
                            <h3>Why do we need switches?</h3>
                            <p>Switches represent numbers, depending on whether they are turned on or off. Let&rsquo;s
                                assume that off = 0 and on = 1, and one switch = one bit.</p>
                            <ul class="list-unstyled">
                                <li>One bit &nbsp; can store 1 x 2 = 2 values: 0 or 1</li>
                                <li>Two bits can store 2 x 2 = 4 values: &lsquo;00&rsquo; = 0, &lsquo;01&rsquo; = 1, &lsquo;10&rsquo; = 2, &lsquo;11&rsquo; = 3 </li>
                                <li>Three bits can store 2 x 2 x 2 = 8 values: &lsquo;000&rsquo; = 0, &lsquo;001&rsquo; = 1, &lsquo;010&rsquo; = 2,
                                    &lsquo;011&rsquo; = 3, &lsquo;100&rsquo; = 4, &lsquo;101&rsquo; = 5, &lsquo;110&rsquo; = 6, &lsquo;111&rsquo; =
                                    7</li>
                            </ul>

                        </div>
                        <div class="col-md-6 p-5" data-aos="fade-left" data-aos-delay="400" data-aos-duration="800">
                            <img class="image-fluid" src="./posts/images/image1.png" alt="Featured 1">
                        </div>
                    </div>
                    <p>This way of storing numbers is called the binary (bi == 2) system, or a base 2 number system. The number system we usually use is a base 10 number system. To compare:</p>
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-right" data-aos-delay="400" data-aos-duration="800">
                            <h4>Base 10</h4>
                            <table class="table">
                                <thead class="bg-primary text-light">
                                    <tr>
                                        <th scope="col">Digits</th>
                                        <th scope="col">Values</th>
                                        <th scope="col">Max + 1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>0 - 9</td>
                                        <td> 10 = 10</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>0 - 99</td>
                                        <td> 10 x 10 = 100</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>0 - 999</td>
                                        <td>10 x 10 x 10 = 1000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6" data-aos="fade-left" data-aos-delay="400" data-aos-duration="800">
                            <h4>Base 2</h4>
                            <table class="table">
                                <thead class="bg-primary text-light">
                                    <tr>
                                        <th scope="col">Digits</th>
                                        <th scope="col">Values</th>
                                        <th scope="col">Max + 1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>0 - 1</td>
                                        <td> 2 = 2</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>0 - 3</td>
                                        <td> 2 x 2 = 4</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>0 - 7</td>
                                        <td>2 x 2 x 2 = 8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <p>The point is that you can use these switches or bits to hold numbers. And since computers these days have billions and billions of bits, that means lots and lots of numbers. And those numbers can be used to represent all kinds of data.</p>

                    <h3>What is a byte?</h3>
                    <p>A byte is 8 bits. That’s it, as simple as that. What can we do with 8 bits? Well, we can store values from 0 to 28 - 1, or 255, basically 256 different values. Okay, great. So what?
                        Well, what if a bunch of computer nerds got together and decided on a chart that mapped those values to different letters and digits and characters, so each byte held 1 character. Now, if you put a bunch of bytes together, you can have words. And if you put more bytes together, you could have sentences. And if you put even more bytes together, you could have a book. And now you are storing data. </p>

                    <h3>How do you keep track of the bytes?</h3>
                    <p>Well, a long time ago we used to keep track of each byte by giving it an address, which was basically just a number. Then we started to have a lot more data, so we started grouping 4 bytes together and giving that group and address. This is 32-bit architecture (4 x 1 byte = 4 x 8 bits = 32 bits). These days we have even more data, so we group 8 bytes of data together for one address, and we have 64-bit architecture. For those of you who have Windows machines, you may have noticed two Program Files folders on your C:/ drive: Program Files, and Program Files x86. The x86 folder is for software that was written for the older, 32-bit architecture, and the other is for 64-bit architecture. That’s also why you see “64-bit” at the end of some software installer names.</p>

                    <figure class="m-5">
                        <img class="img-fluid" src="./posts/images/binary-2910663_1920.jpg" alt="">
                        <figcaption style="font-size: .5rem;">Image by <a href="https://pixabay.com/users/geralt-9301/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2910663">Gerd Altmann</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2910663">Pixabay</a>
                        </figcaption>
                    </figure>

                    <h3>Bytes are boring. Why do I care?</h3>
                    <p>Excellent question. The reason you care is because when you are writing code in any language you are ultimately turning bits on and off. Every time you create a variable and change its value, you are directly turning bits on and off. Understanding how this works will help you when you code, and when you inevitably have to debug your code.</p>

                    <h3>S0 what is a variable?</h3>

                    <figure class="m-5">
                        <img class="img-fluid" src="./posts/images/jqsehmlbl1i01.jpg" alt="">
                        <figcaption style="font-size: .5rem;">Image by <a href="https://www.reddit.com/user/WilliamPWise/">WilliamPWise</a> from <a href="https://www.reddit.com/r/ProgrammerHumor/comments/7zsakz/programming_elements_variables/">Reddit</a>
                        </figcaption>
                    </figure>

                    <p>A variable is one or more bytes in memory that you now have access to. When you create
                        a variable, you are telling the computer to give you some bytes to play with. So it looks in its memory for some
                        free bytes, makes note of the address, and says, &ldquo;Here you go!.&rdquo; Computers are very eager to
                        please.</p>
                    <p>Let&rsquo;s break it down a bit more. We&rsquo;ve all created a variable something like
                        this:</p>
                    <pre><code class="code">int i = 0;</code></pre>

                    <p>Here you are asking the computer to give you 1 byte (in this case; we&rsquo;ll talk
                        about types later), turn off all its bits (setting the value to 0), and remember that you are calling this
                        particular byte &ldquo;i&rdquo;. So the computer finds a byte, makes a note of its address, and turns off all the
                        bits. And it remembers that you are calling this particular byte &ldquo;i&rdquo;, so anytime you use
                        &ldquo;i&rdquo; in your program (we&rsquo;ll get to scope later), you are talking about the byte at that
                        particular address.</p>

                    <h3>What about variable types?</h3>
                    <p>All variables have a data type, even in languages that don&rsquo;t make you declare the
                        type, like JavaScript.</p>
                    <p>Data types, or just types, tell the computer how to interpret the bits in your
                        variable. If the type is &ldquo;int&rdquo;, you&rsquo;re telling the computer to treat the bits like a number. If
                        the type is &ldquo;char&rdquo;, treat it like a letter or character or digit. &nbsp;</p>
                    <p>There are basically 2 categories of types: simple or &ldquo;primitive&rdquo;, and
                        complex or &ldquo;non-primitive&rdquo;. Primitive variables are the basic types that can&rsquo;t be broken down
                        into anything smaller. They are usually some version of these:</p>

                    <h4>Primitive Data Types</h4>
                    <table class="table">
                        <thead class="bg-primary text-light">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Size</th>
                                <th scope="col">Value(s)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Boolean/bool</td>
                                <td>1 bit</td>
                                <td>true or false</td>
                            </tr>
                            <tr>
                                <td>Byte/byte</td>
                                <td>8 bits/1 byte</td>
                                <td>Don't worry about this one unless you get into other kinds of dev</td>
                            </tr>
                            <tr>
                                <td>Character/char</td>
                                <td>8 bits/1 byte</td>
                                <td>digits, letters, and some special characters</td>
                            </tr>
                            <tr>
                                <td>Unsigned Short/ushort</td>
                                <td>8 bits/1 byte</td>
                                <td>Whole numbers from 0 to 65,535</td>
                            </tr>
                            <tr>
                                <td>Short/short</td>
                                <td>16 bits/2 bytes</td>
                                <td>Whole numbers from -32,768 to 32,767</td>
                            </tr>
                            <tr>
                                <td>Integer/int</td>
                                <td>32 bits/4 bytes</td>
                                <td>Whole numbers from -2,147,483,648 (-2<sup>31</sup>) to 2,147,483,647 (2<sup>31</sup>-1)</td>
                            </tr>
                            <tr>
                                <td>Float/float</td>
                                <td>32 bits/4 bytes</td>
                                <td>Decimals around &plusmn;1.5 x 10<sup>-45</sup> to &plusmn;3.4 x 10<sup>38</sup>, depending on implementation</td>
                            </tr>
                            <tr>
                                <td>Long/long</td>
                                <td>64 bits/8 bytes</td>
                                <td>-2<sup>63</sup> to 2<sup>63</sup>-1</td>
                            </tr>
                            <tr>
                                <td>Double Long/double</td>
                                <td>64 bits/8 bytes</td>
                                <td>Decimals around &plusmn;5 x 10<sup>-324</sup> to &plusmn;1.7 x 10<sup>308</sup>, depending on implementation</td>
                            </tr>
                        </tbody>
                    </table>


                    <h3>Complex Data Types</h3>
                    <p>Complex or non-primitive data types are just 2 or more primitive data types put together. For
                        example, if you put 5 32-bit numbers together, you have an array of 5 ints. If you put a bunch of chars together,
                        you have a string. If you put things of different types together, like an int and a string, you have an object (or
                        a class, or some equivalent depending on the language). Most languages have a bunch of complex types built in for
                        you, like sets and hashmaps and other stuff, but you don&rsquo;t need to worry about that here.</p>

                    <h3>Why do I care about types?</h3>
                    <p>The thing to note is that all variables get an address, both primitive and
                        non-primitive alike. The difference is that with primitive types, the address points to bytes themselves,
                        basically pointing to the <strong>value</strong>, i.e. which bits are turned
                        on and off. With non-primitive types, the address points to the object, which is just a container of values. In
                        other words, the address is a <strong>reference</strong>&nbsp;to the stuff
                        inside the object.</p>


                    <p>Now we get to the part that a lot of beginner developers have difficulty with: the difference between passing by value and passing by reference. The following animation is an outstanding visualization of the concept:</p>

                    <a href="https://blog.penjee.com/passing-by-value-vs-by-reference-java-graphical/"><img class="m-4" src="./posts/images/pass-by-reference-vs-pass-by-value-animation.gif" alt=""></a>

                    <p>But we're going to explain it with words as well.</p>
                    <p> When you use a variable as an argument in a function, you are passing that variable to the function. In general, unless you tell it specifically to do otherwise, all primitive variables are passed by value. This means that when you put it in the function brackets, you are telling the computer to find the address of that variable, make a note of which bits are turned on and off, and give the pattern of those bits to the function. You are essentially doing a copy and paste of the value of the variable, not giving the function access to the actual bits that the variable is pointing to.</p>

                    <p>Let’s say I have this variable:</p>

                    <pre class="code"><code class="code">int i = 0;</code></pre>

                    <p>And I have a function that takes a parameter, adds 1, and returns the sum:</p>

                    <pre class="code"><code class="code">function addOne( number ) {
    number++;
    return number;
}</code></pre>

                    <p>Now j will equal 1, but i will also equal 1. Even though i was called “number” in the function, it was still referring to the original i. So number++ was actually i++, which made i equal to 1.</p>

                    <p>So that’s reasonably simple. If I want a function to use the value but not change the original, I pass by value. If I want the function to change the original, I pass by reference. Easy peasy. At least for primitive types.</p>

                    <p>Actually, non-primitive types are pretty straightforward too. The thing to remember is that non-primitive types don’t hold values, they hold an address that holds addresses to other things that actually have values. So when you pass a non-primitive by value, you are passing a copy of an actual address that points to actual values. Let’s say I have the following object:</p>

                    <pre class="code"><code class="code">var employee = { “id” = 0, “name” = “Bob” };</code></pre>


                    <p>And I have the following function:</p>

                    <pre class="code"><code class="code">function changeEmployee( emp ) {
    emp.id = 1;
    emp.name = “Sue”;
}</code></pre>

                    <p>If I call this function with my object like this:</p>

                    <pre class="code"><code class="code">changeEmployee( employee);</code></pre>


                    <p>Afterwards, employee.id will equal 1 and employee.name will be “Sue”. So I passed the object by value, which means I copied and pasted the address of employee and gave it to the function. But employee has addresses of actual values, so passing an object by value is the same as passing the stuff inside the object by reference. That’s it. That’s all you have to remember.</p>

                    <p>Yes, you can pass an object by reference as well, but you don’t really need to think about that right now. Just remember the important stuff:</p>
                    <ul>
                        <li>Passing a primitive type by value is like a copy and paste, you are giving the function a copy.</li>
                        <li>Passing a primitive type by reference is like a cut and paste, you are giving the function access to the original.</li>
                        <li>Passing an object by value is the same as passing the stuff inside the object by reference.</li>
                    </ul>

                    <h4>References</h4>
                    <ul class="list-unstyled">
                        <li><a href="https://homepage.cs.uri.edu/faculty/wolfe/book/Readings/Reading02.htm">Data In The Computer</a></li>
                        <li><a href="https://docs.oracle.com/javase/tutorial/java/nutsandbolts/datatypes.html">Java Docs: Primitive Data Types</a></li>
                    </ul>
                </div>
            </div>
            <?php include_once "postSidebar.php" ?>
        </div>
    </div>
</section>
