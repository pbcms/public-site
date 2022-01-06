<div class="section-container horizontal">
    <section class="introduction">
        <h1>
            Ease of coding
        </h1>
        <p>
            Pbcms is designed to lay a flexible groundwork for your amazing project. You don't want to think about setting up user back-ends, permissions, etc. <br>
            You just want to get going, right?
        </p>

<pre><code><span class="blue">&#x3C;?php</span>
    <span class="blue">namespace</span> <span class="mint">Controller</span>;

    <span class="blue">class</span> <span class="mint">Root</span> {
        <span class="blue">public function</span> <span class="yellow">__index</span>() {
            <span class="yellow">echo</span> <span class="brown">&#x27;Hello World! :D&#x27;</span>;
        }
    }
<span class="blue">?&#x3E;</span></code></pre>
    </section>
    
    <div class="landing-image">
        <?php echo file_get_contents(DYNAMIC_DIR . '/static/img/home-introduction.svg'); ?>
    </div>
</div>

<div class="section-container">
    <section>
        <h1 class="no-dot">
            Need for speed?
        </h1>
        <p>
            No need for unnecessary delays.
            Time is money, and we're in a hurry.

            <br>
            The exact goal of pbcms is speed things up for you a bit. 
            We actively work on fast loading times and to limit the time a developer needs to spend on getting something done.
        </p>
    </section>
    <section class="right">
        <h1>
            No dependency mess
        </h1>
        <p>
            We believe in clean code. 
            We believe in our work and skills.

            <br>
            Pbcms has been build from the ground up. 
            With the exception to a JWT library (due to it's complexity) and Feather icons no external libraries have been used.
            By limiting code used in libraries that's not actively being used, we hope to reduce loading times.
        </p>
    </section>
</div>