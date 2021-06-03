<!-- https://preview.colorlib.com/#wordify -->
<section class="site-section py-lg">
    <div class="container">
    <div class="row">
            <div class="col-md-12 col-lg-8 mb-5">
                <div class="title my-5">
                    <h6 class="title-primary">2021-03-21</h6>
                    <h2 class="title-blue">A Web Development Story</h2>
                    <p class="float-right text-muted">Gather 'round, children, and let me tell you the story of the brave web developer and the fearsome beast known as ASP.NET...</p>
                </div>
                <div class="post-content-body">
                    <p>This is going to be a long story.</p>
                    <h3>First Try</h3>
                    <p>ASP.NET is huge, powerful, and dextrous beast, kind of like a kraken. Like a kraken, most of it is hidden, but you can really see and feel its effects. But ASP.NET is special kraken. Unlike the fearsome creature from the Pirates of the Carribean, this kraken is benevolent. It is kind, and desperately helpful. It not only wants to help build your app, but also to guide it and protect it as it sails the stormy seas of the internet. Like any creature, though, it has a personality. It is extremely intelligent, and believes it knows best. Not having the gift of speech, it struggles with communication at the best of times. And if you rub its scales the wrong way, it can be downright surly, refusing to tell you what you did wrong and determined to not let your app move forward even an inch until you figure out what you did wrong and apologize profusely.</p>
                    <p>My struggles with this project arose largely from my own lack of knowledge. I just haven't done enough studying to thoroughly understand the differences between the different project templates and their options, and the functionalities of the different NuGet packages and frameworks. There is just <em>so</em> <em>much</em> to learn, and with five other classes at the same time, not enough hours in the day. There are many tutorials available, but each one only works if you follow the steps exactly, although it is never revealed exactly why that is. As an analytical learner, this makes .NET difficult for me as the &quot;how&quot; only makes sense to me in the context of the &quot;why&quot;.</p>
                    <p>The first iteration of this project died an early death because I tried to go by memory when I created the project, and didn't follow the instructions precisely. I maybe wrote one class before I realized this kraken was going nowhere.</p>
                    <h3>Second Try</h3>
                    <p>The second iteration started much more optimistically because I knew I had created it correctly. I then enthusiastically coded all 17 of my models, including their dependencies, and then entered the command to add a migration with much satisfaction. Then I watched with horror as it just flat out refused to create the database. Kraken out. File-&gt;New-&gt;Project...you know the drill.</p>
                    <h3>Third Try's the Charm?</h3>
                    <p>I approached the third iteration with much more caution. I selected a single model, Form, that had two properties: an int ID, and a string name. I wrote the class, then trepidatiously entered the command to create the database. It cooperated, and successfully built a database with a single table. I was elated, but still cautious. I proceeded to create the data controller to interface with the database, one CRUD method at a time, testing each one carefully. Gradually taming the kraken, offering little bits of code, then waiting to see if it approved. When I was convinced it was working, I moved on to the web controller and cautiously created each CRUD method and its corresponding view, one at a time, testing again at each step, determined not to rock the boat. After a reasonable effort, it was finished, and it worked. The kraken and I had established a rapport.</p>
                    <p>Now that I had one fully functional model, I could add another one, Piece, slightly more complex and with a Form as a foreign key. Following the same process as the first, I slowly and carefully built up the access to this model step by step, and was again met with success. There was now some trust between the kraken and I.</p>
                    <p>For the third model, I chose something a bit more challenging: images. This one had to be thought through a bit more because although the CRUD is functionally the same, from a user perspective an image in an art gallery only has value in the context of the piece it is of. Showing a list of images isn't really useful. Showing all the images for a given piece is. This also brought to light some other questions about showing the other models. I would need to be able to show details of a piece, but without at least one image the details have little value. Also, I would want to see all the pieces of a certain form, but only one image from each. So with the addition of this model came view models which combined the three main models and collections of models, and the views and controller methods to support them. And they worked! The kraken and I were now fast friends.</p>
                    <h3>All's Well That Ends Well...Right?</h3>
                    <p>At this point, technically, I was done. I had completed the project requirements, which was to have CRUD functionality for up to three tables, which I had. The code was a bit messy, it needed comments and refactoring, but it worked, and the MVP wasn't due for another 4 days. So I could (wisely) spend the remaining time cleaning up my code, or...I could (less wisely) push the kraken.</p>
                    <p>I chose...poorly.</p>
                    <p>Around this time, others in my class were really stuggling to get their MVPs. Many of them did not yet have CRUD for a single table, let alone more advanced features or model relationships. I had already spent many hours helping people with their projects, but there was one more thing I wanted to add to mine that several others were trying to add as well. So instead of code cleanup, I chose to add a new model, this one with a many-to-many relationship with the Piece model. I ended up doing this live on Discord, so that I could share my thought process and answer questions for my classmates that were having trouble with this. I didn't follow any examples for this, I just used the knowledge I had and my instincts as a developer. It took about three hours, but I am proud to say that I did successfully add the new model and have rudimentary CRUD working when I was done. I didn't know this at the time, but I had, by instinct alone, even implemented all the conventions for a many-to-many relationship in the Entity Framework. I was proud of myself. I was tired, and the kraken needed a break, but I had done it.</p>
                    <p>I really should have stopped there. At this point the code <em>really</em> needed comments and refactoring, and I needed to give more thought to the user stories. But I didn't. The kraken was just <em>so</em> <em>strong</em>! I was so excited by the new functionality I just started to code, not really having a single clear goal, just a pie-in-the-sky vision of my app being awesome. This was, not surprisingly, a big mistake. I'm not sure exactly what happened, but somewhere along the way I broke something and angered the kraken. The project wouldn't build, and the error messages were unclear. A scale had been rubbed the wrong way. My beloved kraken turned her back on me, retreated to the darkest depths of my laptop, and wouldn't even move a single tentacle. It was less than 24 hours until the project was due, and I had nothing.</p>
                    <h3>Pivot! PIVOT!!!</h3>
                    <p>I quickly evaluated my options. I could revert to an early version and pretend the adventure to Many-to-Many Island had never happened, and spend the rest of my time trying to clean things up, reminding my kraken of earlier adventures. I could try to unravel my changes and discover exactly which scale I had scraped, hopefully retaining the new functionality, however messy it was. Or I could start fresh, create a new project and try to port my code over, and maybe convince my kraken to give me another chance.</p>
                    <p>Each option had advantages and disadvantages, but starting fresh had the best chance of producing the required functionality, and also having the code in a state that I would be comfortable to submit for review. It also afforded me the opportunity to take an iterative approach, where I could port over one model at a time. I missed my kraken, and I wanted her back. Since the iterative approach had proven to be the most successful approach to coding for this project (and every other project, really), I chose to start fresh. File-&gt;New-&gt;Project...here we go again!</p>
                    <p>It took me about 10 hours of solid coding. I went deep into the zone, ignoring everyone and everything around me, determined to find my beloved kraken and coax her to sail with me again. I found her, and model by model, method by method, view by view, we worked together until I had rebuilt the CRUD functionality of the three main tables, Forms, Pieces, and Images. I refactored and simplified my code. I tested and retested. I didn't add comments, but I had precious few hours, and the code was clean and readable, with everything laid out simply and logically. I submitted it on time, and I was proud of what I had produced, if just barely.</p>
                    <h3>And the Brave Web Developer Lived Happily Ever After</h3>
                    <div class="text-center"><img class="img-fluid m-4" src="./posts/images/kraken.png" alt="A tentacled sea monster reaching out of the ocean and grabbing the crescent moon."></div>
                    <p class="mb-4">This project was a learning experience on so many different levels. Learning ASP.NET, like befriending any large and powerful beast, is a process that takes time and care. It will take much more reading, learning, and coding to make this relationship a strong and fruitful one. Working together with such a powerful creature, it's easy to see all the amazing things that can be accomplished with its strength. It's equally easy to let those possibilities cloud the reality that amazing things are more likely to be accomplished with clear goals and a solid plan in place. And lastly, that wrong turns are part of the process. You can lose sight of your goals for a time, but when you recognize that you have gotten off course, you can bear down and steer into the wind, and if you hold your course steady you will arrive at your destination, with a happy and loyal kraken at your side.</p>
                </div>
            </div>
            <?php include_once "postSidebar.php" ?>
        </div>
    </div>
</section>