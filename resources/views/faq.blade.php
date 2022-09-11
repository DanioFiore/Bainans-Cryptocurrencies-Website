<x-layout>
    {{-- title start --}}
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2>
                    {{__('ui.faqTitle')}}
                </h2>
            </div>
            <div class="col-6">
              <img src="/img/question2.webp" alt="" height="50px">
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
                        <button class="accordion-button bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                          {{__('ui.faqFirstQuestion')}}
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                         {{__('ui.faqFirstAnswer')}}
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          {{__('ui.faqSecondQuestion')}}
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          {{__('ui.faqSecondAnswer')}}
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          {{__('ui.faqThirdQuestion')}}
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          {{__('ui.faqThirdAnswer')}}
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                          <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            {{__('ui.faqFourthQuestion')}}
                          </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            {{__('ui.faqFourthAnswer')}}
                          </div>
                        </div>
                      </div>
                  </div>
                  <img src="/img/question.webp" alt="" width="200px" class="mt-3">
            </div>
        </div>
    </div>
    {{-- accordion end --}}
    
    
      
</x-layout>