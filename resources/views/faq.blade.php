<x-layout>
    {{-- title start --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>
                    Our FAQ - Frequent Asked Question
                </h2>
            </div>
        </div>
    </div>
    {{-- title end --}}

    {{-- accordion start --}}
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                          Do you prefer FE or BE development?
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          I don't want to choose. I love the Front-end development and i'm fascinated by the Back-end development.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          In which programming language do you feel more prepared?
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          With Javascript i feel more comfortable
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Have you a job experience about coding?
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          Not at all. I'm ready to start a new job experience. All my past jobs grants me a lot of skills useful for every type of jobs.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Why this type of website?
                          </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Because i love the cryptocurrencies and the Blockchain world. In the near future, i have a master in Blockchain.
                            The Bitcoin idea, fascinating me.
                          </div>
                        </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>
    {{-- accordion end --}}
    
    
      
</x-layout>