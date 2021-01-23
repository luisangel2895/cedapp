<div class="fixed z-40 h-screen">
    <button id="btnContact" class="absolute left-0 z-0 text-base text-white transform rotate-90 cursor-pointer 2xl:text-2xl bottom-1/2 rounded-t-xl focus:outline-none"
    style="background-color: #F35F73;width: 25vh;height: 4rem;margin-left: -9.2vh;">
        <i class="fas fa-chevron-up fa-xs"></i>
        <br>
        Enviar mensaje
    </button>
    <div class="relative z-10 w-screen h-screen max-h-screen transition-all duration-500 ease-in -ml-100vw" style="background-color: #F35F73;overflow-y: auto" id="formContact">
        <div class="container relative h-full px-12 py-4 mx-auto">
            <i class="absolute top-0 right-0 z-20 float-right pt-4 text-white cursor-pointer far fa-times-circle fa-2x" id="btnClose"></i>
            <div class="flex w-full h-full">
                <div class="flex flex-col w-1/2 h-full">
                    <div class="justify-center flex-grow-0 w-full h-20 lex md:h-40">
                        <img src="{{asset('images/numeros.png')}}" alt="" class="h-full">
                    </div>
                    <div>
                        <p class="text-white">
                            <strong>A nivel nacional:</strong> <br> <br>
                            Bomberos Central de emergencia: 116 <br>
                            Central Policial: 105 <br>
                            MINSA (Línea de emergencia COVID-19 y Salud Mental): 113 <br>
                            MIMP (Línea de atención casos de violencia familiar y abuso sexual): 100 <br>
                            Línea Niñez (Situación de riesgo de desprotección familiar): 1810 <br>
                            MINEDU “SíSeVe” (Denuncia de violencia escolar): 0800-76888 <br>
                            MININTER (Central Única de Denuncias): 1818 <br> <br>
                            <strong>
                                Lima:
                            </strong> <br> <br>
                            Hospital Honorio Delgado- Hideyo Noguchi Central Telefónica: 614-9200 <br>
                            Hospital Víctor Larco Herrera Central Telefónica: 261-5303 / 261-4907 <br>
                            Hospital Hermilio Valdizán Central Telefónica: 494-2410 / 494-2516 / 494-2429 <br>
                            Hospital María Auxiliadora  Central Telefónica:217-1818 <br>
                            Clínica Psiquiátrica Baltazar – Caravedo Central Telefónica: 467-3933 / 252-3581 <br> <br>
                            <strong>Cusco:</strong>  <br> <br>
                            Hospital de Salud Mental Juan Pablo II Central telefónica: (084) 581-700 Anexo 109 <br> <br>
                            <strong>Arequipa:</strong> <br> <br>
                            Instituto de Salud Moisés Heresi Central Telefónica: +51(54)213-371
                        </p>
                    </div>
                </div>
                <div class="flex flex-col w-1/2">
                    <div class="flex justify-center w-full h-20 md:h-40">
                        <img src="{{asset('images/mensaje.png')}}" alt="">
                    </div>
                    <div class="flex justify-center text-white">
                        <div class="w-2/3 p-4 rounded-xl" style="background-color: rgba(255, 255, 255, 0.3)">
                            <p>Si tienes una consulta, necesitas ayuda psicológica o estás pasando por alguna dificultad, puedes escribirnos o dejarnos un mensaje por el chat. Las consultas son confidenciales.</p>
                            <form action="">
                                <input type="text" placeholder="Nombre" class="w-full p-2 mt-4 placeholder-gray-200 bg-transparent border border-white focus:outline-none">
                                <input type="text" placeholder="Edad" class="w-full p-2 mt-4 placeholder-gray-200 bg-transparent border border-white focus:outline-none">

                                <p class="pt-8">¿Por dónde quieres que te contactemos?</p>
                                <select class="w-full p-2 mt-4 text-white placeholder-black bg-transparent border border-white focus:outline-none">
                                    <option class="text-black" selected>Whatsapp</option>
                                    <option class="text-black" >Celular</option>
                                    <option class="text-black" >SMS</option>
                                </select>
                                <p class="pt-8">¿En qué fecha?</p>
                                <input type="text" placeholder="10/12/2020" class="w-full p-2 mt-4 placeholder-gray-200 bg-transparent border border-white focus:outline-none">
                                <p class="pt-8">¿A qué hora?</p>
                                <input type="text" placeholder="10 am" class="w-full p-2 mt-4 placeholder-gray-200 bg-transparent border border-white focus:outline-none">

                                <textarea placeholder="Mensaje" class="w-full p-2 mt-4 placeholder-gray-200 bg-transparent border border-white appearance-none resize-none focus:outline-none"></textarea>

                                <button type="submit" class="float-right px-4 py-2 mt-4 text-red-600 bg-yellow-400 rounded">Enviar Mensaje</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
