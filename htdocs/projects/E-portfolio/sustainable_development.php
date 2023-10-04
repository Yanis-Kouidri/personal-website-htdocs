<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Yanis KOUIDRI - E-portfolio</title>
</head>

<body>

    <header>
        <?php include 'include/nav.php'; ?>
    </header>

    <?php include 'include/banniere_image.php'; ?>

    <div id="welcome">
            <h1> Sustainable development </h1> 
            <span class="sous_titre"> Agir pour le développement durable </span> 
    </div>

    <div class="section">        
        <h2> The Sulitest Quiz </h2>
        <p class="block">
            As a future engineer, it is my duty to be well informed about sustainable development issues in order to act accordingly throughout my career.<br>
            To begin with, I took the Sulitest, a comprehensive test that evaluates our knowledge in terms of sustainable development. 
            The goal of this test is not to have the best possible score but to evaluate our own knowledge and therefore to have a critical analysis of ourselves. 
            This test also allows us to learn. Indeed, after each question, the answer appears with an explanatory paragraph as well as links if you wish to go further.<br>
            Here are my results :
            <img src="./medias/images/Sulitest/sulitest1.png" alt="Part 1 of my sulitest's result" class="illustration">
            <img src="./medias/images/Sulitest/sulitest2.png" alt="Part 2 of my sulitest's result" class="illustration">
        </p>
        <p class="block">
            One can immediately see that my results (in green) are not evenly distributed on the diagram. 
            Indeed, my knowledge in "Global and local human-constructed systems" is well below the world average while my knowledge in "Role to play, individuale & systemic change" is well above. 
            This graph therefore gives me areas of improvement for my skills in sustainable development.
        </p>

        <p class="block">
            We can also see that my fellow engineering students have, like me, a lower than average score on the theme "Global and local human-constructed systems" 
            but a higher than average score on "Role to play, individual & systemic change". 
            This makes it possible to detect a trend and could potentially help to orient the courses of the schools on this or that axis.
    
        </p>
        
    </div>

    <div class="section">
        <h2> My actions as an IT engineer</h2>
        <p class="block">
            How can I take action for sustainability?
        </p>

        <p class="block">
            Now that I have an overview of what I know, I can start thinking about how I can take action for sustainability in my company. Here is one of my ideas: 
        </p>
        <p class="block">
            Without going into detail, my job is to do container orchestration. Containers are virtual boxes that contain an application. 
            They have the advantage of being replicable as much as you want, especially to absorb the increase in load. 
            Moreover, a container can be easily executed and stopped, independently of the hardware. Containers are therefore very scalable. 
            We can see it as real containers that can be put on any container holder.
        </p>
        <p class="block">
            <em>What does this have to do with sustainable development? I'll come to that.</em>
        </p>
        <p class="block">
            Traditionally, to set up an application (a website for example), we buy a large quantity of servers that we place in large air-conditioned hangars and that we run 24/7. 
            All this consumes a lot of electricity, not to mention the environmental cost of producing computer equipment. 
            As you probably know, a website is not consulted in a uniform way depending on the time and the period. 
            There are, at certain times, load peaks (e.g. during the holidays for e-commerce sites) that the servers must be able to absorb. 
            Companies are therefore obliged to calibrate their number of servers according to these peaks, even though most of the time the site traffic is well below these peaks. 
            As a result, the servers are only used to their full potential 1% of the time (during peaks) and the rest of the time they are almost empty.
            <img src="./medias/images/Sustainability/server.jpg" alt="Picture of server" class="illustration">
            
        </p>

        <p class="block">
            The solution to avoid all this waste is called virtualization. 
            Instead of launching the web application directly on the server (physical machine), we launch it in a container which is then launched on a set of physical machines. 
            As I said before, a container is easily replicable and removable. 
            Thanks to this, we can adapt the number of containers according to the load and therefore turn off all the unused machines. 
            They will be reactivated only when the load increases. All this is of course done automatically with software like Kubernetes.
        </p>
        
        <p class="block">
            Even better, companies no longer need to buy servers but can simply rent them and pay "per use". 
            That is to say that the company will only pay for the actual number of visits that its site will have received. 
            They also don't have to worry about all the infrastructure because the cloud takes care of it. 
            In short, it's a win-win situation.
        </p>

        <p class="block">
            This is why, as a future engineer, 
            I will try as much as possible to promote the advantages of virtualization and the cloud in order to limit the waste of resources and thus to act for sustainable development.
        </p>

        <p class="block">
            This is just one example of sustainable development applied to IT, I have many more to discover. 
            In general, I try to ask myself the question: "Could this be optimized? 
            If the answer is yes, then there is waste somewhere and optimizing the solution would be a way to act for sustainable development.
        </p>
    </div>

    <div class="section">
        <h2> The last word </h2>
        <p class="block">
            Finally, before being a responsible engineer, I must be a responsible citizen who acts in favor of sustainable development. 
            According to me, the first key to act responsibly is knowledge. 
            For example, I recently learned that most of the household products, in addition to being inefficient, 
            were very polluting because they were directly rejected in the sewers. 
            With only a few simple household products such as Marseille soap, black soap, citric acid and baking soda, 
            it is possible to do almost all the household tasks in a completely ecological way.
            <img src="./medias/images/Sustainability/soap.jpg" alt="Some Marseille soap" class="illustration">
        </p>

        <p class="block">
            This is just one example to support the importance of being well informed and knowing how to question what you believe. 
            For example, the CAM courses at N7 as part of the "Acting for Sustainable Development" module taught me a lot about various subjects such as the circular economy, 
            the planes of tomorrow with Airbus, the possibility of helping an association with <a href="https://www.hallofchange.fr/">Hall of Change</a>, etc.
        </p>



    </div>

    <?php include 'include/footer.php'; ?>


</body>
</html>
