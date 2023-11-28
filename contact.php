<?php

require_once('./component/header.php');

?>
<style>
    #contact {
    padding: 0 10%;
    margin-bottom: 50px;
    height: 90vh;
}
#contact form {
    background-color: #fff;
    margin:auto;
    display: flex;
    flex-direction: column;
    padding: 20px;
}


#contact form label {
    font-size: 14px;
    padding: 10px 0;
    font-weight: 600
}
#contact form input {
    padding: 8px;
    outline: 0;
    border: 1px solid #999;
}

textarea {
    height: 150px;
    resize: none;
    outline: 0;
    width: 100%;
    padding: 10px;
}
#contact form input:focus , textarea:focus {
    border: 1px solid #29d9d5;
}
iframe {
    height: 150px;
    width: 100%;
}
#contact button {
    width: fit-content;
    padding: 8px 40px;
    background-color: #111;
    border: 1px solid #111;
    color: #fff;
    cursor: pointer;
    transition: 0.5s;
}
#contact button:hover {
    letter-spacing: 1px;
}
</style>

    <!-- A propos section -->
    <section id="a-propos">
        <h1 class="title text-danger">nous contacter</h1>
        <div class="img-desc">
            <div class="">
              
            </div>
            <div class="right">
                <h3>Besoin d'aide? Nous sommes là pour vous</h3>
                <p>Bienvenue sur notre page de contact chez [Nom de votre entreprise]. Votre satisfaction est notre priorité absolue, et nous sommes là pour répondre à toutes vos questions, préoccupations ou demandes d'assistance.</p>
                <a href="#">retour</a>
            </div>
        </div>

    </section>

    <!-- section destination -->
    <section id="contact">
        <h1 class="title text-danger">form Contact</h1>
        <form action="">
            <div class="left-right">
                <div class="left">
                    <label>Nom Complet</label>
                    <input type="text">
                    <label>Objet</label>
                    <input type="text">
                    <label>Email</label>
                    <input type="text">
                    <label>Message</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <button>Envoyer</button>
        </form>
    </section>


    <!--  contact section -->
<?php

require_once('./component/footer.php');

?>