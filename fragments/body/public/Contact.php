<div class="row">

    <div class="col-lg-8 offset-sm-2">
        <div class="border-bottom pb-3 mb-3">
            <h3 class="h3">Nous Contacter</h3><br/>

            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>

        <div class="row gx-2 pt-3 row-sm-eq text-center bloc">

            <div class="col-lg-4">
                <div class="mb-2 p-3 border bg-orange text-white">
                    <p class="my-2"><i class="fa-solid fa-map-location-dot fa-2x"></i></p>
                    15 Avenue Jean-Jaurès,<br/>
                    94110 Arcueil
                </div>
            </div>

            <div class="col-lg-4">

                <div class="mb-2 p-4">
                    Saisir votre message<br/>
                    <img src="images/typewriter.png" alt="" height="120px" />
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="mb-2 p-4 border bg-orange text-white">
                    <p class="my-2"><i class="fa-solid fa-mobile-screen fa-2x"></i></p>
                    01 23 45 67 89
                </div>
            </div>
            
        </div>

        <div class="mt-2 d-flex justify-content-center">

            <div class="bg-gray-light p-5 w-75">

                <div class="p-5">
                        
                    <form action="/SendMail.php" method="POST">
                        <h3 class="h3">FORMULAIRE DE CONTACT</h3>
                        <input id="username" name="username" type="text" class="form-control mb-3" placeholder="Votre nom" />
                        <input id="telephone" name="telephone" type="tel" pattern="0[67][0-9]{8}" class="form-control mb-3" placeholder="Votre numéro de téléphone" />
                        <input id="email" name="email" type="email" class="form-control mb-3" placeholder="Votredresse email" />

                        <textarea name="message" id="message" cols="30" rows="10" class="form-control mb-3" placeholder="Votre message"></textarea>

                        <button class="btn btn-outline-success" type="submit">Nous faire parvenir</button>
                    </form>

                </div>

            </div>

        </div>
    </div>

</div>
