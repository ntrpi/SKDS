<section class="site-section py-lg">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title my-5">
          <h6 class="title-primary">2021-06-03</h6>
          <h2 class="title-blue">Portfolio Design: a Case Study</h2>
          <p class="float-right text-muted"></p>
        </div>
        <div class="post-content-body">
          <h3>Context</h3>
          <p>In the Humber Web Development program we have been given lots of instruction on how to determine the requirements for a project, and also how to create a plan to build something that will fulfill those requirements. We are also assigned projects with clear objectives and then guided on how to achieve them. But in the third semester, we are asked to prepare a portfolio that we can show to prospective employers to demonstrate our skills and general employable awesomeness. Despite everything we've learned about how to concieve, plan, and build a website, this is more difficult than it seems.</p>
          <p>It's not unlike writing a resume, in that we need to present ourselves in the best possible light, setting it up in a way that makes us attractive and appealing to employers. But unlike a resume, a portfolio website can literally look like and contain anything you want. It's not limited to one or two pages, and black text on a white background. The possibilities are endless, really. And while the objectives are reasonably clear (make yourself look irresistable to an employer), the requirements are extremely vague. And without clear requirements, it can be very difficult to create and execute a plan. So how does one build a portfolio site for themselves? Well, I managed it, and I'm pretty happy with the results. This case study is a reflection on how I accomplished that.</p>

          <h3>Objectives</h3>
          <div class="container">
            <div class="row">
              <div class="col-md-6 pl-0" data-aos="fade-right" data-aos-delay="400" data-aos-duration="800">
                <p>First and foremost, I wanted this portfolio to stand out. I am a fairly bold individual, and I wanted my portfolio to show that. I have successfully completed projects that make use of more tradional layouts and design features, so I felt that this was an opportunity to step off the main road and do something different.</p>
                <p>At the same time, I didn't want to go too far. My attempts at portfolio design in the first semester were decidely flashy, and ended up being overbearing. As well, implementation was a nightmare. I didn't want to do that again. I wanted a design that had some flair but wasn't over the top.</p>
                <p>A portfolio is an opportunity to showcase your best work, and by "best" I mean "most proud of". I actually didn't have any content for my portfolio in first semester because I hadn't yet completed anything other than small labs and assignments. In semester three, I had a few things to choose from. So for my content, I decided to showcase not just the projects that were the most impressive, but the ones I enjoyed working on, and the ones that had presented a particular challenge that I was proud of having overcome.</p>
              </div>
              <div class="col-md-6" data-aos="fade-left" data-aos-delay="400" data-aos-duration="800">
                <figure class="featured-img">
                  <img class="img-fluid w-75" src="./posts/images/caseStudy/mobile.png" alt="Portfolio design for first semester." >
                  <figcaption class="m-2">First Term Portfolio Design</figcaption>
                </figure>
              </div>
            </div>
          </div>

          <h3>Process</h3>
          <h4>Visual Design</h4>
          <p>The first thing I wanted to address was the visual design. I decided that once I had that, I would be better able to determine how to lay out my content. I am, at this point, not a particularly experienced front-end developer. I have a solid handle on HTML, CSS, and JavaScript, but I do not have the experience with front-end frameworks like React or Vue that would let me implement the kind of design I was looking for in the time I had available. I had used a template for one of my earlier project and was happy with the experience. This time, though, I made sure the template was built with Bootstrap. This would ensure that it was already responsive and because I am familiar with Bootstrap, it would be easy to customize.</p>
          <figure class="m-4"  data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
            <img class="img-fluid" src="./posts/images/caseStudy/multipurpose1.png" alt="Screenshot of the banner of the template.">
            <figcaption class="m-2">Multipurpose: Template from FreeHTML5.io</figcaption>
          </figure>
          <p>I chose a template from <a href="https://freehtml5.co/">FreeHTML5.co</a>. I selected it based on its layout and components, as well as the animations. To customize it, I changed several of the colours and disabled the carousels, as well as a few other animations. It turned out that some of the layouts were dependent on the images having a particular aspect ration, which was disappointing, but I was able to work around it.</p>

          <h4>Content</h4>
          <p>Deciding on content was a little tricky. We were advised by the instructor of the portfolio class to select between two and four projects to showcase. The two projects that I liked the best were both ASP.NET projects, and I didn't want to come across as a one trick pony. Also, they would have to be hosted on external sites because the hosting package I selected did not support .NET, and were not quite complete enough to make public. I had a PHP project that was pretty good, but it had deployment issues and couldn't access the database, so it wasn't in a great state either. I also had a few smaller projects from the first semester that were okay. They were complete, but they were both single-page, client side-only projects, so didn't demonstrate my back end skills. I ultimately decided to fix up and deploy the two .NET projects, and would do the same for the PHP project only if I had time.</p>
          <p>I asked for advise about content from technical friend of mine, and she recommended that I include any posts I had written. I didn't have any posts per se, but I had written a tutorial on arrays in JavaScript in first semester, and a couple of other things that I thought might work, so I decided to include those. The would have to be reformatted to display in HTML, and I would have to create a blog layout, something that wasn't included in the template I had selected, but I believed this would be worthwhile.</p>
          <p>The original idea I had for the layout of my content was to alternate a project highlight with some other kind of content, but it didn't feel right. In the end, I went with a more newspaper article hierarchy order, putting the most important things at the top, and the less significant towards the bottom. This ended up corresponding nicely with my main navigation.</p>

          <h4>Implementation</h4>
          <p>To display the two main projects I used modified versions of the "Featured" and "Trust" sections. I ran into problems here with my images not being of the same dimensions as the ones in the template, but I managed to get it to work. I also spent a fair bit of time on the projects themselves, getting them to a place where I could link to them and have them be functional. The hospital website mostly just needed to have its navigation implemented. The art gallery didn't really need anything, but I didn't have enough time to seed the database, so it's just an empty gallery right now.</p>
          <div class="m-4" data-aos="fade-right" data-aos-delay="400" data-aos-duration="800">
            <img class="img-fluid" src="./posts/images/caseStudy/home2.png" alt="Screenshot of the hospital projeect section.">
          </div>
          <div class="m-4" data-aos="fade-left" data-aos-delay="400" data-aos-duration="800">
            <img class="img-fluid" src="./posts/images/caseStudy/home3.png" alt="Screenshot of the art gallery section.">
          </div>

          <p>After the main projects I added a section titled "Featured Posts", and I used the section of the template intended to display recent posts. Here is where I decided to use PHP for my portfolio. I technically could have done it as a static page without a back end, but I really don't like repeating code, and since at the time I didn't know React or a similar front end framework, PHP was my best option. I intended for the posts to be live on a separate page, a blog page with a sidebar with links to other posts. I wanted to be able to dynamically generate a list of posts and display that list in different contexts. So I created a database to help keep track of the posts and associated images, and also to help render the posts themselves.</p>

          <div class="m-4" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
            <img class="img-fluid" src="./posts/images/caseStudy/home4.png" alt="Screenshot of the featured posts section.">
          </div>

          <p>This database ended up being useful for projects as well. I ended up putting links to two of my other projects in a list in the footer, and that list is generated from the database as well.
          </p>

          <div class="m-4" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
            <img class="img-fluid" src="./posts/images/caseStudy/home5.png" alt="Screenshot of the footer.">
          </div>

          <h3>Result</h3>
          <p>Overall I am happy with how my portfolio turned out, at least considering the time I had. It is a work in progress, as it should be, and it will continue to grow and improve as I continue to grow and improve as a web developer.</p>

          <div class="m-4" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
            <img class="img-fluid mb-5" src="./posts/images/caseStudy/home1.png" alt="Screenshot of the banner of my portfolio after customizations.">
          </div>

        </div>
      </div>
      <?php include_once "postSidebar.php" ?>
    </div>
  </div>
</section>
